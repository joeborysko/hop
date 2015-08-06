<?php

namespace hop\elements\instances\script;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * <p>The HTML <code><script></code> element is used to embed or reference an
 * executable script within an HTML or XHTML document.</p><p>Scripts without
 * <code>async</code> or <code>defer</code> attributes, as well as inline
 * scripts, are fetched and executed immediately, before the browser continues
 * to parse the page.</p>
 */
class Script extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "script" );
	}
	
	/**
	 * Set this Boolean attribute to indicate that the browser should, if
	 * possible, execute the script asynchronously. It has no effect on inline
	 * scripts (i.e., scripts that don't have the src attribute). See Browser
	 * compatibility for notes on browser support. See also Async scripts for
	 * asm.js.
	 */
	public function setAsyncYes()
	{
		$this->setAttribute( "async");
	}
	
	/**
	 * This attribute specifies the URI of an external script; this can be used
	 * as an alternative to embedding a script directly within a document.
	 * <code>script</code> elements with an <code>src</code> attribute
	 * specified should not have a script embedded within its tags.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * This attribute identifies the scripting language of code embedded within
	 * a <code>script</code> element or referenced via the element’s
	 * <code>src</code> attribute. This is specified as a MIME type; examples
	 * of supported MIME types include <code>text/javascript</code>,
	 * <code>text/ecmascript</code>, <code>application/javascript</code>, and
	 * <code>application/ecmascript</code>. If this attribute is absent, the
	 * script is treated as JavaScript.  Note that in Firefox you can use
	 * advanced features such as let statements and other features in later JS
	 * versions, by using <code>type=application/javascript;version=1.8</code>.
	 * Beware, however, that as this is a non-standard feature, this will most
	 * likely break support for other browsers, in particular Chromium-based
	 * browsers.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * This Boolean attribute is set to indicate to a browser that the script
	 * is meant to be executed after the document has been parsed. Since this
	 * feature hasn't yet been implemented by all other major browsers, authors
	 * should not assume that the script’s execution will actually be
	 * deferred. The <code>defer</code> attribute shouldn't be used on scripts
	 * that don't have the <code>src</code> attribute. Since Gecko 1.9.2, the
	 * <code>defer</code> attribute is ignored on scripts that don't have the
	 * <code>src</code> attribute. However, in Gecko 1.9.1 even inline scripts
	 * are deferred if the <code>defer</code> attribute is set.
	 */
	public function setDeferYes()
	{
		$this->setAttribute( "defer");
	}
}