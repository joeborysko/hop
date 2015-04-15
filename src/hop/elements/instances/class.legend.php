<?php
	require_once( __DIR__ . "/class.fieldset.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Legend extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "legend" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Fieldset;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
	}
?>