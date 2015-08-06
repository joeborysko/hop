<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * <p>The HTML <code><br></code> Element (or HTML Line Break Element) produces
 * a line break in text (carriage-return). It is useful for writing a poem or
 * an address, where the division of lines is significant.</p><p>Do not use
 * <code><br></code> to increase the gap between lines of text; use the CSS
 * <code>margin</code> property or the <code><p></code> element.</p>
 */
class BR extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "br" );
	}
}