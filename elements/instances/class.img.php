<?php
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class Img extends EmptyElement
	{
		public function __construct( $src, $altText )
		{
			parent::__construct( "img" );
			
			$this->setSrc( $src );
			$this->setAlt( $altText );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::EMBEDDED,
				ContentCategory::PALPABLE
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent->acceptsContentCategory(
					ContentCategory::EMBEDDED ) ||
				$parent instanceof Anchor;
				
		}
		
		public function setAlt( $alt )
		{
			$this->setAttribute( "alt", $alt );
		}
		
		public function setCrossOriginAnonymous()
		{
			$this->setAttribute( "crossorigin", "anonymous" );
		}
		
		public function setCrossOriginUseCredientials()
		{
			$this->setAttribute( "crossorigin", "use-credentials" );
		}
		
		public function setHeight( $numPixels )
		{
			$this->setAttribute( "height", $numPixels );
		}
		
		public function setIsMap()
		{
			$this->setAttribute( "ismap" );
		}
		
		public function setSrc( $urlImage )
		{
			$this->setAttribute( "src", $urlImage );
		}
		
		public function setSrcSet( array $urlImages )
		{
			$srcSetString = implode( ",", $urlImages );
			$this->setAttribute( "srcset", $srcSetString );
		}
		
		public function setWidth( $numPixels )
		{
			$this->setAttribute( "width", $numPixels );
		}
		
		public function setUseMap( $idImageMap )
		{
			$this->setAttribute( "usemap", $idImageMap );
		}
	}
?>