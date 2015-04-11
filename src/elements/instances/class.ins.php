<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Ins extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "ins" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setCite( $citeURL )
		{
			$this->setAttribute( "cite", $citeURL );
		}
		
		public function setDateTime( $dateTimeOfChange )
		{
			$this->setAttribute( "datetime", $dateTimeOfChange );
		}
	}
?>