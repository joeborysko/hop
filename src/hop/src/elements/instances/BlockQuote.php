<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><blockquote></code> Element (or HTML Block Quotation Element)
 * indicates that the enclosed text is an extended quotation. Usually, this is
 * rendered visually by indentation (see Notes for how to change it). A URL for
 * the source of the quotation may be given using the cite attribute, while a
 * text representation of the source can be given using the <code><cite></code>
 * element.
 */
class BlockQuote extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "blockquote" );
	}
	
	/**
	 * A URL that designates a source document or message for the information
	 * quoted. This attribute is intended to point to information explaining
	 * the context or the reference for the quote.
	 * @param cite
	 */
	public function setCite( $cite )
	{
		$this->setAttribute( "cite", $cite );
	}
}