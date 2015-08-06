function clearAll()
{
	$( "form" )[ 0 ].reset();
	$( "li" ).remove();
}

function addAttribute()
{
	return cloneTemplate( "#attributeTemplate", "#attributesList", ".attribute" );
}

function addConstant()
{
	return cloneTemplate( "#constantTemplate", "#constantsList", ".constant" );
}

function addConstructorParameter()
{
	return cloneTemplate( "#parameterTemplate", "#constructorParametersList",
		"#constructorParametersList .parameter" );
}

function addCustomMethod()
{
	var template = $( "#customMethodTemplate" );
	var templateInstance = template.html();
	$( "#customMethodsList" ).append( templateInstance );
	
	var instantiatedInstance = $( ".customMethod:last-child" );
	instantiatedInstance.find( ".removeButton" ).click( removeAttribute );
	instantiatedInstance.find( ".addButton" ).click( addCustomMethodParameter );
	
	return instantiatedInstance;
}

function addCustomMethodParameter( event )
{
	var caller = event.target;
	
	var template = $( "#parameterTemplate" );
	var templateInstance = template.html();
	var list = $( caller ).closest( ".inputContainer" ).find( ".customMethodParametersList" );
	list.append( templateInstance );
	var instantiatedInstance = list.find( ".parameter:last-child" );
	instantiatedInstance.find( ".removeButton" ).click( removeAttribute );
	
	return instantiatedInstance;
}

function cloneTemplate( templateSelector, listSelector, instanceSelector )
{
	var template = $( templateSelector );
	var templateInstance = template.html();
	$( listSelector ).append( templateInstance );
	var instantiatedInstance = $( instanceSelector + ":last-child" );
	instantiatedInstance.find( ".removeButton" ).click( removeAttribute );
	
	return instantiatedInstance;
}

function removeAttribute( event )
{
	removeTemplateInstance( event.target );
}

function removeConstant( event )
{
	removeTemplateInstance( event.target );
}

function removeConstructorParameter( event )
{
	removeTemplateInstance( event.target );
}

function removeCustomMethod( event )
{
	removeTemplateInstance( event.target );
}

function removeCustomMethodParameter( event )
{
	removeTemplateInstance( event.target );
}

function removeTemplateInstance( caller )
{
	$( caller ).closest( "li" ).remove();
}

function save()
{
	// Create the element object from the form data
	var elementObject = buildElementObject();
	
	// Write the object to the json file
	saveElementToFile( elementObject );
}

function buildElementObject()
{
	var element = { };
	element.name = $( "#elementName" ).val();
	element.className = $( "#className" ).val();
	
	element.directory = $( "#directory" ).val();
	if ( element.directory === "" )
	{
		element.directory = "./";
	}
	
	element.emptyElement = $( "#isEmpty" ).is( ":checked" );
	element.documentation = removeLineBreaks( $( "#elementDocumentation" ).val() );
	
	//Attributes
	var attributes = new Array();
	var attributesJQuery = $( ".attribute" );
	for( var i = 0; i < attributesJQuery.length; ++i )
	{
		var attributeJQuery = $( attributesJQuery.get( i ) );
		var attribute = { };
		
		attribute.name = attributeJQuery.find( ".attributeName" ).val();
		attribute.isBoolean = attributeJQuery.find( ".isBoolean" ).is( ":checked" );
		attribute.documentation = removeLineBreaks( attributeJQuery.find(
			".attributeDocumentation" ).val() );
		
		attributes.push( attribute );
	}
	element.attributes = attributes;
	
	//Constants
	var constants = new Array();
	var constantsJQuery = $( ".constant" );
	for( var i = 0; i < constantsJQuery.length; ++i )
	{
		var constantJQuery = $( constantsJQuery.get( i ) );
		var constant = { };
		
		constant.name = constantJQuery.find( ".constantName" ).val();
		constant.value = constantJQuery.find( ".constantValue" ).val();
		
		constants.push( constant );
	}
	element.constants = constants;
	
	//Constructor
	element.constructor = { };
	element.constructor.parameters = getParameters( $( "#constructorParametersList" ) );
	element.constructor.code = $( "#constructorCode" ).val();
	
	//Custom methods
	var customMethods = new Array();
	var customMethodsJQuery = $( ".customMethod" );
	for( var i = 0; i < customMethodsJQuery.length; ++i )
	{
		var customMethodJQuery = $( customMethodsJQuery.get( i ) );
		var customMethod = { };
		
		customMethod.name = customMethodJQuery.find( ".customMethodName" ).val();
		customMethod.scope = customMethodJQuery.find( ".customMethodScope option:selected" ).val();
		customMethod.documentation = removeLineBreaks( customMethodJQuery.find(
			".customMethodDocumentation" ).val() );
		customMethod.parameters = getParameters( customMethodJQuery.find(
			".customMethodParametersList" ) );
		customMethod.code = customMethodJQuery.find( ".customMethodCode" ).val(); 
		
		customMethods.push( customMethod );
	}
	element.customMethods = customMethods;
	
	return element;
}

