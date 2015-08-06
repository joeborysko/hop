<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><bdo></code> Element (or HTML bidirectional override element)
 * is used to override the current directionality of text. It causes the
 * directionality of the characters to be ignored in favor of the specified
 * directionality.
 */
class BDO extends HTMLElement
{
	const DIRECTION_LEFT_TO_RIGHT = "ltr";
	const DIRECTION_RIGHT_TO_LEFT = "rtl";
	const DIRECTION_AUTO = "auto";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "bdo" );
	}
	
	/**
	 * Text direction in this element. Possible values are:  <ul>  
	 * <li><code>ltr</code>: Indicates that the text should go in a
	 * left-to-right direction.</li>   <li><code>rtl</code>: Indicates that the
	 * text should go in a right-to-left direction.</li>  
	 * <li><code>auto</code>: The browser decides which direction based on the
	 * element's content.</li></ul>You can use the DIRECTION_* constants for
	 * valid dirs.
	 * @param dir
	 */
	public function setDir( $dir )
	{
		$this->setAttribute( "dir", $dir );
	}
}