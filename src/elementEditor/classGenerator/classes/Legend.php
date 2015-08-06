<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <legend> Element (or HTML Legend Field Element) represents a
 * caption for the content of its parent <code><fieldset></code>.
 */
class Legend extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "legend" );
	}
}