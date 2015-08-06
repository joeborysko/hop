<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Emphasis Element (<em>) marks text that has stress emphasis.
 * The <code><em></code> element can be nested, with each level of nesting
 * indicating a greater degree of emphasis.</p>Usage Note: Typically this
 * element is displayed in italic type. However, it should not be used simply
 * to apply italic styling; use the CSS styling for that purpose. Use the
 * <code><cite></code> element to mark the title of a work (book, play, song,
 * etc.); it is also typically styled with italic type, but carries different
 * meaning. Use the <code><strong></code> element to mark text that has greater
 * importance than surrounding text.
 */
class EM extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "em" );
	}
}