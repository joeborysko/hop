<?php

namespace hop\elements\instances\meta;

require_once( __DIR__ . "/Meta.php" );

class CharsetDeclaration extends Meta
{
	public function __construct( $charset )
	{
		parent::__construct();
		
		$this->setCharset( $charset );
	}
}