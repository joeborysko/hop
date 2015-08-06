<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Deleted Text Element (<del>) represents a range of text that has
 * been deleted from a document. This element is often (but need not be)
 * rendered with strike-through text.
 */
class Del extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "del" );
	}
	
	/**
	 * A URI for a resource that explains the change (for example, meeting
	 * minutes).
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
	 * @param dateTime
	 */
	public function setDateTime( $dateTime )
	{
		$this->setAttribute( "datetime", $dateTime );
	}
}