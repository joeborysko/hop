<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Datalist Element (<datalist>) contains a set of
 * <code><option></code> elements that represent the values available for other
 * controls.
 */
class DataList extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "datalist" );
	}
}