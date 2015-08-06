<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><div></code> element (or HTML Document Division Element) is
 * the generic container for flow content, which does not inherently represent
 * anything. It can be used to group elements for styling purposes (using the
 * class or id attributes), or because they share attribute values, such as
 * lang. It should be used only when no other semantic element (such as
 * <code><article></code> or <code><nav></code>) is appropriate.
 */
class Div extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "div" );
	}
}