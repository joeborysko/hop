<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><header></code> Element represents a group of introductory
 * or navigational aids. It may contain some heading elements but also other
 * elements like a logo, wrapped section's header, a search form, and so
 * on.</p><p>Usage note:</p><ul> <li>The <code><header></code> element is not
 * sectioning content and therefore doesn't introduce a new section in the
 * outline.</li></ul>
 */
class Header extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "header" );
	}
}