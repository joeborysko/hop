<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Code Element (<code>) represents a fragment of computer code. By
 * default, it is displayed in the browser's default monospace font.
 */
class Code extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "code" );
	}
}