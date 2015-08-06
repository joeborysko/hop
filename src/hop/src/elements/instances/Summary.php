<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML summary element (<code><summary></code>) is used as a summary,
 * caption, or legend for the content of a <code><details></code>
 * element.</p>Note: If the <code><summary></code> element is omitted, the
 * heading "details" will be used.
 */
class Summary extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "summary" );
	}
}