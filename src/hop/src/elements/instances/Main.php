<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Main Element (<main>) represents the main content of  the
 * <code><body></code> of a document or application. The main content area
 * consists of content that is directly related to, or expands upon the central
 * topic of a document or the central functionality of an application. This
 * content should be unique to the document, excluding any content that is
 * repeated across a set of documents such as sidebars, navigation links,
 * copyright information, site logos, and search forms (unless, of course, the
 * document's main function is as a search form).
 */
class Main extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "main" );
	}
}