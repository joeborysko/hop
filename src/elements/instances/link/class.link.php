<?php
	require_once( __DIR__ . "/../../class.emptyElement.php" );

	class Link extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "link" );
		}
		
		protected function getContentCategories()
		{
			$contentCategories = array
			(
				ContentCategory::METADATA
			);			
			if ( $this->hasAttribute( "itemprop" ) )
			{
				$contentCategories[] = ContentCategory::PHRASING;
			}			
			return $contentCategories;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent->acceptsContentCategory(
					ContentCategory::METADATA )
				||
				(
					$this->hasAttribute( "itemprop" )
					&&
					$parent->acceptsContentCategory(
						ContentCategory::PHRASING )
				);
		}
		
		public function setCrossOrigin( $crossOrigin )
		{
			if
			(
				$crossOrigin !== "anonymous" &&
				$crossOrigin !== "use-credentials"
			)
			{
				$message = "The crossoriginal attribute must be either " .
					"'anonymous' or 'use-credentials'";
				throw new InvalidArgumentException( $message );
			}
		}
		
		public function setHREF( $url )
		{
			$this->setAttribute( "href", $url );
		}
		
		public function setHREFLang( $hrefLang )
		{
			//Make sure href is set
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"hreflang";
				throw new LogicException( $message );
			}
			$this->setAttribute( "hreflang", $hrefLang );
		}
		
		public function setMedia( $media )
		{
			$this->setAttribute( "media", $media );
		}
		
		public function setRel( $linkType )
		{
			$this->setAttribute( "rel", $linkType );
		}
		
		public function setRels( $linkTypeValues )
		{
			$rel = implode( ",", $linkTypeValues );
			$this->setAttribute( "rel", $rel );
		}
		
		public function setSizes( $sizes )
		{
			//Make sure rel is set and contains icon
			if
			(
				! $this->hasAttribute( "rel" ) &&
				strpos( $this->getAttributeValue( "rel" ), "icon" ) === false
			)
			{
				$this->setAttribute( "sizes", $sizes );
			}
		}
		
		public function setType( $type )
		{
			$this->setAttribute( "type", $type );
		}
	}
?>