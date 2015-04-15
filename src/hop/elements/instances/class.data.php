<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Data extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "data" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE,
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setValue( $value )
		{
			$this->setAttribute( "value", $value );
		}
	}
?>