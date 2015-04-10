<?php
	require_once( __DIR__ . "/class.head.php" );
	require_once( __DIR__ . "/class.textElement.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );

	class Title extends HTMLElement
	{
		public function __construct( $titleText )
		{
			parent::__construct( "title" );
			
			$this->setText( $titleText );
		}
		
		protected function initContentCategories()
		{
			return array
			(
				ContentCategory::METADATA
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return false;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Head;
		}
		
		public function getContentCategories()
		{
			return array( ContentCategory::METADATA );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}		
	}
?>