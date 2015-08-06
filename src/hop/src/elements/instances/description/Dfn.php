<?php

namespace hop\elements\instances\description;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * <p>The HTML Definition Element (<dfn>) represents the defining instance of
 * a term.</p>HTML5 Usage Notes:<ul> <li>The <code><dfn></code> element marks
 * the term being defined; the definition of the term should be given by the
 * surrounding <code><p></code>, <code><section></code> or definition list
 * group (usually a <code><dt></code>, <code><dd></code> pair).</li> <li>The
 * exact value of the term being defined is determined by the following rules: 
 * <ol>   <li>If the <code><dfn></code> element has a title attribute, then the
 * term is the value of that attribute.</li>   <li>Else, if it contains only an
 * <code><abbr></code> element with a <code>title</code> attribute, then the
 * term is the value of that attribute.</li>   <li>Otherwise, the text content
 * of the <code><dfn></code> element is the term being
 * defined.</li></ol></li></ul>
 */
class Dfn extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "dfn" );
	}
}