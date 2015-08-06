<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Navigation Element (<code><nav></code>) represents a section of
 * a page that links to other pages or to parts within the page: a section with
 * navigation links.</p> <p>Usage notes:</p> <ul>  <li>Not all links of a
 * document must be in a <code><nav></code> element, which is intended only for
 * major block of navigation links; typically the <code><footer></code> element
 * often has a list of links that don't need to be in a <code><nav></code>
 * element.</li>  <li>A document may have several <code><nav></code> elements,
 * for example, one for site navigation and one for intra-page navigation.</li>
 *  <li>User agents, such as screen readers targeting disabled users, can use
 * this element to determine whether to omit the initial rendering of this
 * content.</li></ul>
 */
class Nav extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "nav" );
	}
}