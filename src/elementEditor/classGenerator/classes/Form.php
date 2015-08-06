<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><form></code> element represents a document section that
 * contains interactive controls to submit information to a web
 * server.</p><p>It is possible to use the <code>:valid</code> and
 * <code>:invalid</code> CSS pseudo-classes to style a <code><form></code>
 * element.</p>
 */
class Form extends HTMLElement
{
	const AUTO_CAPITALIZE_NONE = "none";
	const AUTO_CAPITALIZE_SENTENCES = "sentences";
	const AUTO_CAPITALIZE_WORDS = "words";
	const AUTO_CAPITALIZE_CHARACTERS = "characters";
	const METHOD_POST = "post";
	const METHOD_GET = "get";
	const ENCODE_TYPE_FORM_URL_ENCODED = "application/x-www-form-urlencoded";
	const ENCODE_TYPE_FORM_DATA = "multipart/form-data";
	const ENCODE_TYPE_TEXT = "text/plain";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "form" );
	}
	
	/**
	 * A space- or comma-delimited list of character encodings that the server
	 * accepts. The browser uses them in the order in which they are listed.
	 * The default value, the reserved string "UNKNOWN", indicates the same
	 * encoding as that of the document containing the form element.  In
	 * previous versions of HTML, the different character encodings could be
	 * delimited by spaces or commas. In HTML5, only spaces are allowed as
	 * delimiters.
	 * @param acceptCharset
	 */
	public function setAcceptCharset( $acceptCharset )
	{
		$this->setAttribute( "accept-charset", $acceptCharset );
	}
	
	/**
	 * The URI of a program that processes the form information. This value can
	 * be overridden by a <code>formaction</code> attribute on a
	 * <code><button></code> or <code><input></code> element.
	 * @param action
	 */
	public function setAction( $action )
	{
		$this->setAttribute( "action", $action );
	}
	
	/**
	 * This is a nonstandard attribute used by iOS Safari Mobile which controls
	 * whether and how the text value for textual form control descendants
	 * should be automatically capitalized as it is entered/edited by the user.
	 * If the <code>autocapitalize</code> attribute is specified on an
	 * individual form control descendant, it trumps the form-wide
	 * <code>autocapitalize</code> setting. The non-deprecated values are
	 * available in iOS 5 and later. The default value is
	 * <code>sentences</code>. Possible values are:  <ul>  
	 * <li><code>none</code>: Completely disables automatic capitalization</li>
	 *   <li><code>sentences</code>: Automatically capitalize the first letter
	 * of sentences.</li>   <li><code>words</code>: Automatically capitalize
	 * the first letter of words.</li>   <li><code>characters</code>:
	 * Automatically capitalize all characters.</li>   <li><code>on</code>:  
	 * Deprecated since iOS 5.</li>   <li><code>off</code>:   Deprecated since
	 * iOS 5.</li></ul>See the AUTO_CAPITALIZE_* constants in this class.
	 * @param autoCapitalize
	 */
	public function setAutoCapitalize( $autoCapitalize )
	{
		$this->setAttribute( "autocapitalize", $autoCapitalize );
	}
	
	/**
	 * Indicates whether input elements can by default have their values
	 * automatically completed by the browser. This setting can be overridden
	 * by an <code>autocomplete</code> attribute on an element belonging to the
	 * form. Possible values are:  <ul>   <li><code>off</code>: The user must
	 * explicitly enter a value into each field for every use, or the document
	 * provides its own auto-completion method; the browser does not
	 * automatically complete entries.</li>   <li><code>on</code>: The browser
	 * can automatically complete values based on values that the user has
	 * previously entered in the form.</li>  </ul>     <p>Note: If you set
	 * <code>autocomplete</code> to <code>off</code> in a form because the
	 * document provides its own auto-completion, then you should also set
	 * <code>autocomplete</code> to <code>off</code> for each of the form's
	 * <code>input</code> elements that the document can auto-complete. For
	 * details, see Google Chrome notes.</p>
	 * @param autoComplete
	 */
	public function setAutoComplete( $autoComplete )
	{
		$this->setAttribute( "autocomplete", $autoComplete );
	}
	
	/**
	 * When the value of the <code>method</code> attribute is
	 * <code>post</code>, enctype is the MIME type of content that is used to
	 * submit the form to the server. Possible values are:  <ul>  
	 * <li><code>application/x-www-form-urlencoded</code>: The default value if
	 * the attribute is not specified.</li>  
	 * <li><code>multipart/form-data</code>: The value used for an
	 * <code><input></code> element with the <code>type</code> attribute set to
	 * "file".</li>   <li><code>text/plain (HTML5)</code></li>  </ul>  <p>This
	 * value can be overridden by a <code>formenctype</code> attribute on a
	 * <code><button></code> or <code><input></code> element.</p>See the
	 * ENCODE_TYPE_* constants in this file.
	 * @param encType
	 */
	public function setEncType( $encType )
	{
		$this->setAttribute( "enctype", $encType );
	}
	
	/**
	 * The HTTP method that the browser uses to submit the form. Possible
	 * values are:  <ul>   <li><code>post</code>: Corresponds to the HTTP POST
	 * method ; form data are included in the body of the form and sent to the
	 * server.</li>   <li><code>get</code>: Corresponds to the HTTP GET method;
	 * form data are appended to the <code>action</code> attribute URI with a
	 * '?' as separator, and the resulting URI is sent to the server. Use this
	 * method when the form has no side-effects and contains only ASCII
	 * characters.</li>  </ul>  <p>This value can be overridden by a
	 * <code>formmethod</code> attribute on a <code><button></code> or
	 * <code><input></code> element.</p>See the METHOD_* constants in this
	 * file.
	 * @param method
	 */
	public function setMethod( $method )
	{
		$this->setAttribute( "method", $method );
	}
	
	/**
	 * The name of the form. In HTML 4,its use is deprecated (<code>id</code>
	 * should be used instead). It must be unique among the forms in a document
	 * and not just an empty string in HTML 5.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * This Boolean attribute indicates that the form is not to be validated
	 * when submitted. If this attribute is not specified (and therefore the
	 * form is validated), this default setting can be overridden by a
	 * <code>formnovalidate</code> attribute on a <code><button></code> or
	 * <code><input></code> element belonging to the form.
	 */
	public function setNoValidateYes()
	{
		$this->setAttribute( "novalidate");
	}
	
	/**
	 * A name or keyword indicating where to display the response that is
	 * received after submitting the form. In HTML 4, this is the name/keyword
	 * for a frame. In HTML5, it is a name/keyword for a browsing context (for
	 * example, tab, window, or inline frame). The following keywords have
	 * special meanings:  <ul>   <li><code>_self</code>: Load the response into
	 * the same HTML 4 frame (or HTML5 browsing context) as the current one.
	 * This value is the default if the attribute is not specified.</li>  
	 * <li><code>_blank</code>: Load the response into a new unnamed HTML 4
	 * window or HTML5 browsing context.</li>   <li><code>_parent</code>: Load
	 * the response into the HTML 4 frameset parent of the current frame, or
	 * HTML5 parent browsing context of the current one. If there is no parent,
	 * this option behaves the same way as <code>_self</code>.</li>  
	 * <li><code>_top</code>: HTML 4: Load the response into the full original
	 * window, and cancel all other frames. HTML5: Load the response into the
	 * top-level browsing context (i.e., the browsing context that is an
	 * ancestor of the current one, and has no parent). If there is no parent,
	 * this option behaves the same way as <code>_self</code>.</li>  
	 * <li>iframename: The response is displayed in a named
	 * <code><iframe></code>.</li>  </ul>  <p>HTML5: This value can be
	 * overridden by a <code>formtarget</code> attribute on a
	 * <code><button></code> or <code><input></code> element.</p>
	 * @param target
	 */
	public function setTarget( $target )
	{
		$this->setAttribute( "target", $target );
	}
	
	/**
	 * Make it so nothing happens by default when the enter key or submit
	 * button is pressed.
	 */
	public function setActionNothing()
	{
		$this->setAction( "javascription:void(0)" );
	}
}