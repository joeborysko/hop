<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class TextArea extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "textarea" );
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
				ContentCategory::FORM_ASSOCIATED_ELEMENT,
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child instanceof TextElement;
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
		
		public function setAutocompleteOn()
		{
			$this->setAttribute( "autocomplete", "on" );
		}
		
		public function setAutocompleteOff()
		{
			$this->setAttribute( "autocomplete", "off" );
		}
		
		public function setAutofocus()
		{
			$this->setAttribute( "autofocus" );
		}
		
		public function setCols( $numColumns )
		{
			$this->setAttribute( "cols", $numColumns );
		}
		
		public function setDisabled()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setForm( $idFormOwner )
		{
			$this->setAttribute( "form", $idFormOwner );
		}
		
		public function setMaxLength( $numCharacters )
		{
			$this->setAttribute( "maxlength", $numCharacters );
		}
		
		public function setMinLength( $numCharacters )
		{
			$this->setAttribute( "minLength", $numCharacters );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setPlaceholder( $placeholder )
		{
			$this->setAttribute( "placeholder", $placeholder );
		}
		
		public function setReadonly()
		{
			$this->setAttribute( "readonly" );
		}
		
		public function setRequired()
		{
			$this->setAttribute( "required" );
		}
		
		public function setRows( $numRows )
		{
			$this->setAttribute( "rows", $numRows );
		}
		
		public function setSelectionDirection( $direction )
		{
			$this->setAttribute( "selectionDirection", $direction );
		}
		
		public function setSelectionEnd( $indexLastCharacter )
		{
			$this->setAttribute( "selectionEnd", $indexLastCharacter );
		}
		
		public function setSelectionStart( $indexFirstCharacter )
		{
			$this->setAttribute( "selectionStart", $indexFirstCharacter );
		}
		
		public function setSpellcheckOn()
		{
			$this->setAttribute( "spellcheck", "true" );
		}
		
		public function setSpellcheckOff()
		{
			$this->setAttribute( "spellcheck", "false" );
		}
		
		public function setWrapHard()
		{
			$this->setAttribute( "wrap", "hard" );
		}
		
		public function setWrapSoft()
		{
			$this->setAttribute( "wrap", "soft" );
		}
	}
?>