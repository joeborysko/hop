<?php
	require_once( __DIR__ . "/class.head.php" );
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class Base extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "base" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::METADATA
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return parent instanceof Head;
		}
        
        public function setHref( $href )
        {
            $this->setAttribute( "href", $href );
        }
        
        public function setTarget( $target )
        {
            $this->setAttribute( "target", $target );
        }
	}
?>