<?php
	require_once( __DIR__ . "/../interface.iHTMLComponent.php" );

	class HTMLElementClass implements IHTMLComponent
	{
		private $_classes;
		
		public function __construct()
		{
			$this->_classes = array();
		}
		
		public function addClass( $class )
		{
			if
			(
				!
				(
					empty( $class )	||
					in_array( $class, $this->_classes )
				)
			)
			{
				$this->_classes[] = $class;
			}
		}
		
		public function removeClass( $class )
		{
			$indexClass = array_search( $class, $this->_classes );
			if ( $indexClass !== false )
			{
				array_splice( $this->_classes, $indexClass, 1 );
			}
		}
		
		public function hasClass( $class )
		{
			return in_array( $class, $this->_classes );
		}
		
		public function getHTML()
		{
			$html = "";
			
			if ( sizeof( $this->_classes ) > 0 )
			{
				$classString = "";
				foreach( $this->_classes as $class )
				{
					$classString .= "$class ";
				}
				
				$html = "class='" . trim( $classString ) . "'";
			}			
			
			return $html;
		}
	}
?>