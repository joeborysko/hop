<?php
	require_once( __DIR__ . "/class.header.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Footer extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "footer" );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{			
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW )
				&&
				!
				(
					$child instanceof Footer ||
					$child instanceof Header
				);
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE
			);
		}
	}
?>