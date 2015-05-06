<?php
	require_once( __DIR__ . "/class.article.php" );
	require_once( __DIR__ . "/class.aside.php" );
	require_once( __DIR__ . "/class.footer.php" );
	require_once( __DIR__ . "/class.header.php" );
	require_once( __DIR__ . "/class.aside.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Main extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "main" );
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
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent->acceptsContentCategory( ContentCategory::FLOW ) &&
				!
				(
					$parent instanceof Article ||
					$parent instanceof Aside ||
					$parent instanceof Footer ||
					$parent instanceof Header ||
					$parent instanceof Nav
				);
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>