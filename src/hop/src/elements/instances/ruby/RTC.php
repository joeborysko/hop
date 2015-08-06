<?php

namespace hop\elements\instances\ruby;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML <code><rtc></code> Element embraces semantic annotations of
 * characters presented in a ruby of <code><rb></code> elements used inside of
 * <code><ruby></code> element. <code><rb></code> elements can have both
 * pronunciation (<code><rt></code> and semantic (<code><rtc></code>)
 * annotations.
 */
class RTC extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "rtc" );
	}
}