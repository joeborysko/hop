<?php

namespace hop\elements;

require_once( __DIR__ . "/../interface.iHTMLComponent.php" );

interface IHTMLElement extends IHTMLComponent
{
	function addChild( IHTMLElement $child );
}