<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Table Row Element (<code><tr></code>) defines a row of cells in a
 * table. Those can be a mix of <code><td></code> and <code><th></code>
 * elements.
 */
class TR extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "tr" );
	}
}