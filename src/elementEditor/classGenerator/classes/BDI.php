<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><bdi></code> Element (or Bi-Directional Isolation Element)
 * isolates a span of text that might be formatted in a different direction
 * from other text outside it.</p><p>This element is useful when embedding text
 * with an unknown directionality, from a database for example, inside text
 * with a fixed directionality.</p><p class="note">Though the same visual
 * effect can be achieved using the CSS rule <code>unicode-bidi</code><code>:
 * isolate</code> on a <code><span></code> or another text-formatting element,
 * the semantic meaning is only conveyed by the <code><bdi></code> element.
 * Especially, browsers are allowed to ignore CSS styling. In such a case, the
 * text would still be correctly displayed using the HTML element, but will
 * become garbage when using the CSS styling to convey semantic.</p>
 */
class BDI extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "bdi" );
	}
}