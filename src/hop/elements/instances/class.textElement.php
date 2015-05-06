<?php
	require_once( __DIR__ . "/../interface.iHTMLElement.php" );
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class TextElement implements IHTMLElement
	{
		private $_text;
		
		public function __construct( $text )
		{
			$this->_text = $text;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function addChild( IHTMLElement $child )
		{
			$message = "TextElements cannot have children";
			throw new BadFunctionCallException( $message );
		}
		
		public function hasContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
			!
			(
				$parent instanceof EmptyElement ||
				$parent instanceof TextElement
			);
		}
		
		public function getHTML()
		{
			return $this->_text;
		}
	}
?>