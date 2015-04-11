<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Fieldset extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "fieldset" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::SECTIONING_ROOT,
				ContentCategory::LISTED,
				ContentCategory::FORM_ASSOCIATED_ELEMENT
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
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
		
		public function setDisabledYes()
		{
			$this->setAttribute( "disabled" );
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