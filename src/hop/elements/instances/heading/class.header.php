<?php
	require_once( __DIR__ . "/../class.address.php" );
	require_once( __DIR__ . "/../class.footer.php" );
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class Header extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "header" );
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
				!
				(
					$child instanceof Header ||
					$child instanceof Footer
				);				
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent->acceptsContentCategory( ContentCategory::FLOW ) &&
				!
				(
					$parent instanceof Address ||
					$parent instanceof Footer ||
					$parent instanceof Header
				);
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>