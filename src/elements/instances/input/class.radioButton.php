<?php
	require_once( __DIR__ . "/class.input.php" );
	
	class RadioButton extends Input
	{
		public function __construct( $value )
		{
			parent::__construct( InputType::RADIO );
			$this->setValue( $value );
		}
		
		public function check()
		{
			$this->setAttribute( "checked" );
		}
		
		public function uncheck()
		{
			$this->removeAttribute( "checked" );
		}
	}
?>