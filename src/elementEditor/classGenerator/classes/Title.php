<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Title Element (<title>) defines the title of the document, shown in
 * a browser's title bar or on the page's tab. It can only contain text and any
 * contained tags are not interpreted.
 */
class Title extends HTMLElement
{
	/**
	 * @param titleText
	 * The text to put inside of this <code><title></code> attribute.
	 */
	public function __construct( $titleText )
	{
		parent::__construct( "title" );
		$this->setText( $titleText );
	}
}