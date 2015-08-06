<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><figure></code> Element represents self-contained content,
 * frequently with a caption (<code><figcaption></code>)<code>,</code> and
 * is typically referenced as a single unit. While it is related to the main
 * flow, its position is independent of the main flow. Usually this is an
 * image, an illustration, a diagram, a code snippet, or a schema that is
 * referenced in the main text, but that can be moved to another page or to an
 * appendix without affecting the main flow. <p>Usage notes: </p> <ul> 
 * <li>Being a sectioning root, the outline of the content of the <figure>
 * element is excluded from the main outline of the document.</li>  <li>A
 * caption can be associated with the <code><figure></code> element by
 * inserting a <code><figcaption></code> inside it (as the first or the last
 * child).</li></ul>
 */
class Figure extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "figure" );
	}
}