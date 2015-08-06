<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><time></code> element represents either a time on a
 * 24-hour clock or a precise date in the Gregorian calendar (with optional
 * time and timezone information).</p><p>This element is intended to be used
 * presenting dates and times in a machine readable format. This can be helpful
 * for user agents to offer any event scheduling for user's calendar. </p>
 * Usage note: This element is not appropriate for instances where a specific
 * date cannot be calculated, nor should it be used for dates prior to the
 * introduction to the Gregorian calendar (due to complications with
 * calculating those dates).
 */
class Time extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "time" );
	}
	
	/**
	 * This attribute indicates the time and date of the element and must be a
	 * valid date with an optional time string. If the value cannot be parsed
	 * as a date with an optional time string, the element does not have an
	 * associated time stamp.
	 * @param dateTime
	 */
	public function setDateTime( $dateTime )
	{
		$this->setAttribute( "datetime", $dateTime );
	}
}