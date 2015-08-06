<?php

namespace hop\elements\instances\input;

require_once( __DIR__ . "/Input.php" );

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