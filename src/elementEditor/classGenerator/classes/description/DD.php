<?php

namespace hop\elements\instances\description;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML Description Element (<dd>) indicates the description of a term in
 * a description list (<code><dl></code>) element. This element can occur only
 * as a child element of a definition list and it must follow a
 * <code><dt></code> element.
 */
class DD extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "dd" );
	}
}