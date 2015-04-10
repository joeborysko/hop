<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Button extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "button" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING,
				ContentCategory::INTERACTIVE,
				ContentCategory::LISTED,
				ContentCategory::LABELABLE,
				ContentCategory::SUBMITTABLE,
				ContentCategory::FORM_ASSOCIATED_ELEMENT,
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
		
		public function setAutofocus()
		{
			$this->setAttribute( "autofocus" );
		}
		
		public function setDisabled()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setForm( $idFormOwner )
		{
			$this->setAttribute( "form", $idFormOwner );
		}
		
		public function setFormAction( $uri )
		{
			$this->setAttribute( "formaction", $uri );
		}
		
		public function setFormEncType( $encodingType )
		{
			$this->setAttribute( "formenctype", $encodingType );
		}
		
		public function setFormMethodGet()
		{
			$this->setAttribute( "formmethod", "get" );
		}
		
		public function setFormMethodPost()
		{
			$this->setAttribute( "formmethod", "post" );
		}
		
		public function setFormNoValidate()
		{
			$this->setAttribute( "formnovalidate" );
		}
		
		public function setFormTarget( $formTarget )
		{
			$this->setAttribute( "formtarget", $formTarget );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setType( $type )
		{
			$this->setAttribute( "type", $type );
		}
		
		public function setValue( $value )
		{
			$this->setAttribute( "value", $value );
		}
	}
?>