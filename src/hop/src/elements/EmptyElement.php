<?php

namespace hop\elements;

require_once( __DIR__ . "/HTMLElement.php" );

/**
 * Empty elements are HTML elements which have self-closing tags, such
 * as <input>.
 */
abstract class EmptyElement extends HTMLElement
{
	final public function setText( $text )
	{
		$message = "Empty html elements cannot have text elements";
		throw new BadFunctionCallException( $message );
	}
	
	final public function addChild( IHTMLElement $child )
	{
		$message = "Empty html elements cannot have text elements";
		throw new BadFunctionCallException( $message );
	}
	
	public function getHTML()
	{
		return "<$this->_tagName " . $this->_classes->getHTML() .
			" " . $this->_attributes->getHTML() . ">";
	}
}