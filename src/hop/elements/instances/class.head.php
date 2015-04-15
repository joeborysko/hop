<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Head extends HTMLElement
	{		
		public function __construct( $titleText )
		{
			parent::__construct( "head" );
			
			$title = new Title( $titleText );
			$this->addChild( $title );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child->hasContentCategory(
				ContentCategory::METADATA );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof HTMLRoot;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return $contentCategory === ContentCategory::METADATA;
		}
	}
?>