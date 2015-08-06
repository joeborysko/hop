<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML template element <code><template></code> is a mechanism for
 * holding client-side content that is not to be rendered when a page is loaded
 * but may subsequently be instantiated during runtime using
 * JavaScript. </p><p>Think of a template as a content fragment that is being
 * stored for subsequent use in the document. The parser does process the
 * content of the <code><template></code> element during the page load to
 * ensure that it is valid, however.</p>
 */
class Template extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "template" );
	}
}