<?php

namespace hop\elements\instances\link;

require_once( __DIR__ . "/Link.php" );

class CSSLink extends Link
{
	public function __construct( $href, $media="all" )
	{
		parent::__construct();
		
		$this->setHREF( $href );
		$this->setRel( "stylesheet" );
		$this->setType( "text/css" );
		$this->setMedia( $media );
	}
}