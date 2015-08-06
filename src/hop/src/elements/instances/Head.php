<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Head Element (<head>) provides general information (metadata) about
 * the document, including its title and links to or definitions of scripts and
 * style sheets
 */
class Head extends HTMLElement
{
	/**
	 * @param titleText
	 * The value to set for the title element in this <code><head></code>
	 */
	public function __construct( $titleText )
	{
		parent::__construct( "head" );
		$title = new Title( $titleText );
		$this->addChild( $title );
	}
}