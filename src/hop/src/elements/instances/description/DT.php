<?php

namespace hop\elements\instances\description;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML <code><dt></code> element (or HTML Definition Term Element)
 * identifies a term in a definition list. This element can occur only as a
 * child element of a <code><dl></code>. It is usually followed by a
 * <code><dd></code> element; however, multiple <code><dt></code> elements in a
 * row indicate several terms that are all defined by the immediate next
 * <code><dd></code> element.
 */
class DT extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "dt" );
	}
}