<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * The HTML <code><param></code> Element (or HTML Parameter Element) defines
 * parameters for <code><object></code>.
 */
class Param extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "param" );
	}
	
	/**
	 * Name of the parameter.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * Specifies the value of the parameter.
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
}