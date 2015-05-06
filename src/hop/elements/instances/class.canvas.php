<?php
	require_once( __DIR__ . "/class.a.php" );
	require_once( __DIR__ . "/class.button.php" );
	require_once( __DIR__ . "/input/class.input.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Canvas extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "canvas" );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::FLOW;
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::FLOW ) &&
				!
				(
					$child->hasContentCategory(
						ContentCategory::INTERACTIVE ) &&
					!
					(
						$child instanceof A ||
						$child instanceof Button ||
						(
							$child instanceof Input &&
							(
								$child->getAttributeValue( "type" ) ===
									"checkbox" ||
								$child->getAttributeValue( "type" ) ===
									"radio" ||
								$child->getAttributeValue( "type" ) === "button"
							)
						)
					)
				);
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::EMBEDDED,
				ContentCategory::PALPABLE
			);
		}
		
		public function setWidth( $width )
		{
			if ( ! is_int( $width ) )
			{
				$message = "\$width must be an integer";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setATtribute( "width", $width );
		}
		
		public function setHeight( $height )
		{
			if ( ! is_int( $height ) )
			{
				$message = "\$height must be an integer";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "height", $height );
		}
	}
?>