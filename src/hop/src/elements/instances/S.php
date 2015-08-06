<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Strikethrough Element (<code><s></code>) renders text with a
 * strikethrough, or a line through it. Use the <code><s></code> element to
 * represent things that are no longer relevant or no longer accurate. However,
 * <code><s></code> is not appropriate when indicating document edits; for
 * that, use the <code><del></code> and <code><ins></code> elements, as
 * appropriate.
 */
class S extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "s" );
	}
}