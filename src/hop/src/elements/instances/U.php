<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Underline Element (<code><u></code>) renders text with an
 * underline, a line under the baseline of its content.</p><p>In HTML5, this
 * element represents a span of text with an unarticulated, though explicitly
 * rendered, non-textual annotation, such as labeling the text as being a
 * proper name in Chinese text (a Chinese proper name mark), or labeling the
 * text as being misspelled.</p> Usage Note: As with all purely styling
 * elements, <code><u></code> has been deprecated in HTML 4 and XHTML 1, but it
 * has been re-introduced in HTML5 with other semantics. If you want to
 * underline text in a non-semantic manner, you should use a
 * <code><span></code> element, or another semantically appropriate element,
 * and style it with the CSS <code>text-decoration</code> property, with the
 * underline value.
 */
class U extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "u" );
	}
}