<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class NoScript extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "noscript" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::METADATA,
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
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
	}
?>