<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><p></code> element (or HTML Paragraph Element) represents a
 * paragraph of text. Paragraphs are block-level elements.
 */
class P extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "p" );
	}
}