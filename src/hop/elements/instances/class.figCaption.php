<?php
	require_once( __DIR__ . "/class.figure.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class FigCaption extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "figcaption" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Figure;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>