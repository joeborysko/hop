<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Details extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "details" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE,
				ContentCategory::INTERACTIVE,
				ContentCategory::SECTIONING_ROOT
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ); //||
				//$child instanceof Summary;
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
		
		public function setOpenYes()
		{
			$this->setAttribute( "open" );
		}
	}
?>