<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Variable Element (<code><var></code>) represents a variable in a
 * mathematical expression or a programming context.
 */
class Variable extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "var" );
	}
}