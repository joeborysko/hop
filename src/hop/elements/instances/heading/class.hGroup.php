<?php
	require_once( __DIR__ . "/class.heading.php" );
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class HGroup extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "hgroup" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::HEADING,
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child instanceof Heading;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
	}
?>