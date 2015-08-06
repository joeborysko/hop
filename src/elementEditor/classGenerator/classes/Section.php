<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Section Element (<code><section></code>) represents a generic
 * section of a document, i.e., a thematic grouping of content, typically with
 * a heading. Each <code><section></code> should be identified, typically by
 * including a heading (<code><h1></code>-<code><h6></code> element) as a child
 * of the <code><section></code> element.</p><p>Usage notes :</p><ul> <li>If it
 * makes sense to separately syndicate the content of a <code><section></code>
 * element, use an <code><article></code> element instead.</li> <li>Do not use
 * the <code><section></code> element as a generic container; this is what
 * <code><div></code> is for, especially when the sectioning is only for
 * styling purposes. A rule of thumb is that a section should logically appear
 * in the outline of a document.</li></ul>
 */
class Section extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "section" );
	}
}