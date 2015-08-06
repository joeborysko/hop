<?php

namespace hop\elements\instances\table;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML Table Foot Element (<code><tfoot></code>) defines a set of rows
 * summarizing the columns of the table.
 */
class TFoot extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "tfoot" );
	}
}