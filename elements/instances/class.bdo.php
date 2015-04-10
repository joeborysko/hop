<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class BDO extends HTMLElement
	{
        const DIRECTION_LEFT_TO_RIGHT   = "ltr";
        const DIRECTION_RIGHT_TO_LEFT   = "rtl";
        const DIRECTION_AUTO            = "auto";
        
		public function __construct()
		{
			parent::__construct( "bdo" );
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
			return $parent->acceptsContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
	}
?>