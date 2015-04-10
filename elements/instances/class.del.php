<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Del extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "del" );
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
		
		public function setCite( $citeURI )
		{
			$this->setAttribute( "cite", $citeURI );
		}
		
		public function setDateTime( $dateTime )
		{
			$this->setAttribute( "datetime", $dateTime );
		}
	}
?>