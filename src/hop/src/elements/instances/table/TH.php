<?php

namespace hop\elements\instances\table;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML Table Header Cell Element (<code><th></code>) defines a cell that
 * is a header for a group of cells of a table. The group of cells that the
 * header refers to is defined by the <code>scope</code> and
 * <code>headers</code> attribute.
 */
class TH extends HTMLElement
{
	const SCOPE_ROW = "row";
	const SCOPE_COLUMN = "col";
	const SCOPE_ROW_GROUP = "rowgroup";
	const SCOPE_COLUMN_GROUP = "colgroup";
	const SCOPE_AUTO = "auto";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "th" );
	}
	
	/**
	 * This attribute contains a non-negative integer value that indicates on
	 * how many columns does the cell extend. Its default value is
	 * <code>1</code>; if its value is set to <code>0</code>, it does extend
	 * until the end of the <code><colgroup></code>, eventually implicitly
	 * defined, the cell belongs to. Values higher than 1000 are clipped down
	 * to 1000.
	 * @param colSpan
	 */
	public function setColSpan( $colSpan )
	{
		$this->setAttribute( "colspan", $colSpan );
	}
	
	/**
	 * This attributes a list of space-separated strings, each corresponding to
	 * the id attribute of the <code><th></code> elements that applies to this
	 * element.
	 * @param headers
	 */
	public function setHeaders( $headers )
	{
		$this->setAttribute( "headers", $headers );
	}
	
	/**
	 * This attribute contains a non-negative integer value that indicates on
	 * how many rows does the cell extend. Its default value is <code>1</code>;
	 * if its value is set to <code>0</code>, it does extend until the end of
	 * the table section (<code><thead></code>, <code><tbody></code>,
	 * <code><tfoot></code>, eventually implicitly defined) the cell belongs
	 * to. Values higher than 65534 are clipped down to 65534.
	 * @param rowSpan
	 */
	public function setRowSpan( $rowSpan )
	{
		$this->setAttribute( "rowspan", $rowSpan );
	}
	
	/**
	 * This enumerated attribute defines the cells that the header defined in
	 * this <code><th></code> element relates to. It may have the following
	 * values: <ul>  <li><code>row</code>, which means that the header relates
	 * to all cells in the row that this element belongs to;</li> 
	 * <li><code>col</code>, which means that the header relates to all cells
	 * in the column that this element belongs to;</li> 
	 * <li><code>rowgroup</code>, which means that the header relates to all
	 * remaining cells in the row group that this element belongs to. The
	 * remaining cells are either those to the right of this element, or to his
	 * left depending of the value of<code>dir</code> attribute defined on the
	 * <code><table></code> element;</li>  <li><code>colgroup</code>, which
	 * means that the header relates to all remaining cells in the column group
	 * that this element belongs to;</li>  <li>auto</li></ul>See the SCOPE_*
	 * constants in this class.
	 * @param scope
	 */
	public function setScope( $scope )
	{
		$this->setAttribute( "scope", $scope );
	}
}