<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Preformatted Text (<pre>) represents preformatted text. Text
 * within this element is typically displayed in a non-proportional font
 * exactly as it is laid out in the file. Whitespaces inside this element are
 * displayed as typed.
 */
class Pre extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "pre" );
	}
}