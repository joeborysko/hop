<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><shadow></code> element is used as a shadow DOM insertion
 * point. You might use it if you have created multiple shadow roots under a
 * shadow host. It is not useful in ordinary HTML. It is used with Web
 * Components.
 */
class Shadow extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "shadow" );
	}
}