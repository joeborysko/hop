<?php

namespace hop\elements\instances;

require_once( __DIR__ . "/../IHTMLElement.php" );
require_once( __DIR__ . "/../EmptyElement.php" );

class TextElement implements IHTMLElement
{
	private $_text;
	
	public function __construct( $text )
	{
		$this->_text = $text;
	}
	
	public function addChild( IHTMLElement $child )
	{
		$message = "TextElements cannot have children";
		throw new BadFunctionCallException( $message );
	}
	
	public function getHTML()
	{
		return $this->_text;
	}
}