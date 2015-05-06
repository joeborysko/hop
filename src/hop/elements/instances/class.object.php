<?php
	require_once( __DIR__ . "/class.param.php" );
	require_once( __DIR__ . "/class.embed.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Object extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "object" );
		}
		
		protected function getContentCategories()
		{
			$contentCategories = array
			(
				ContentCategory::EMBEDDED,
				ContentCategory::PALPABLE
			);
			
			if ( $this->hasAttribute( "usemap" ) )
			{
				$contentCategories[] = ContentCategory::INTERACTIVE;
				$contentCategories[] = ContentCategory::LISTED;
				$contentCategories[] = ContentCategory::SUBMITTABLE;
				$contentCategories[] = ContentCategory::FORM_ASSOCIATED_ELEMENT;
			}
			
			return $contentCategories;
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child instanceof Param ||
				$child->hasContentCategory(
					ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::EMBEDDED );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setData( $url )
		{
			$this->setAttribute( "data", $url );
		}
		
		public function setForm( $idFormOwner )
		{
			$this->setAttribute( "form", $idFormOwner );
		}
		
		public function setHeight( $height )
		{
			$this->setAttribute( "height", $height );
		}
		
		public function setName( $name )
		{
			$this->setAttribute( "name", $name );
		}
		
		public function setType( $contentType )
		{
			$this->setAttribute( "type", $contentType );
		}
		
		public function setTypeMustMatch()
		{
			$this->setAttribute( "typemustmatch" );
		}
		
		public function setUseMap( $useMap )
		{
			$this->setAttribute( "usemap", $useMap );
		}
		
		public function setWidth( $width )
		{
			$this->setAttribute( "width", $width );
		}
	}
?>