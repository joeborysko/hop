<?php
	require_once( __DIR__ . "/class.textElement.php" );
	require_once( __DIR__ . "/class.dataList.php" );
	require_once( __DIR__ . "/class.optGroup.php" );
	require_once( __DIR__ . "/class.select.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Option extends HTMLElement
	{
		private $_isEmptyElement;
		
		public function __construct()
		{
			parent::__construct( "option" );
			
			$this->_isEmptyElement = true;
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child instanceof TextElement;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof DataList  ||
				$parent instanceof OptGroup ||
				$parent instanceof Select;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function addChild( \IHTMLElement $child )
		{			
			parent::addChild( $child );
			
			if ( $child instanceof TextElement )
			{
				$this->_isEmptyElement = false;
			}
		}
		
		public function setText( $text )
		{
			parent::setText( $text );
			$this->_isEmptyElement = false;
		}
		
		public function getHTML()
		{
			$html = parent::getHTML();			
			if ( $this->_isEmptyElement === true )
			{
				//Remove the </option> closing tag
				$html = substr( $html, 0, -9 );
			}
			
			return $html;
		}
		
		public function setDisabled()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setLabel( $label )
		{
			$this->setAttribute( "label", $label );
		}
		
		public function setSelected()
		{
			$this->setAttribute( "selected" );
		}
		
		public function setValue( $value )
		{
			$this->setAttribute( "value", $value );
		}
	}
?>