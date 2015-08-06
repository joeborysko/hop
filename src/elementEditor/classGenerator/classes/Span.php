<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><span></code> element is a generic inline container for
 * phrasing content, which does not inherently represent anything. It can be
 * used to group elements for styling purposes (using the <code>class</code> or
 * <code>id</code> attributes), or because they share attribute values, such as
 * <code>lang</code>. It should be used only when no other semantic element is
 * appropriate. <code><span></code> is very much like a <code><div></code>
 * element, but <code><div></code> is a block-level element whereas a
 * <code><span></code> is an inline element.
 */
class Span extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "span" );
	}
}