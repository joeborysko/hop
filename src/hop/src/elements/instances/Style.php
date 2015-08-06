<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Style Element (<style>) contains style information for a document,
 * or part of a document. By default, the style instructions written inside
 * that element are expected to be CSS.
 */
class Style extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "style" );
	}
	
	/**
	 * This attribute defines the styling language as a MIME type (charset
	 * should not be specified). This attribute is optional and default to
	 * <code>text/css</code> if it's missing.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * Which media should this style apply to. It's value is a media query,
	 * which default to <code>all</code> if the attribute is missing.
	 * @param media
	 */
	public function setMedia( $media )
	{
		$this->setAttribute( "media", $media );
	}
	
	/**
	 * If this attribute is present, then the style applies only to its parent
	 * element. If absent, the style applies to the whole document.
	 */
	public function setScopedYes()
	{
		$this->setAttribute( "scoped");
	}
	
	/**
	 * Specifies alternative style sheet sets.
	 * @param title
	 */
	public function setTitle( $title )
	{
		$this->setAttribute( "title", $title );
	}
	
	/**
	 * If set, disables (does not apply) the style rules, specified within the
	 * element, to the <code>Document</code>.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
}