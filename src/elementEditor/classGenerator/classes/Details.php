<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Details Element (<details>) is used as a disclosure widget from
 * which the user can retrieve additional information.
 */
class Details extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "details" );
	}
	
	/**
	 * This Boolean attribute indicates whether the details will be shown to
	 * the user on page load. Default is false and so details will be hidden.
	 */
	public function setOpenYes()
	{
		$this->setAttribute( "open");
	}
}