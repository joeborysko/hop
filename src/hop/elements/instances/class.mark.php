<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Mark extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "mark" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING,
				ContentCategory::PALPABLE
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
				ContentCategory::PHRASING );
		}
	}
?>