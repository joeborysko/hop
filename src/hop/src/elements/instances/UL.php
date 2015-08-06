<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML unordered list element (<code><ul></code>) represents an
 * unordered list of items, namely a collection of items that do not have a
 * numerical ordering, and their order in the list is meaningless. Typically,
 * unordered-list items are displayed with a bullet, which can be of several
 * forms, like a dot, a circle or a squared. The bullet style is not defined in
 * the HTML description of the page, but in its associated CSS, using the
 * <code>list-style-type</code> property.</p><p>There is no limitation to the
 * depth and imbrication of lists defined with the <code><ol></code> and
 * <code><ul></code> elements.</p> Usage note:  The <code><ol></code> and
 * <code><ul></code> elements both represent a list of items. They differ in
 * that, with the <code><ol></code> element, the order is meaningful. As a rule
 * of thumb to determine which one to use, try changing the order of the list
 * items; if the meaning is changed, the <code><ol></code> element should be
 * used, otherwise you can use <code><ul></code>.
 */
class UL extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "ul" );
	}
}