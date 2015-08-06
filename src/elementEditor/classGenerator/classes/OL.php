<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><ol></code> Element (or HTML Ordered List Element)
 * represents an ordered list of items. Typically, ordered-list items are
 * displayed with a preceding numbering, which can be of any form, like
 * numerals, letters or Romans numerals or even simple bullets. This numbered
 * style is not defined in the HTML description of the page, but in its
 * associated CSS, using the <code>list-style-type</code> property.</p><p>There
 * is no limitation to the depth and imbrication of lists defined with the
 * <code><ol></code> and <code><ul></code> elements.</p>
 */
class OL extends HTMLElement
{
	const LIST_TYPE_LOWERCASE_LETTERS = "a";
	const LIST_TYPE_UPPERCASE_LETTERS = "A";
	const LIST_TYPE_LOWERCASE_ROMAN_NUMERALS = "i";
	const LIST_TYPE_UPPERCASE_ROMAN_NUMERALS = "I";
	const LIST_TYPE_NUMBERS = "1";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "ol" );
	}
	
	/**
	 * This Boolean attribute specifies that the items of the item are
	 * specified in the reverse order, i.e. that the least important one is
	 * listed first.
	 */
	public function setReversedYes()
	{
		$this->setAttribute( "reversed");
	}
	
	/**
	 * This integer attribute specifies the start value for numbering the
	 * individual list items. Although the ordering type of list elements might
	 * be Roman numerals, such as XXXI, or letters, the value of start is
	 * always represented as a number. To start numbering elements from the
	 * letter "C", use <code><ol start="3"></code>.     Note: This attribute
	 * was deprecated in HTML4, but reintroduced in HTML5.
	 * @param start
	 */
	public function setStart( $start )
	{
		$this->setAttribute( "start", $start );
	}
	
	/**
	 * Indicates the numbering type:  <ul>   <li><code>'a'</code> indicates
	 * lowercase letters,</li>   <li><code>'A'</code> indicates uppercase
	 * letters,</li>   <li><code>'i'</code> indicates lowercase Roman
	 * numerals,</li>   <li><code>'I'</code> indicates uppercase Roman
	 * numerals,</li>   <li>and <code>'1'</code> indicates numbers
	 * (default).</li>  </ul>  <p>The type set is used for the entire list
	 * unless a different <code>type</code> attribute is used within an
	 * enclosed <code><li></code> element.</p>     Note: This attribute was
	 * deprecated in HTML4, but reintroduced in HTML5. Unless the value of the
	 * list number matters (e.g. in legal or technical documents where items
	 * are to be referenced by their number/letter), the CSS
	 * <code>list-style-type</code> property should be used instead.See the
	 * LIST_TYPE_* constants in this class.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
}