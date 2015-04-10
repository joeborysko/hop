<?php
	require_once( __DIR__ . "/class.colGroup.php" );
	require_once( __DIR__ . "/../../class.emptyElement.php" );
	
	class Col extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "col" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof ColGroup;
		}
        
        public function setSpan( $numColumns )
        {
            $this->setAttribute( "span", $numColumns );
        }
	}
?>