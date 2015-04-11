<?php
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class Script extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "script" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::METADATA,
				ContentCategory::PHRASING,
				ContentCategory::SCRIPT_SUPPORTING_ELEMENT
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return false;
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
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function setAsync()
		{
			$this->setAttribute( "async" );
		}
		
		public function setSrc( $src )
		{
			$this->setAttribute( "src", $src );
		}
		
		public function setType( $type )
		{
			$this->setAttribute( "type", $type );
		}
		
		public function setDefer()
		{
			$this->setAttribute( "defer" );
		}
	}
?>