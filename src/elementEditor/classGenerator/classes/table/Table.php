<?php

namespace hop\elements\instances\table;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * <p>The HTML Table Element (<code><table></code>) represents data in two
 * dimensions or more.</p>Note: Prior to the creation of CSS, HTML
 * <code><table></code> elements were often used as a method for page layout.
 * This usage has been discouraged since HTML 4, and the <code><table></code>
 * element should not be used for layout purposes.
 */
class Table extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "table" );
	}
}