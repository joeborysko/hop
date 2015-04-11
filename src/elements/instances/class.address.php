<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Address extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "address" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ) &&
				! $child->hasContentCategory(
					ContentCategory::HEADING ) &&
				! $child->hassContentCategory(
					ContentCategory::SECTIONING ); //&&
				//! $child instanceof Header &&
				//! $child instanceof Footer;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>