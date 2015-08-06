<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><noscript></code> Element defines a section of html to be
 * inserted if a script type on the page is unsupported or if scripting is
 * currently turned off in the browser.
 */
class NoScript extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "noscript" );
	}
}