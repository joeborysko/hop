<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><map></code> element is used with <code><area></code>
 * elements to define an image map (a clickable link area).
 */
class Map extends HTMLElement
{
	/**
	 * @param name
	 * The value for the required name attribute.
	 */
	public function __construct( $name )
	{
		parent::__construct( "map" );
		$this->setName( $name );
	}
	
	/**
	 * The name attribute gives the map a name so that it can be referenced.
	 * The attribute must be present and must have a non-empty value with no
	 * space characters. The value of the name attribute must not be a
	 * compatibility-caseless match for the value of the name attribute of
	 * another map element in the same document. If the id attribute is also
	 * specified, both attributes must have the same value.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
}