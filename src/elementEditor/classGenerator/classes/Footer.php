<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Footer Element (<footer>) represents a footer for its nearest
 * sectioning content or sectioning root element. A footer typically contains
 * information about the author of the section, copyright data or links to
 * related documents.</p><p>Usage notes:</p><ul> <li>Enclose information about
 * the author in an <code><address></code> element that can be included into
 * the <code><footer></code> element.</li> <li>The <code><footer></code>
 * element is not sectioning content and therefore doesn't introduce a new
 * section in the outline.</li></ul>
 */
class Footer extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "footer" );
	}
}