<?php

namespace hop\elements\instances\description;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * <p>The HTML <code><dl></code> Element (or HTML Description List Element)
 * encloses a list of pairs of terms and descriptions. Common uses for this
 * element are to implement a glossary or to display metadata (a list of
 * key-value pairs).</p><p>Prior to HTML5, <dl> was known as a Definition
 * List.</p>
 */
class DL extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "dl" );
	}
}