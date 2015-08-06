<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Abbreviation element (<abbr>) represents an abbreviation and
 * optionally provides a full description for it. If present, the
 * <code>title</code> attribute must contain this full description and nothing
 * else.
 */
class Abbr extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "abbr" );
	}
	
	/**
	 * Set the full description of this abbreviation. This function simply sets
	 * the title attribute.
	 * @param fullDescription
	 * Set the full description of this abbreviation. This function simply sets
	 * the title attribute.
	 */
	public function setFullDescription( $fullDescription )
	{
		$this->setTitle( $fullDescription );
	}
}