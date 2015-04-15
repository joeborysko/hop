<?php

if ( ! isset( $_POST[ "element" ] ) )
{
	exit( "error: the 'element' post variable was not given" );
}

$elementToSaveJSON = $_POST[ "element" ];
$elementToSave = json_decode( $elementToSaveJSON );

//Make sure it's valid json
if ( $elementToSave == null )
{
	exit( "error: element not valid json" );
}

//Get the name of the element to save
$elementName = $elementToSave->name;

//Get the elements from the file
$elementDefinitions = json_decode( file_get_contents( "elementDefinitions.json" ) );

//Try to find the element with the same name in the file
$elementSaved = false;
for( $i = 0; $i < sizeof( $elementDefinitions ); ++$i )
{
	$elementDefinition = $elementDefinitions[ $i ];
	
	//Does the element have the same name?
	if ( $elementDefinition->name === $elementName )
	{
		//Replace the element
		$elementDefinitions[ $i ] = $elementToSave;
		$elementSaved = true;
		break;
	}
}

//If the element doesn't already exist
if ( ! $elementSaved )
{
	//Insert the element
	$elementDefinitions[] = $elementToSave;
}

//Save back to file
$elementDefinitionsJSON = json_encode( $elementDefinitions, JSON_PRETTY_PRINT );
file_put_contents( "elementDefinitions.json", $elementDefinitionsJSON );

exit( true );