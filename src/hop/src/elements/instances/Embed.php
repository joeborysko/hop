<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * <p>The HTML <code><embed></code> Element represents an integration point for
 * an external application or interactive content (in other words, a
 * plug-in).</p><p></p>Note: This topic documents only the element that is
 * defined as part of HTML5. It does not address earlier, non-standardized
 * implementation of the element.
 */
class Embed extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "embed" );
	}
	
	/**
	 * The displayed height of the resource, in CSS pixels.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * The URL of the resource being embedded.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * The MIME type to use to select the plug-in to instantiate.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * The displayed width of the resource, in CSS pixels.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
}