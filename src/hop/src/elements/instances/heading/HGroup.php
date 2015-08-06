<?php

namespace hop\elements\instances\heading;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * <p>The HTML <code><hgroup></code> Element (HTML Headings Group Element)
 * represents the heading of a section. It defines a single title that
 * participates in the outline of the document as the heading of the implicit
 * or explicit section that it belongs to.</p><p>Its text for the outline
 * algorithm is the text of the first HTML Heading Element of highest rank
 * (i.e., the first <code><h1></code>, <code><h2></code>, <code><h3></code>,
 * <code><h4></code>, <code><h5></code> or <code><h6></code> with the smallest
 * number among its descendants) and the rank is the rank of this very same
 * HTML Heading Element.</p><p>Therefore this element groups several headings,
 * contributing only the main one to the outline of the document. It allows
 * associating secondary titles, like subheadings, alternative titles, or even
 * taglines, with the main heading, without polluting the outline of the
 * document.</p>
 */
class HGroup extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "hgroup" );
	}
}