<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <samp> element is an element intended to identify sample output
 * from a computer program. It is usually displayed in the browser's default
 * monotype font (such as Lucida Console).
 */
class Samp extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "samp" );
	}
}