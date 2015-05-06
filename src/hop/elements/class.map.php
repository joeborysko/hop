<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Map extends HTMLElement
	{
		public function __construct( $name )
		{
			parent::__construct( "map" );
			
			$this->setName( $name );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE,
				ContentCategory::PHRASING
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setName( $name )
		{
			//Ensure the name is not empty and contains no whitespace
			if ( strlen( $name ) === 0 )
			{
				$message = "The name attribute of a map must not be empty.";
				throw new InvalidArgumentException( $message );
			}
			if ( preg_match( "/\s/", $name ) )
			{
				$message = "The name attribute of a map must not contain " .
					"whitespace.";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "name", $name );
		}
	}
?>