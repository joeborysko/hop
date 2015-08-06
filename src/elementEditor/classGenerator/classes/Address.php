<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code>Address</code> Element (<address>) should be used by
 * authors to supply contact information for its nearest <code><article></code>
 * or <code><body></code> ancestor; in the latter case, it applies to the whole
 * document.</p><p>Usage note:</p><ul> <li>To represent an arbitrary address,
 * one that is not related to the contact information, use a <code><p></code>
 * element rather than the <address> element.</li> <li>This element should not
 * contain more information than the contact information, like a publication
 * date (which belongs in a <code><time></code> element).</li> <li>Typically an
 * <address> element can be placed inside the <code><footer></code> element of
 * the current section, if any.</li></ul>
 */
class Address extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "address" );
	}
}