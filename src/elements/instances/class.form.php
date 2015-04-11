<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Form extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "form" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ) &&
				! $child instanceof Form;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setAcceptCharset( array $characterEncodings )
		{
			$charsetEncodingsString = implode( ", ", $characterEncodings );
			$this->setAttribute( "accept-charset", $charsetEncodingsString );
		}
		
		public function setAction( $action )
		{
			$this->setAttribute( "action", $action );
		}
                
                /**
                 * Make it so nothing happens by default when the enter key or
                 * submit button is pressed.
                 */
                public function setActionNothing()
                {
                    $this->setAction( "javascript:void(0);" );
                }
		
		public function setAutocompleteOn()
		{
			$this->setAttribute( "autocomplete", "on" );
		}
		
		public function setAutocompleteOff()
		{
			$this->setAttribute( "autocomplete", "off" );
		}
		
		public function setEnctyp( $enctype )
		{
			$this->setAttribute( "enctype", $enctype );
		}
		
		public function setMethodGet()
		{
			$this->setAttribute( "method", "get" );
		}
		
		public function setMethodPost()
		{
			$this->setAttribute( "method", "post" );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setTarget( $target )
		{
			$this->setAttribute( "target", $target );
		}
	}
?>