function getParameters( parameterList )
{
	var parameters = new Array();
	var parametersJQuery = parameterList.find( ".parameter" );
	for ( var i = 0; i < parametersJQuery.length; ++i )
	{
		var parameterJQuery = $( parametersJQuery.get( i ) );
		var parameter = { };
		
		parameter.name = parameterJQuery.find( ".parameterName" ).val();
		parameter.default = parameterJQuery.find( ".parameterDefault" ).val();
		parameter.documentation = removeLineBreaks( parameterJQuery.find(
			".parameterDocumentation" ).val() );
		
		parameters.push( parameter );
	}
	
	return parameters;
}

function removeLineBreaks( string )
{
	return string.replace(/(\r\n|\n|\r)/gm,"");
}

function saveElementToFile( element )
{
	$.ajax
	(
		{
			url: "saveElement.php",
			method: "POST",
			data: { element: JSON.stringify( element ) }
		}
	).done( saveElementToFileComplete );
}

function saveElementToFileComplete( result )
{
	if ( result == true )
	{
		alert( "Element saved!" );
	}
	else
	{
		alert( "There was a problem saving the element: " + result );
	}
}

function loadElement()
{
	//Get the element name
	var elementName = $( "#elementName" ).val();
	
	//Call the PHP script to give us the element's JSON.
	$.ajax
	(
		{
			url: "getElement.php",
			method: "POST",
			data: { elementName: elementName }
		}
	).done( loadElementComplete );
}

function loadElementComplete( result )
{
	//Try to parse the result as JSON
	try
	{
		var element = JSON.parse( result );
		buildForm( element );
	}
	catch( e )
	{
		//The element could not be loaded...
		alert( result );
	}
}

function buildForm( element )
{
	clearAll();
	
	$( "#elementName" ).val( element.name );
	$( "#className" ).val( element.className );
	$( "#directory" ).val( element.directory );
	$( "#isEmpty" ).prop( "checked", element.emptyElement );
	$( "#elementDocumentation" ).val( element.documentation );
	
	//Attributes
	if ( element.attributes )
	{
		var attributes = element.attributes;
		for( var i = 0; i < attributes.length; ++i )
		{
			var attribute = attributes[ i ];
			var attributeJQuery = addAttribute();
			attributeJQuery.find( ".attributeName" ).val( attribute.name );
			attributeJQuery.find( ".isBoolean" ).prop( "checked", attribute.isBoolean );			
			attributeJQuery.find( ".attributeDocumentation" ).val( attribute.documentation );
		}
	}
	
	//Constants
	if( element.constants )
	{
		var constants = element.constants;
		for( var i = 0; i < constants.length; ++i )
		{
			var constant = constants[ i ];
			var constantJQuery = addConstant();
			constantJQuery.find( ".constantName" ).val( constant.name );
			constantJQuery.find( ".constantValue" ).val( constant.value );
		}
	}
	
	//Constructor
	buildParameters( element.constructor.parameters, addConstructorParameter );
	$( "#constructorCode" ).val( element.constructor.code );
	
	//Custom methods
	if ( element.customMethods )
	{
		var customMethods = element.customMethods;
		for( var i = 0; i < customMethods.length; ++i )
		{
			var customMethod = customMethods[ i ];
			var customMethodJQuery = addCustomMethod();
			
			customMethodJQuery.find( ".customMethodName" ).val( customMethod.name );
			customMethodJQuery.find( ".customMethodScope option[value='" +
				customMethod.scope + "']" ).prop( "selected", true );
			customMethodJQuery.find( ".customMethodDocumentation" ).val(
				customMethod.documentation );				
			buildParameters( customMethod.parameters, addCustomMethodParameter,
				{ target: customMethodJQuery.get( 0 ) } );
			customMethodJQuery.find( ".customMethodCode" ).val( customMethod.code );
		}
	}
}

function buildParameters( parameters, addFunction, args )
{
	if ( parameters )
	{
		for( var i = 0; i < parameters.length; ++i )
		{
			var parameter = parameters[ i ];
			var parametersJQuery = addFunction( args );
			parametersJQuery.find( ".parameterName" ).val( parameter.name );
			parametersJQuery.find( ".parameterDefault" ).val( parameter.default );
			parametersJQuery.find( ".parameterDocumentation" ).val( parameter.documentation );
		}
	}
}