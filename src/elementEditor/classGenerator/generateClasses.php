<?php

$startTime = microtime( true );

//Clear the existing classes
removeClasses();

//Open the element definitions
$elementDefinitions = json_decode( file_get_contents(
	"../elementDefinitions.json" ) );

//Parse each one
foreach( $elementDefinitions as $elementDefinition )
{
	createElementClass( $elementDefinition );
}

$totalTime = microtime( true ) - $startTime;
$totalTimeFormatted = number_format( $totalTime, 2 );
echo( "Classes generated successfully in $totalTimeFormatted seconds" );

function createElementClass( $elementDefinition )
{
	$classString = "<?php\n\n";
	$classString = addNamespace( $classString, $elementDefinition );
	$classString = addRequires( $classString, $elementDefinition );
	$classString = addClassDocumentation( $classString, $elementDefinition );
	$classString = addClassName( $classString, $elementDefinition );
	$classString = addConstants( $classString, $elementDefinition );
	$classString = addConstructor( $classString, $elementDefinition );
	$classString = addAttributes( $classString, $elementDefinition );
	$classString = addCustomMethods( $classString, $elementDefinition );
	
	//Closing bracket for the class
	$classString = trim( $classString ) . "\n}";
	
	saveClass( $classString, $elementDefinition );
}

function addNamespace( $classString, $elementDefinition )
{
	$directory = $elementDefinition->directory;
	
	//Replace backslashes with forward slashes
	$formattedDirectory = str_replace( "/", "\\", $directory );
	
	$namespace = "hop\\elements\\instances$formattedDirectory";
	
	$classString .= "namespace $namespace;\n\n";
	return $classString;
}

//Import needed classes
function addRequires( $classString, $elementDefinition )
{
	//Determine if require HTMLElement or EmptyElement	
	$parent = "HtmlElement";
	if ( $elementDefinition->emptyElement == true )
	{
		$parent = "EmptyElement";
	}
	
	//Determine how many deep the directory is
	$directory = $elementDefinition->directory;
	$numLevels = substr_count( $directory, "/" ) + 1;
	
	//require_once the parent
	$requireString = "require_once __DIR__ . \"/";
	for( $i = 0; $i < $numLevels; ++$i )
	{
		$requireString .= "../";
	}
	$requireString .= "$parent.php\";\n\n";
	
	return $classString . $requireString;
}

function addClassDocumentation( $classString, $elementDefinition )
{
	$documentation = $elementDefinition->documentation;
	
	$maxLineLength = 76;
	
	$documentationString = "/**";
	
	//Create the documentation of the actual function
	if ( ! empty( $documentation ) )
	{
		$documentation = strip_tags( $documentation,
			"<ul><ol><code><li><p>" );
		$documentation = html_entity_decode( $documentation );
		$documentation = wordwrap( $documentation,
			$maxLineLength );
		$documentation = str_replace( "\n", "\n * ",
			$documentation );
		$documentationString .= "\n * $documentation";
	}
	
	$documentationString .= "\n */";
	
	return $classString . $documentationString . "\n";
}

function addClassName( $classString, $elementDefinition )
{
	$className = $elementDefinition->className;
	
	//Determine if parent is either HTMLElement or EmptyElement
	$parent = "HTMLElement";
	if ( $elementDefinition->emptyElement == true )
	{
		$parent = "EmptyElement";
	}
	
	$classString .= "class $className extends $parent\n{\n\t";
	return $classString;
}

function addConstants( $classString, $elementDefinition )
{
	$constantsString = "";
	
	$constants = $elementDefinition->constants;
	if ( sizeof( $constants ) > 0 )
	{
		foreach( $constants as $constant )
		{
			$constantName = $constant->name;
			$constantValue = $constant->value;
			
			$constantsString .= "const $constantName = \"$constantValue\";\n\t";
		}
		$constantsString .= "\n\t";
	}
	
	return $classString . $constantsString;
}

function addConstructor( $classString, $elementDefinition )
{
	//Get the properties of the constructor
	$constructor = $elementDefinition->constructor;
	$parameters = $constructor->parameters;
	$code = $constructor->code;
	$elementName = $elementDefinition->name;
	
	//Add the parent::__construct code
	$fullCode = "parent::__construct( \"$elementName\" );";
	if ( ! empty( $code ) )
	{
		$fullCode .= "\n$code";
	}	
	
	$constructorString = createFunctionString( "__construct", "public", "",
		$parameters, $fullCode );
	$constructorString .= "\n\t";
	
	return $classString . $constructorString;
}

function addAttributes( $classString, $elementDefinition )
{
	$attributesString = "";
	
	$attributes = $elementDefinition->attributes;
	foreach( $attributes as $attribute )
	{
		$attributesString .= createAttributeString( $attribute ) . "\n\t";
	}
	return $classString . $attributesString;
}

