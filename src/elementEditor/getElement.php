<?php

if ( ! isset( $_POST[ "elementName" ] ) )
{
	exit( "error: the 'elementName' post variable was not given" );
}

$elementName = $_POST[ "elementName" ];

//Get the elements from the file
$elementDefinitions = json_decode( file_get_contents( "elementDefinitions.json" ) );

//Try to find the element with the same name in the file
for( $i = 0; $i < sizeof( $elementDefinitions ); ++$i )
{
	$elementDefinition = $elementDefinitions[ $i ];
	
	//Does the element have the same name?
	if ( $elementDefinition->name === $elementName )
	{
		//Return the element
		exit( json_encode( $elementDefinition ) );
	}
}

//Well shucks, the element wasn't found
exit( "error: the element with the name '$elementName' could not be found" );