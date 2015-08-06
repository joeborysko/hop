<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code>Article</code> Element (<article>) represents a
 * self-contained composition in a document, page, application, or site, which
 * is intended to be independently distributable or reusable, e.g., in
 * syndication. This could be a forum post, a magazine or newspaper article, a
 * blog entry, or any other independent item of content. Each
 * <code><article></code> should be identified, typically by including a
 * heading (h1-h6 element) as a child of the <code><article></code>
 * element.</p><p>Usage notes:</p><ul> <li>When an <code><article></code>
 * element is nested, the inner element represents an article related to the
 * outer element. For example, the comments of a blog post can be
 * <code><article></code> elements nested in the <code><article></code>
 * representing the blog post.</li> <li>Author information of an
 * <code><article></code> element can be provided through the
 * <code><address></code> element, but it doesn't apply to nested
 * <code><article></code> elements.</li> <li>The publication date and time of
 * an <code><article></code> element can be described using the
 * <code>pubdate</code> attribute of a <code><time></code> element.</li></ul>
 */
class Article extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "article" );
	}
}