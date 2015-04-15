<?php
	require_once( __DIR__ . "/class.option.php" );
	require_once( __DIR__ . "/class.select.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class OptGroup extends HTMLElement
	{
		public function __construct( $label )
		{
			parent::__construct( "optgroup" );
			
			$this->setLabel( $label );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child instanceof Option;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Select;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function setDisabled()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setLabel( $label )
		{
			$this->setAttribute( "label", $label );
		}
	}
?>