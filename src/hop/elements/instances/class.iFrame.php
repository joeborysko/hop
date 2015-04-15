<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class IFrame extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "iframe" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::EMBEDDED,
				ContentCategory::INTERACTIVE,
				ContentCategory::PALPABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return true;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::EMBEDDED );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return true;
		}
		
		public function setAllowFullScreen()
		{
			$this->setAttribute( "allowfullscreen", "true" );
		}
		
		public function setHeight( $numPixels )
		{
			$this->setAttribute( "height", $numPixels );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setSandbox( $sandbox )
		{
			$this->setAttribute( "sandbox", $sandbox );
		}
		
		public function setSeamless()
		{
			$this->setAttribute( "seamless" );
		}
		
		public function setSrc( $url )
		{
			$this->setAttribute( "src", $url );
		}
		
		public function setSrcDoc( $srcDoc )
		{
			$this->setAttribute( "srcDoc", $srcDoc );
		}
		
		public function setWidth( $width )
		{
			$this->setAttribute( "width", $width );
		}
	}
?>