<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Table Body Element (<code><tbody></code>) defines one or more
 * rows as the body of its parent <code><table></code> element when
 * no <code><tr></code> elements are children of the parent.  In conjunction
 * with a preceding <code><tfoot></code> and <code><thead></code>
 * element, <code><tbody></code> provides additional semantic information
 * for devices such as printers and displays. Of the parent table's child
 * elements, <code><tbody></code> will represent the content, if longer than
 * a page, that will most likely differ for each page printed.
 * The <code><tfoot></code> and <code><thead></code> elements' content will
 * be consistent for each page printed. For displays,
 * <code><tbody></code> will enable separate scrolling from
 * the <code><tfoot></code>, <code><thead></code>
 * and <code><caption></code> elements of the same
 * parent <code><table></code> element.
 */
class TBody extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "tbody" );
	}
}