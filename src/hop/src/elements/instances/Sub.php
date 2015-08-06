<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Subscript Element (<code><sub></code>) defines a span of text
 * that should be displayed, for typographic reasons, lower, and often smaller,
 * than the main span of text.</p> <p>Usage note:</p> <ul>  <li>This element
 * should be used for typographical reasons only, i.e. changing the position of
 * the text changing its meaning like in mathematical (like t2, though the use
 * of a MathML formula should be considered) or chemical formulas (like
 * H2O).</li>  <li>This element must not be used for styling purpose like the
 * styling of the product name Latex. In that case CSS style should be used:
 * the <code>vertical-align</code> property</li></ul>
 */
class Sub extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "sub" );
	}
}