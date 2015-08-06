<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * The HTML <code><hr></code> element represents a thematic break between
 * paragraph-level elements (for example, a change of scene in a story, or a
 * shift of topic with a section). In previous versions of HTML, it represented
 * a horizontal rule. It may still be displayed as a horizontal rule in visual
 * browsers, but is now defined in semantic terms, rather than presentational
 * terms.
 */
class HR extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "hr" );
	}
}