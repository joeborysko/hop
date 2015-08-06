<?php

namespace hop\elements\instances\table;

require_once __DIR__ . "/../../EmptyElement.php";

/**
 * The HTML Table Column Element (<col>) defines a column within a table and
 * is used for defining common semantics on all common cells. It is generally
 * found within a <code><colgroup></code> element.
 */
class Col extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "col" );
	}
	
	/**
	 * This attribute contains a positive integer indicating the number of
	 * consecutive columns the <code><col></code> element spans. If not
	 * present, its default value is <code>1</code>.
	 * @param span
	 */
	public function setSpan( $span )
	{
		$this->setAttribute( "span", $span );
	}
}