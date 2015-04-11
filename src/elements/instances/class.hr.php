<?php
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class HR extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "hr" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::FLOW
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::FLOW );
		}
	}
?>