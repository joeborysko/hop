<?php
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class Heading extends HTMLElement
	{
		public function __construct( $headingType )
		{
			parent::__construct( "h" . $headingType );
		}
		
		public function getContentCategories()
		{
			return array
			(
				ContentCategory::HEADING,
				ContentCategory::PALPABLE
			);
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return $contentCategory === ContentCategory::PHRASING;
		}
		
		public function isAllowedChild( \IHTMLElement $child )
		{
			return $child->hasContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::FLOW ); // || $parent instanceof HGroup
		}
	}
?>