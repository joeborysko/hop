<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><aside></code> element represents a section of the page
 * with content connected tangentially to the rest, which could be considered
 * separate from that content. These sections are often represented as sidebars
 * or inserts. They often contain the definitions on the sidebars, such as
 * definitions from the glossary; there may also be other types of information,
 * such as related advertisements; the biography of the author; web
 * applications; profile information or related links on the blog.</p> <p>Usage
 * notes:</p> <ul>  <li>Do not use the <code><aside></code> element to tag
 * parenthesized text, as this kind of text is considered part of the main
 * flow.</li></ul>
 */
class Aside extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "aside" );
	}
}