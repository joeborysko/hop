<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The Table cell HTML element (<code><td></code>) defines a cell of a table
 * that contains data. It participates in the table model.
 */
class TD extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "td" );
	}
	
	/**
	 * This attribute contains a non-negative integer value that indicates for
	 * how many columns the cell extends. Its default value is <code>1</code>;
	 * if its value is set to <code>0</code>, it extends until the end of the
	 * <code><colgroup></code>, even if implicitly defined, that the cell
	 * belongs to. Values higher than 1000 will be considered as incorrect and
	 * will be set to the default value (1).     Note: In HTML5 this attribute
	 * only accepts values greater than zero since it must not be used to
	 * overlap cells. Besides, Firefox is the only browser to support the 0
	 * value as defined in the HTML 4.01 specification.
	 * @param colSpan
	 */
	public function setColSpan( $colSpan )
	{
		$this->setAttribute( "colspan", $colSpan );
	}
	
	/**
	 * This attribute contains a list of space-separated strings, each
	 * corresponding to the id attribute of the <code><th></code> elements that
	 * apply to this element.
	 * @param headers
	 */
	public function setHeaders( $headers )
	{
		$this->setAttribute( "headers", $headers );
	}
	
	/**
	 * This attribute contains a non-negative integer value that indicates for
	 * how many rows the cell extends. Its default value is <code>1</code>; if
	 * its value is set to <code>0</code>, it extends until the end of the
	 * table section (<code><thead></code>, <code><tbody></code>,
	 * <code><tfoot></code>, even if implicitly defined, that the cell belongs
	 * to. Values higher than 65534 are clipped down to 65534.
	 * @param rowSpan
	 */
	public function setRowSpan( $rowSpan )
	{
		$this->setAttribute( "rowspan", $rowSpan );
	}
}