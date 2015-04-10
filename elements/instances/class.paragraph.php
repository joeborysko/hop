<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	/**
	 * Represents the <p> element.
	 */
	class Paragraph extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "p" );
		}		
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child->hasContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			$parent->acceptsContentCategory( ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
	}
?>