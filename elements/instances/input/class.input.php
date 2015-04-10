<?php
	require_once( __DIR__ . "/enum.inputMode.php" );
	require_once( __DIR__ . "/enum.inputType.php" );
	require_once( __DIR__ . "/../../class.emptyElement.php" );
	
	class Input extends EmptyElement
	{
		public function __construct( $type )
		{
			parent::__construct( "input" );
			
			$this->setType( $type );
		}
		
		protected function getContentCategories()
		{
			$contentCategories = array
			(
				ContentCategory::LISTED,
				ContentCategory::SUBMITTABLE,
				ContentCategory::RESETTABLE,
				ContentCategory::FORM_ASSOCIATED_ELEMENT,
				ContentCategory::PHRASING
			);
			
			$inputType = $this->getAttributeValue( "type" );
			if ( $inputType !== null && $inputType !== "hidden" )
			{
				$contentCategories[] = ContentCategory::LABELABLE;
				$contentCategories[] = ContentCategory::PALPABLE;
			}
			
			return $contentCategories;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::PHRASING );
		}
		
		public function setType( $type )
		{
			if ( ! InputType::containsType( $type ) )
			{
				$message = "The given type is not a valid input type";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "type", $type );
		}
		
		public function setAccept( $accept )
		{
			$this->setAttribute( "accept", $accept );
		}
		
		public function setAutocompleteOn()
		{
			$this->setAttribute( "autocomplete", "on" );
		}
		
		public function setAutocompleteOff()
		{
			$this->setAttribute( "autocomplete", "off" );
		}
		
		public function setAutofocusOn()
		{
			$this->setAttribute( "autofocus" );
		}
		
		public function setAutosave( $autosave )
		{
			$this->setAttribute( "autosave", $autosave );
		}
		
		public function setCheckedYes()
		{
			$this->setAttribute( "checked" );
		}
		
		public function setCheckedNo()
		{
			$this->removeAttribute( "checked" );
		}
		
		public function setDisabled()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setForm( $idForm )
		{
			$this->setAttribute( "form", $idForm );
		}
		
		public function setFormAction( $url )
		{
			$this->setAttribute( "formaction", $url );
		}
		
		public function setFormEncType( $encType )
		{
			$this->setATtribute( "formenctype", $encType );
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
		
		public function setHeight( $height )
		{
			$this->setAttribute( "height", $height );
		}
		
		public function setInputMode( $inputMode )
		{
			if ( ! InputMode::containsMode( $inputMode ) )
			{
				$message = "The given input mode is not a valid input mode";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "inputmode", $inputMode );
		}
		
		public function setList( $idDataList )
		{
			$this->setAttribute( "list", $idDataList );
		}
		
		public function setMin( $minimumValue )
		{
			$this->setAttribute( "min", $minimumValue );
		}
		
		public function setMinLength( $minimumLength )
		{
			$this->setAttribute( "minlength", $minimumLength );
		}
		
		public function setMax( $maximumValue )
		{
			$this->setAttribute( "max", $maximumValue );
		}	
		
		public function setMaxLength( $maximumLength )
		{
			$this->setAttribute( "maxlength", $maximumLength );
		}
	
		public function setMultiple()
		{
			$this->setAttribute( "multiple" );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setPattern( $pattern )
		{
			$this->setAttribute( "pattern", $pattern );
		}
		
		public function setPlaceholder( $placeholder )
		{
			$this->setAttribute( "placeholder", $placeholder );
		}
		
		public function setReadOnly()
		{
			$this->setAttribute( "readonly" );
		}
		
		public function setRequired()
		{
			$this->setAttribute( "required" );
		}
		
		public function setSelectionDirection( $direction )
		{
			$this->setAttribute( "selectionDirection", $direction );
		}
		
		public function setSize( $size )
		{
			$this->setAttribute( "size", $size );
		}
		
		public function setSpellcheckYes()
		{
			$this->setAttribute( "spellcheck", "true" );
		}
		
		public function setSpellcheckNo()
		{
			$this->setAttribute( "spellcheck", "false" );
		}
		
		public function setStep( $stepSize )
		{
			$this->setAttribute( "step", $stepSize );
		}
		
		public function setTabIndex( $tabIndex )
		{
			$this->setAttribute( "tabindex", $tabIndex );
		}
		
		public function setValue( $value )
		{
			$this->setAttribute( "value", $value );
		}
	}
?>