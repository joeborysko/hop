<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><ins></code> Element (or HTML Inserted Text) HTML represents
 * a range of text that has been added to a document.
 */
class Ins extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "ins" );
	}
	
	/**
	 * This attribute defines the URI of a resource that explains the change,
	 * like a link to some meeting minutes or a ticket in a troubleshooting
	 * sytem.
	 * @param cite
	 */
	public function setCite( $cite )
	{
		$this->setAttribute( "cite", $cite );
	}
	
	/**
	 * This attribute indicates the time and date of the change and must be a
	 * valid date with an optional time string. If the value cannot be parsed
	 * as a date with an optional time string, the element does not have an
	 * associated time stamp.
	 * @param datetime
	 */
	public function setDatetime( $datetime )
	{
		$this->setAttribute( "datetime", $datetime );
	}
}