<?php
	require_once( __DIR__ . "/../../class.emptyElement.php" );
	
	class Area extends EmptyElement
	{
		const SHAPE_RECTANGLE = "rect";
		const SHAPE_CIRCLE = "circ";
		const SHAPE_POLY = "poly";
		const SHAPE_DEFAULT = "default";
		
		public function __construct()
		{
			parent::__construct( "area" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function setAlt( $alt )
		{
			$this->setAttribute( "alt", $alt );
		}
		
		public function setCoords( ...$coords )
		{
			$coordsValue = implode( ",", $coords );
			$this->setAttribute( "coords", $coordsValue );
		}
		
		public function setDownloadYes()
		{
			$this->setAttribute( "download" );
		}
		
		public function setHref( $href )
		{
			$this->setAttribute( "href", $href );
		}
		
		public function setHrefLang( $hrefLang )
		{
			$this->setAttribute( "hreflang", $hrefLang );
		}
		
		public function setMedia( $media )
		{			
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"media.";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "media", $meida );
		}
		
		public function setRel( ...$linkTypeValues )
		{
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"rel.";
				throw new LogicException( $message );
			}
			
			$rel = implode( ",", $linkTypeValues );
			$this->setAttribute( "rel", $rel );
		}
		
		/**
		 * See the SHAPE_* constants in this file.
		 * @param type $shape
		 */
		public function setShape( $shape )
		{
			if
			(
				!
				(
					$shape === self::SHAPE_RECTANGLE ||
					$shape === self::SHAPE_CIRCLE ||
					$shape === self::SHAPE_POLY ||
					$shape === self::SHAPE_DEFAULT
				)
			)
			{
				$message = "The given shape is not valid";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "shape", $shape );
		}
		
		public function setTarget( $target )
		{
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"target.";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "target", $target );
		}
		
		public function setType( $type )
		{			
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"type.";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "type", $type );
		}
	}
?>