<?php
	require_once( __DIR__ . "/../interface.iHTMLComponent.php" );
	
	class HTMLAttribute implements IHTMLComponent
	{
		private $_key;
		
		private $_value;
		public function getValue() { return $this->_value; }
		public function setValue( $value )
		{
			$this->_value = $value;
		}
		
		public function __construct( $key, $value=null )
		{
			$this->_key = $key;
			$this->_value = $value;
		}
		
		public function equals( $key )
		{
			return $this->_key == $key;
		}
		
		public function getHTML()
		{
			$html = $this->_key; 
			if ( isset( $this->_value ) )
			{
				$html .= "='$this->_value'";
			}
			return $html;
		}
	}
?>