<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	/**
	 * Represents the <span> element.
	 */
	class Span extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "span" );
		}		
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child->hasContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent->acceptsContentCategory(
					ContentCategory::PHRASING );			
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
	}
?>