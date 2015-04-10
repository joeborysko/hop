<?php
	require_once( __DIR__ . "/class.object.php" );
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class Embed extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "embed" );
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
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent->acceptsContentCategory(
					ContentCategory::EMBEDDED );
		}
		
		public function setHeight( $height )
		{
			$this->setAttribute( "height", $height );
		}
		
		public function setSrc( $url )
		{
			$this->setAttribute( "src", $url );
		}
		
		public function setType( $mimeType )
		{
			$this->setAttribute( "type", $mimeType );
		}
		
		public function setWidth( $width )
		{
			$this->setAttribute( "width", $width );
		}
	}
?>