<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><canvas></code> Element can be used to draw graphics via
 * scripting (usually JavaScript). For example, it can be used to draw graphs,
 * make photo compositions or even perform animations. You may (and should)
 * provide alternate content inside the <code><canvas></code> block. That
 * content will be rendered both on older browsers that don't support canvas
 * and in browsers with JavaScript disabled.</p><p>For more articles on canvas,
 * see the canvas topic page.</p>
 */
class Canvas extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "canvas" );
	}
	
	/**
	 * The height of the coordinate space in CSS pixels. Defaults to 150.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * The width of the coordinate space in CSS pixels. Defaults to 300.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
}