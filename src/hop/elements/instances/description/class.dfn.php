<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class DFN extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "div" );
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
			return
				$child->hasContentCategory( ContentCategory::PHRASING ) &&
				! $child instanceof DFN;
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