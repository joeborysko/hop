<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><figcaption></code> Element represents a caption or a legend
 * associated with a figure or an illustration described by the rest of the
 * data of the <code><figure></code> element which is its immediate ancestor
 * which means <code><figcaption></code> can be the first or last element
 * inside a <code><figure></code> block. Also, the HTML Figcaption Element is
 * optional; if not provided, then the parent figure element will have no
 * caption.
 */
class FigCaption extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "figcaption" );
	}
}