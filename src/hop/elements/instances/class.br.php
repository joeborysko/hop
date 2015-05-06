<?php
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class BR extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "br" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::FLOW,
				ContentCategory::PHRASING
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::PHRASING );
		}
	}
?>