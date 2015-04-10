<?php
	require_once( __DIR__ . "/class.object.php" );
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class Param extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "param" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Object;
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setValue( $value )
		{
			$this->setAttribute( "value", $value );
		}
	}
?>