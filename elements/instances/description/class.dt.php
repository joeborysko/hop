<?php
	require_once( __DIR__ . "/class.dl.php" );
	require_once( __DIR__ . "/../class.footer.php" );
	require_once( __DIR__ . "/../class.header.php" );
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class DT extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "dt" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ) &&
				!
				(
					$child->hasContentCategory( ContentCategory::SECTIONING ) ||
					$child->hasContentCategory( ContentCategory::HEADING ) ||
					$child instanceof Header ||
					$child instanceof Footer
				);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof DL;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>