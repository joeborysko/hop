<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Embedded Object Element (<object>) represents an external
 * resource, which can be treated as an image, a nested browsing context, or a
 * resource to be handled by a plugin.
 */
class Object extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "object" );
	}
	
	/**
	 * The address of the resource as a valid URL. At least one of data and
	 * type must be defined.
	 * @param data
	 */
	public function setData( $data )
	{
		$this->setAttribute( "data", $data );
	}
	
	/**
	 * The form element, if any, that the object element is associated with
	 * (its form owner). The value of the attribute must be an ID of a
	 * <code><form></code> element in the same document.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The height of the displayed resource, in CSS pixels.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * The name of valid browsing context (HTML5), or the name of the control
	 * (HTML 4).
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * The content type of the resource specified by data. At least one of data
	 * and type must be defined.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * This Boolean attribute indicates if the type and the actual content type
	 * resource must match in order of this one to be used.
	 */
	public function setTypeMustMatchYes()
	{
		$this->setAttribute( "typemustmatch");
	}
	
	/**
	 * A hash-name reference to a <code><map></code> element; that is a '#'
	 * followed by the value of a <code>name</code> of a map element.
	 * @param useMap
	 */
	public function setUseMap( $useMap )
	{
		$this->setAttribute( "usemap", $useMap );
	}
	
	/**
	 * The width of the display resource, in CSS pixels.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
}