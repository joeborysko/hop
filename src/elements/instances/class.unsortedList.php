<?php
	require_once( __DIR__ . "/class.li.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	require_once( __DIR__ . "/../interface.iHTMLElement.php" );
	
	/**
	 * Represents the <ul> element.
	 */
	class UnsortedList extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "ul" );
		}
		
		protected function initContentCategories()
		{
			return array
			(
				ContentCategory::FLOW
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child instanceof LI;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function getContentCategories()
		{
			$contentCategories = array( ContentCategory::FLOW );
			
			//See if this has an <li> child
			foreach( $this->_children as $child )
			{
				if ( $child instanceof LI )
				{
					$contentCategories[] = ContentCategory::PALPABLE;
					break;
				}
			}
			
			return $contentCategories;
		}
		
		public function setReversed()
		{
			$this->setAttribute( "reversed" );
		}
		
		public function setStart( $startValue )
		{
			$this->setAttribute( "start", $startValue );
		}
		
		public function setType( $numberingType )
		{
			$this->setAttribute( "type", $numberingType );
		}
	}
?>