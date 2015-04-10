<?php
	require_once( __DIR__ . "/class.input.php" );
	
	class TextInput extends Input
	{
		public function __construct()
		{
			parent::__construct( "text" );
		}
		
		public function setInputMode( $inputMode )
		{
			$this->setAttribute( "inputmode", $inputMode );
		}
                
                public function setOnChange( $onChange )
                {
                        $this->setAttribute( "onchange", $onChange );
                }
	}
?>