<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><data></code> Element links a given content with a
 * machine-readable translation. If the content is time- or date-related, the
 * <code><time></code> must be used.
 */
class Data extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "data" );
	}
	
	/**
	 * This attribute specifies the machine-readable translation of the content
	 * of the element.
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
}