function createAttributeString( $attribute )
{
	$name = $attribute->name;
	$isBoolean = $attribute->isBoolean;
	$documentation = $attribute->documentation;
	
	//Remove any hyphens in the name and make the next character uppercase
	$friendlyName = $name;
	$indexHyphen = strpos( $name, "-" );
	if ( $indexHyphen !== false )
	{
		$friendlyName = substr( $name, 0, $indexHyphen ) .
			strtoupper( substr( $name, $indexHyphen + 1, 1 ) ) .
			substr( $name, $indexHyphen + 2 );
	}
	
	$parameters = array();
	$functionName = "set" . strtoupper( substr( $friendlyName, 0, 1 ) ) .
		substr( $friendlyName, 1 );	
	
	$code = "\$this->setAttribute( \"" . strtolower( $name ) . "\"";
	if ( $isBoolean )
	{
		$functionName .= "Yes";
	}
	else
	{
		$parameter = new stdClass();
		$parameter->name = $friendlyName;
		$parameter->documentation = "";
		$parameter->default = "";
		$parameters[] = $parameter;
		
		$code .= ", \$$friendlyName ";
	}
	$code .= ");";
	
	return createFunctionString( $functionName, "public", $documentation,
		$parameters, $code );
}

function addCustomMethods( $classString, $elementDefinition )
{
	$customMethodsString = "";
	
	$customMethods = $elementDefinition->customMethods;
	foreach( $customMethods as $customMethod )
	{
		$customMethodsString .= createCustomMethodString( $customMethod );
	}	
	return $classString . $customMethodsString;
}

function createCustomMethodString( $customMethod )
{
	$name = $customMethod->name;
	$scope = $customMethod->scope;
	$documentation = $customMethod->documentation;
	$parameters = $customMethod->parameters;
	$code = $customMethod->code;
	
	return createFunctionString( $name, $scope, $documentation,
		$parameters, $code );
}

function createFunctionString( $functionName, $functionScope,
	$functionDocumentation, $parameters, $code )
{
	$functionString = createFunctionDocumentationString( $functionDocumentation,
		$parameters );
	
	$functionString .= "\n\t$functionScope function $functionName(";
	
	//Create the parameter list
	//Determine if there any params
	if ( sizeof( $parameters ) > 0 )
	{
		$functionString .= " " . createFunctionParametersString(
			$parameters ) . " ";
	}
	$functionString .= ")\n\t{\n\t\t";
	
	//Create the function body
	if ( ! empty( $code ) )
	{
		$code = str_replace( "\n", "\n\t\t", $code );
		$functionString .= "$code";
	}
	$functionString .= "\n\t}\n\t";
	
	return $functionString;
}

function createFunctionDocumentationString( $functionDocumentation,
	$parameters )
{
	$maxLineLength = 72;
	
	$documentationString = "/**";
	
	//Create the documentation of the actual function
	if ( ! empty( $functionDocumentation ) )
	{
		$functionDocumentation = strip_tags( $functionDocumentation,
			"<ul><ol><code><li><p>" );
		$functionDocumentation = html_entity_decode( $functionDocumentation );
		$functionDocumentation = wordwrap( $functionDocumentation,
			$maxLineLength );
		$functionDocumentation = str_replace( "\n", "\n\t * ",
			$functionDocumentation );
		$documentationString .= "\n\t * $functionDocumentation";
	}
	
	//Create the documentation for each parameter
	foreach( $parameters as $parameter )
	{
		$parameterName = $parameter->name;
		$parameterDocumentation = $parameter->documentation;
		$parameterDocumentation = wordwrap( $parameterDocumentation,
			$maxLineLength );
		$parameterDocumentation = str_replace( "\n", "\n\t * ",
			$parameterDocumentation );
		$documentationString .= "\n\t * @param $parameterName";
		
		if ( ! empty( $parameterDocumentation ) )
		{
			$documentationString .= "\n\t * $parameterDocumentation";
		}			
	}
	
	$documentationString .= "\n\t */";
	
	return $documentationString;
}

function createFunctionParametersString( $parameters )
{
	$parametersString = "";
	$numParameters = sizeof( $parameters );
	for( $i = 0; $i < $numParameters; ++$i )
	{
		$parameter = $parameters[ $i ];
		$parameterString = createParameterString( $parameter );		
		$parametersString .= $parameterString;
		
		if ( $i !== $numParameters - 1 )
		{
			$parametersString .= ", ";
		}
	}
	return $parametersString;
}

function createParameterString( $parameter )
{
	$name = $parameter->name;
	$default = $parameter->default;
	
	$parameterString = "\$$name";
	if ( ! empty( $default ) )
	{
		//Add quotes around the default if it's a string
		if( is_string( $default ) )
		{
			$parameterString .= "=\"$default\"";
		}
		//Otherwise don't add quotes
		else
		{
			$parameterString .= "=$default";
		}
	}
	
	return $parameterString;
}

//Remove the current class files.
function removeClasses()
{
	clearDirectory( "classes" );
}

function saveClass( $classString, $elementDefinition )
{
	$directory = $elementDefinition->directory;
	$className = $elementDefinition->className;	
	
	$saveDirectory = "classes$directory/";
	$fileName = createClassFileName( $className );
	//Create the directory if it doesn't exist
	if ( ! is_dir( $saveDirectory ) )
	{
		mkdir( $saveDirectory );
	}
	file_put_contents( $saveDirectory . $fileName, $classString );
}

function createClassFileName( $className )
{
	return "$className.php";
}

//http://stackoverflow.com/a/3349792/3816779
function clearDirectory( $dir )
{
	$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
	$files = new RecursiveIteratorIterator($it,
				 RecursiveIteratorIterator::CHILD_FIRST);
	foreach($files as $file) {
		if ($file->isDir()){
			rmdir($file->getRealPath());
		} else {
			unlink($file->getRealPath());
		}
	}
}