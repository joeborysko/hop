<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Content extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "content" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::TRANSPARENT
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
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
		
		public function setSelect( $select )
		{
			$this->setAttribute( "select", $select );
		}
	}
?>