<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><i></code> Element represents a range of text that is set off
 * from the normal text for some reason, for example, technical terms, foreign
 * language phrases, or fictional character thoughts. It is typically displayed
 * in italic type.
 */
class I extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "i" );
	}
}