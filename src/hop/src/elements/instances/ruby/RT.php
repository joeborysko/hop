<?php

namespace hop\elements\instances\ruby;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML <code><rt></code> Element embraces pronunciation of character
 * presented in a ruby annotations, which are for showing pronunciation of East
 * Asian characters and the <code><rt></code> element is used inside of
 * <code><ruby></code> element.
 */
class RT extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "rt" );
	}
}