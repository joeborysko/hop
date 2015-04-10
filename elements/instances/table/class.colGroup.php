<?php
	require_once( __DIR__ . "/class.col.php" );
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class ColGroup extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "colgroup" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			if( $this->hasAttribute( "span" ) )
            {
                return false;
            }
            
            return $child instanceof Col;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return false;//$parent instanceof Table;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
        
        public function getHTML()
        {
            //This is an empty element if the span attribute is set
            if ( $this->hasAttribute( "span" ) )
            {
                return "<$this->_tagName " . $this->_classes->getHTML() .
                    " " . $this->_attributes->getHTML() . ">";
            }
            
            //Otherwise it's a normal HTMLElement
            return parent::getHTML();
        }
        
        public function setSpan( $numColumns )
        {
            $this->setAttribute( "span", $numColumns );
        }
	}
?>