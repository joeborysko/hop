<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Small Element (<small>) makes the text font size one size smaller
 * (for example, from large to medium, or from small to x-small) down to the
 * browser's minimum font size.  In HTML5, this element is repurposed to
 * represent side-comments and small print, including copyright and legal text,
 * independent of its styled presentation.
 */
class Small extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "small" );
	}
}