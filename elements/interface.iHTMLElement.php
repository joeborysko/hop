<?php
	require_once( __DIR__ . "/enum.contentCategory.php" );
	require_once( __DIR__ . "/../interface.iHTMLComponent.php" );
	
	interface IHTMLElement extends IHTMLComponent
	{
		function addChild( IHTMLElement $child );
		function isAllowedParent( IHTMLElement $parent );
		function hasContentCategory( $contentCategory );
		function acceptsContentCategory( $contentCategory );
	}
?>