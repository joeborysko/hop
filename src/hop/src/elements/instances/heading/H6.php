<?php

namespace hop\elements\instances\heading;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * Heading elements implement six levels of document headings,
 * <code><h1></code> is the most important and <code><h6></code> is the least.
 * A heading element briefly describes the topic of the section it introduces.
 * Heading information may be used by user agents, for example, to construct a
 * table of contents for a document automatically.
 */
class H6 extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "h6" );
	}
}