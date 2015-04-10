<?php
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	/**
	 * Represents the <li> element.
	 */
	class LI extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "li" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
				$parent instanceof UnsortedList ||
				$parent instanceof OrderedList /*||
				$parent instanceof Menu*/;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setValue( $value )
		{
			//Make sure $value is an integer
			if ( ! is_int( $value ) )
			{
				$message = "\$value must be an integer.";
				throw new InvalidArgumentException( $message );
			}
			$this->setAttribute( "value", $value );
		}
	}
?>