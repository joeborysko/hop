<?php
	require_once( __DIR__ . "/class.meta.php" );
	
	class UserDefinedMetadata extends Meta
	{
		public function getContentCategories()
		{
			return array
			(
				ContentCategory::METADATA,
				ContentCategory::PHRASING
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{		
			return
				$parent->acceptsContentCategory(
					ContentCategory::METADATA )
				||
				$parent->acceptsContentCategory(
					ContentCategory::PHRASING );
		}
	}
?>