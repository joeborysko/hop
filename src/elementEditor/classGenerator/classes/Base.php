<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * <p>The HTML Base Element (<base>) specifies the base URL to use for all
 * relative URLs contained within a document. There can be only one <base>
 * element in a document. </p><p>The base URL of a document can be queried
 * from a script using <code>document.baseURI</code>.</p>Usage Note: If
 * multiple <code><base></code> elements are specified, only the first href and
 * first target value are used; all others are ignored.
 */
class Base extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "base" );
	}
	
	/**
	 * The base URL to be used throughout the document for relative URL
	 * addresses. If this attribute is specified, this element must come before
	 * any other elements with attributes whose values are URLs. Absolute and
	 * relative URIs are allowed (but see note section below).
	 * @param href
	 */
	public function setHref( $href )
	{
		$this->setAttribute( "href", $href );
	}
	
	/**
	 * A name or keyword indicating the default location to display the result
	 * when hyperlinks or forms cause navigation, for elements that do not have
	 * an explicit target reference. In HTML4, this is the name of, or a
	 * keyword for, a frame. In HTML5, it is a name of, or keyword for, a
	 * browsing context (for example, tab, window, or inline frame). The
	 * following keywords have special meanings: <ul>  <li><code>_self</code>:
	 * Load the result into the same HTML4 frame (or HTML5 browsing context) as
	 * the current one. This value is the default if the attribute is not
	 * specified.</li>  <li><code>_blank</code>: Load the result into a new
	 * unnamed HTML4 window or HTML5 browsing context.</li> 
	 * <li><code>_parent</code>: Load the result into the HTML4 frameset parent
	 * of the current frame or HTML5 parent browsing context of the current
	 * one. If there is no parent, this option behaves the same way as
	 * <code>_self</code>.</li>  <li><code>_top</code>: In HTML4: Load the
	 * result into the full, original window, canceling all other frames. In
	 * HTML5: Load the result into the top-level browsing context (that is, the
	 * browsing context that is an ancestor of the current one, and has no
	 * parent). If there is no parent, this option behaves the same way as
	 * <code>_self</code>.</li></ul>
	 * @param target
	 */
	public function setTarget( $target )
	{
		$this->setAttribute( "target", $target );
	}
}