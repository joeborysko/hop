<?php
	require_once( __DIR__ . "/class.option.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class DataList extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "datalist" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory(
					ContentCategory::PHRASING ) ||
				$child instanceof Option;
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