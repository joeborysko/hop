<?php

namespace hop\elements\instances\table;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML Table Head Element (<code><thead></code>) defines a set of rows
 * defining the head of the columns of the table.
 */
class THead extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "thead" );
	}
}