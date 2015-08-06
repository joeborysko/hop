<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><content></code> element is used inside of Shadow DOM as an
 * insertion point. It is not intended to be used in ordinary HTML. It is used
 * with Web Components.
 */
class Content extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "content" );
	}
	
	/**
	 * A comma-separated list of selectors. These have the same syntax as CSS
	 * selectors. They select the content to insert in place of the
	 * <code><content></code> element.
	 * @param select
	 */
	public function setSelect( $select )
	{
		$this->setAttribute( "select", $select );
	}
}