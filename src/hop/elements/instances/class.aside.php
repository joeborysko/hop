<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Aside extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "aside" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::SECTIONING,
				ContentCategory::PALPABLE,
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>