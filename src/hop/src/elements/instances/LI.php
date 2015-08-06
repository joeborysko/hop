<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML List item element (<code><li></code>) is used to represent a list
 * item. It should be contained in an ordered list (<code><ol></code>), an
 * unordered list (<code><ul></code>) or a menu (<code><menu></code>), where it
 * represents a single entity in that list. In menus and unordered lists, list
 * items are ordinarily displayed using bullet points. In ordered lists, they
 * are usually displayed with some ascending counter on the left such as a
 * number or letter
 */
class LI extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "li" );
	}
	
	/**
	 * This integer attributes indicates the current ordinal value of the item
	 * in the list as defined by the <code><ol></code> element. The only
	 * allowed value for this attribute is a number, even if the list is
	 * displayed with Roman numerals or letters. List items that follow this
	 * one continue numbering from the value set. The value attribute has no
	 * meaning for unordered lists (<code><ul></code>) or for menus
	 * (<code><menu></code>).     Note: This attribute was deprecated in HTML4,
	 * but reintroduced in HTML5.     <p>Note: Prior to Gecko 9.0, negative
	 * values were incorrectly converted to 0. Starting in Gecko 9.0 all
	 * integer values are correctly parsed.</p>
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
}