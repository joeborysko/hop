<?php

namespace hop\elements\instances\input;

require_once( __DIR__ . "/Input.php" );

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
}