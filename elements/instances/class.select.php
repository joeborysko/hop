<?php
	require_once( __DIR__ . "/class.option.php" );
	require_once( __DIR__ . "/class.optGroup.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Select extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "select" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING,
				ContentCategory::INTERACTIVE,
				ContentCategory::LISTED,
				ContentCategory::LABELABLE,
				ContentCategory::RESETTABLE,
				ContentCategory::SUBMITTABLE,
				ContentCategory::FORM_ASSOCIATED_ELEMENT
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child instanceof Option ||
				$child instanceof OptGroup;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function setAutofocus()
		{
			$this->setAttribute( "autofocus" );
		}
		
		public function setDisabled()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setForm( $idForm )
		{
			$this->setAttribute( "form", $idForm );
		}
                
		public function setMultiple()
		{
				$this->setAttribute( "multiple" );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setOnChange( $onChange )
		{
			$this->setAttribute( "onchange", $onChange );
		}
		
		public function setRequired()
		{
			$this->setAttribute( "required" );
		}
		
		public function setSize( $numRows )
		{
			$this->setAttribute( "size", $numRows );
		}
	}
?>