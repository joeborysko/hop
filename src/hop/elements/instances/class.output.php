<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Output extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "output" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING,
				ContentCategory::LISTED,
				ContentCategory::LABELABLE,
				ContentCategory::RESETTABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
		
		public function setFor( array $elementIDs )
		{
			$forString = implode( ",", $elementIDs );
			$this->setAttribute( "for", $forString );
		}
		
		public function setForm( $idForm )
		{
			$this->setAttribute( "form", $idForm );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
	}
?>