<?php
	require_once( __DIR__ . "/class.button.php" );
	require_once( __DIR__ . "/class.i.php" );
	require_once( __DIR__ . "/class.img.php" );
	require_once( __DIR__ . "/class.label.php" );
	require_once( __DIR__ . "/class.object.php" );
	require_once( __DIR__ . "/class.span.php" );
	require_once( __DIR__ . "/class.textArea.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class A extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "a" );
		}
		
		public function getContentCategories()
		{
			return array
			(
				ContentCategory::PHRASING,
				ContentCategory::INTERACTIVE,
				ContentCategory::PALPABLE
			);
		}
		public function acceptsContentCategory( $contentCategory )
		{
			return
				$contentCategory === ContentCategory::TRANSPARENT;
		}
		
		public function isAllowedChild( \IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ) &&
				! $child->hasContentCategory( ContentCategory::INTERACTIVE );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::FLOW );
		}
		
		public function setDownload( $defaultFilename="" )
		{
			$this->setAttribute( "download", $defaultFilename );
		}
		
		public function setHREF( $href )
		{
			$this->setAttribute( "href", $href );
		}
		
		public function linkWithinPage( $idElement )
		{
			$this->setAttribute( "href", "#$idElement" );
		}
		
		public function linkToTopOfPage()
		{
			$this->setAttribute( "href", "#top" );
		}
		
		public function setMedia( $media )
		{
			$this->setAttribute( "media", $media );
		}
		
		public function setPing( $pingURL )
		{
			$this->setAttribute( "ping", $pingURL );
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
		
		public function setHREFLang( $hrefLang )
		{
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"hreflang.";
				throw new LogicException( $message );
			}
			$this->setAttribute( "hreflang", $hrefLang );
		}
		
		public function setType( $mimeType )
		{
			if ( ! $this->hasAttribute( "href" ) )
			{
				$message = "The href attribute must be set before setting " .
					"type.";
				throw new LogicException( $message );
			}
			$this->setAttribute( "type", $mimeType );
		}
	}
?>