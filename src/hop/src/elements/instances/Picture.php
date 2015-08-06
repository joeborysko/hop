<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><picture></code> element is a container used to specified
 * multiple <code><source></code> for a specific <code><img></code> contained
 * in it. The browser will choose the most suitable source according to the
 * current layout (constraints of the box the image will appear in) of the page
 * and the device it will be displayed on (like a normal or hiDPI device).
 */
class Picture extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "picture" );
	}
}