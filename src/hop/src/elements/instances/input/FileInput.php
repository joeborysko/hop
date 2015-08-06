<?php

namespace hop\elements\instances\input;

require_once( __DIR__ . "/Input.php" );

class FileInput extends Input
{
	public function __construct()
	{
		parent::__construct( InputType::FILE );
	}
	
	public function setAccept( $fileTypes )
	{
		$this->setAttribute( "accept", $fileTypes );
	}
}