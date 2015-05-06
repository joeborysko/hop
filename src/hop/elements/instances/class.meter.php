<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Meter extends HTMLElement
	{
		public function __construct( $value, $min=0, $max=1 )
		{
			parent::__construct( "meter" );
			
			$this->setValue( $value );
			$this->setMin( $min );
			$this->setMax( $max );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::PALPABLE,
				ContentCategory::PHRASING,
				ContentCategory::LABELABLE
			);
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return
				$child->hasContentCategory( ContentCategory::PHRASING ) &&
				! $child instanceof Meter;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::PHRASING );
		}
		
		public function setValue( $value )
		{
			$this->setAttribute( "value", $value );
		}
		
		public function setMin( $min )
		{
			$this->setAttribute( "min", $min );
		}
		
		public function setMax( $max )
		{
			$this->setAttribute( "max", $max );
		}
		
		public function setLow( $low )
		{
			$this->setAttribute( "low", $low );
		}
		
		public function setHigh( $high )
		{
			$this->setAttribute( "high", $high );
		}
		
		public function setOptimum( $optimum )
		{
			$this->setAttribute( "optimum", $optimum );
		}
	}
?>