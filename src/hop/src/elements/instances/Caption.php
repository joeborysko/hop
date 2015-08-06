<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><caption></code> Element (or HTML Table Caption Element)
 * represents the title of a table. Though it is always the first descendant of
 * a <code><table></code>, its styling, using CSS, may place it elsewhere,
 * relative to the table.</p> Usage note: When the <code><table></code> element
 * that is the parent of this <code><caption></code> is the only descendant of
 * a <code><figure></code> element, use the <code><figcaption></code> element
 * instead.
 */
class Caption extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "caption" );
	}
}