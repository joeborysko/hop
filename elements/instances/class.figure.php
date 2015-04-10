<?php
	require_once( __DIR__ . "/class.figCaption.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Figure extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "figure" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::SECTIONING_ROOT,
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ) ||
				$child instanceof FigCaption;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
	}
?>