<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Quote Element (<q>) indicates that the enclosed text is a short
 * inline quotation. This element is intended for short quotations that don't
 * require paragraph breaks; for long quotations use <code><blockquote></code>
 * element.
 */
class Q extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "q" );
	}
	
	/**
	 * The value of this attribute is a URL that designates a source document
	 * or message for the information quoted. This attribute is intended to
	 * point to information explaining the context or the reference for the
	 * quote.
	 * @param cite
	 */
	public function setCite( $cite )
	{
		$this->setAttribute( "cite", $cite );
	}
}