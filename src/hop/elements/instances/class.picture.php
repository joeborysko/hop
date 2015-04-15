<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Picture extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "picture" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::EMBEDDED,
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return true;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::EMBEDDED );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>