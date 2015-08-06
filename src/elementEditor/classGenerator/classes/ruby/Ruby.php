<?php

namespace hop\elements\instances\ruby;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML <code><ruby></code> Element represents a ruby annotation. Ruby
 * annotations are for showing pronunciation of East Asian characters.
 */
class Ruby extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "ruby" );
	}
}