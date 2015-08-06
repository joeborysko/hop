<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Keyboard Input Element (<kbd>) represents user input and produces
 * an inline element displayed in the browser's default monospace font.
 */
class KBD extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "kdb" );
	}
}