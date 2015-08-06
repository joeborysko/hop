<?php

namespace hop\elements\instances\input;

require_once( __DIR__ . "/Input.php" );

class SubmitButton extends Input
{
	public function __construct( $type=InputType::SUBMIT )
	{
		parent::__construct( $type );
	}
	
	public function setFormAction( $uri )
	{
		$this->setAttribute( "formaction", $uri );
	}
	
	public function setFormEncodeTypeMultipart()
	{
		$this->setAttribute( "formenctype", "multipart/form-data" );
	}
	
	public function setFormEncodeTypeText()
	{
		$this->setAttribute( "formenctype", "text/plain" );
	}
	
	public function setFormMethodPost()
	{
		$this->setAttribute( "formmethod", "post" );
	}
	
	public function setFormMethodGet()
	{
		$this->setAttribute( "formmethod", "get" );
	}
	
	public function setFormNoValidate()
	{
		$this->setAttribute( "formnovalidate" );
	}
	public function setFormTarget( $formTarget )
	{
		$this->setAttribute( "formtarget", $formTarget );
	}
}