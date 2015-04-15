<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Abbr extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "abbr" );
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
			return $child->hasContentCategory(
				ContentCategory::PHRASING );
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
		
		/**
		 * Set the full description of this abbreviation. This function simply
		 * sets the title attribute.
		 */
		public function setFullDescription( $fullDescription )
		{
			$this->setTitle( $fullDescription );
		}
	}
?>