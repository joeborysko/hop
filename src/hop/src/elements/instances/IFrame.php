<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Inline Frame Element (<code><iframe></code>) represents a nested
 * browsing context, effectively embedding another HTML page into the current
 * page. In HTML 4.01, a document may contain a <code>head</code> and a
 * <code>body</code> or a <code>head</code> and a <code>frame-set</code>, but
 * not both a <code>body</code> and a <code>frame-set</code>. However, an
 * <code><iframe></code> can be used within a normal document body. Each
 * browsing context has its own session history and active document. The
 * browsing context that contains the embedded content is called the parent
 * browsing context. The top-level browsing context (which has no parent) is
 * typically the browser window.
 */
class IFrame extends HTMLElement
{
	const SANDBOX_ALLOW_SAME_ORIGIN = "allow-same-origin";
	const SANDBOX_ALLOW_TOP_NAVIGATION = "allow-top-navigation";
	const SANDBOX_ALLOW_FORMS = "allow-forms";
	const SANDBOX_ALLOW_POPUPS = "allow-popups";
	const SANDBOX_ALLOW_SCRIPTS = "allow-scripts";
	const SANDBOX_ALLOW_POINTER_LOCK = "allow-pointer-lock";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "iframe" );
	}
	
	/**
	 * This attribute can be set to <code>true</code> if the frame is allowed
	 * to be placed into full screen mode by calling its
	 * <code>element.mozRequestFullScreen()</code> method. If this isn't set,
	 * the element can't be placed into full screen mode.
	 */
	public function setAllowFullScreenYes()
	{
		$this->setAttribute( "allowfullscreen");
	}
	
	/**
	 * Indicates the height of the frame in CSS pixels.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * A name for the embedded browsing context (or frame). This can be used as
	 * the value of the <code>target</code> attribute of an <code><a></code> or
	 * <code><form></code> element, or the formtarget attribute of an
	 * <code><input></code> or <code><button></code> element.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * If specified as an empty string, this attribute enables extra
	 * restrictions on the content that can appear in the inline frame. The
	 * value of the attribute can either be an empty string (all the
	 * restrictions are applied), or a space-separated list of tokens that lift
	 * particular restrictions. Valid tokens are: <ul> 
	 * <li><code>allow-same-origin</code>: Allows the content to be treated as
	 * being from its normal origin. If this keyword is not used, the embedded
	 * content is treated as being from a unique origin.</li> 
	 * <li><code>allow-top-navigation</code>: Allows the embedded browsing
	 * context to navigate (load) content to the top-level browsing context. If
	 * this keyword is not used, this operation is not allowed.</li> 
	 * <li><code>allow-forms</code>: Allows the embedded browsing context to
	 * submit forms. If this keyword is not used, this operation is not
	 * allowed.</li>  <li><code>allow-popups</code>: Allows popups (like from
	 * <code>window.open</code>, <code>target="_blank"</code>,
	 * <code>showModalDialog</code>). If this keyword is not used, that
	 * functionality will silently fail.</li>  <li><code>allow-scripts</code>:
	 * Allows the embedded browsing context to run scripts (but not create
	 * pop-up windows). If this keyword is not used, this operation is not
	 * allowed.</li>  <li><code>allow-pointer-lock</code>: Allows the embedded
	 * browsing context to use the Pointer Lock API.</li> </ul>  <p>Note:</p>
	 * <ul>  <li>When the embedded document has the same origin as the main
	 * page, it is strongly discouraged to use both <code>allow-scripts</code>
	 * and <code>allow-same-origin</code> at the same time, as that allows the
	 * embedded document to programmatically remove the <code>sandbox</code>
	 * attribute. Although it is accepted, this case is no more secure than not
	 * using the <code>sandbox</code> attribute.</li>  <li>Sandboxing in
	 * general is only of minimal help if the attacker can arrange for the
	 * potentially hostile content to be displayed in the user's browser
	 * outside a sandboxed <code>iframe</code>. It is recommended that such
	 * content should be served from a separate dedicated domain, to limit the
	 * potential damage.</li>  <li>The <code>sandbox</code> attribute is not
	 * supported in Internet Explorer 9 and earlier versions, or in
	 * Opera.</li></ul> See the SANDBOX_ALLOW_* constants in this class.
	 * @param sandbox
	 */
	public function setSandbox( $sandbox )
	{
		$this->setAttribute( "sandbox", $sandbox );
	}
	
	/**
	 * This Boolean attribute indicates that the browser should render the
	 * inline frame in a way that makes it appear to be part of the containing
	 * document, for example by applying CSS styles that apply to the
	 * <code><iframe></code> to the contained document before styles specified
	 * in that document, and by opening links in the contained documents in the
	 * parent browsing context (unless another setting prevents this). In
	 * XHTML, attribute minimization is forbidden, and the seamless attribute
	 * must be defined as <code><iframe seamless="seamless"></code>.
	 */
	public function setSeamlessYes()
	{
		$this->setAttribute( "seamless");
	}
	
	/**
	 * The URL of the page to embed.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * The content of the page that the embedded context is to contain. This
	 * attribute is expected to be used together with the sandbox and seamless
	 * attributes. If a browser supports the <code>srcdoc</code> attribute, it
	 * will override the content specified in the <code>src</code> attribute
	 * (if present). If a browser does NOT support the <code>srcdoc</code>
	 * attribute, it will show the file specified in the <code>src</code>
	 * attribute instead (if present).
	 * @param srcDoc
	 */
	public function setSrcDoc( $srcDoc )
	{
		$this->setAttribute( "srcdoc", $srcDoc );
	}
	
	/**
	 * Indicates the width of the frame in CSS pixels.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
}