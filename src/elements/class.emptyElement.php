<?php
	require_once( __DIR__ . "/class.htmlElement.php" );
	
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
		
		final protected function isAllowedChild( IHTMLElement $child )
		{
			return false;
		}
		
		public function getHTML()
		{
			return "<$this->_tagName " . $this->_classes->getHTML() .
				" " . $this->_attributes->getHTML() . ">";
		}
		
		final public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
	}
?>