<?php
	require_once( __DIR__ . "/class.li.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	require_once( __DIR__ . "/../interface.iHTMLElement.php" );
	
	/**
	 * Represents the <ol> element.
	 */
	class OL extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "ol" );
		}
		
		protected function initContentCategories()
		{
			return array
			(
				ContentCategory::FLOW
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child instanceof LI;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function getContentCategories()
		{
			return array( ContentCategory::FLOW );
		}
	}
?>