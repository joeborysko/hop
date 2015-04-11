<?php
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class Keygen extends EmptyElement
	{
		const KEY_TYPE_RSA	= "RSA";
		const KEY_TYPE_DSA	= "DSA";
		const KEY_TYPE_EC	= "EC";
		
		public function __construct()
		{
			parent::__construct( "keygen" );
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
				ContentCategory::RESETTABLE,
				ContentCategory::FORM_ASSOCIATED_ELEMENT,
				ContentCategory::PALPABLE,
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function setAutofocusTrue()
		{
			$this->setAttribute( "autofocus" );
		}
		
		public function setChallenge( $challenge )
		{
			$this->setAttribute( "challenge", $challenge );
		}
		
		public function setDisabledTrue()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setForm( $idForm )
		{
			$this->setAttribute( "form", $idForm );
		}
		
		public function setKeyType( $keyType )
		{
			$uppercaseKeyType = strtoupper( $keyType );
			
			//Make sure the key type is allowed
			if
			(
				!
				(
					$uppercaseKeyType === self::KEY_TYPE_DSA ||
					$uppercaseKeyType === self::KEY_TYPE_EC ||
					$uppercaseKeyType === self::KEY_TYPE_RSA
				)
			)
			{
				$message = "The given key type is not valid. See the " .
					"KEY_TYPE_* consts in the Keygen class.";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "keytype", $keyType );
		}
		
		public function setKeyParams( ...$keyParams )
		{
			$keyParamsString = implode( ",", $keyParams );
			$this->setAttribute( "keyparams", $keyParamsString );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
	}
?>