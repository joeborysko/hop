<?php

namespace hop\elements\instances\table;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML Table Column Group Element (<colgroup>) defines a group of
 * columns within a table.
 */
class ColGroup extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "colgroup" );
	}
	
	/**
	 * This attribute contains a positive integer indicating the number of
	 * consecutive columns the <code><colgroup></code> element spans. If not
	 * present, its default value is <code>1</code>. Note: This attribute is
	 * applied on the attributes of the column group, it has no effect on the
	 * CSS styling rules associated with it or, even more, to the cells of the
	 * column's members of the group. <ul>  <li>The <code>span</code> attribute
	 * may not be present if there are one or more <code><col></code> elements
	 * within the <code><colgroup></code>.</li></ul>
	 * @param span
	 */
	public function setSpan( $span )
	{
		$this->setAttribute( "span", $span );
	}
}