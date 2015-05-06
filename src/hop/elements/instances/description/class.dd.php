<?php
	require_once( __DIR__ . "/class.dl.php" );
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class DD extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "dd" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::FLOW
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof DL;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>