<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Strong Element (<code><strong></code>) gives text strong
 * importance, and is typically displayed in bold.
 */
class Strong extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "strong" );
	}
}