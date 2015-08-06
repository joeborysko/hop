<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><button></code> Element represents a clickable button.
 */
class Button extends HTMLElement
{
	const FORM_METHOD_GET = "get";
	const FORM_METHOD_POST = "post";
	const BUTTON_TYPE_SUBMIT = "submit";
	const BUTTON_TYPE_RESET = "reset";
	const BUTTON_TYPE_BUTTON = "button";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "button" );
	}
	
	/**
	 * This Boolean attribute lets you specify that the button should have
	 * input focus when the page loads, unless the user overrides it, for
	 * example by typing in a different control. Only one form-associated
	 * element in a document can have this attribute specified.
	 */
	public function setAutofocusYes()
	{
		$this->setAttribute( "autofocus");
	}
	
	/**
	 * This Boolean attribute indicates that the user cannot interact with the
	 * button. If this attribute is not specified, the button inherits its
	 * setting from the containing element, for example
	 * <code><fieldset></code>; if there is no containing element with the
	 * disabled attribute set, then the button is enabled.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * The form element that the button is associated with (its form owner).
	 * The value of the attribute must be the id attribute of a
	 * <code><form></code> element in the same document. If this attribute is
	 * not specified, the <code><button></code> element must be a descendant of
	 * a form element. This attribute enables you to place
	 * <code><button></code> elements anywhere within a document, not just as
	 * descendants of their <code><form></code> elements.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The URI of a program that processes the information submitted by the
	 * button. If specified, it overrides the <code>action</code> attribute of
	 * the button's form owner.
	 * @param formAction
	 */
	public function setFormAction( $formAction )
	{
		$this->setAttribute( "formaction", $formAction );
	}
	
	/**
	 * If the button is a submit button, this attribute specifies the type of
	 * content that is used to submit the form to the server. Possible values
	 * are:  <ul>   <li><code>application/x-www-form-urlencoded</code>: The
	 * default value if the attribute is not specified.</li>  
	 * <li><code>multipart/form-data</code>: Use this value if you are using an
	 * <code><input></code> element with the <code>type</code> attribute set to
	 * <code>file</code>.</li>   <li><code>text/plain</code></li>  </ul>  <p>If
	 * this attribute is specified, it overrides the <code>enctype</code>
	 * attribute of the button's form owner.</p>
	 * @param formEncType
	 */
	public function setFormEncType( $formEncType )
	{
		$this->setAttribute( "formenctype", $formEncType );
	}
	
	/**
	 * If the button is a submit button, this attribute specifies the HTTP
	 * method that the browser uses to submit the form. Possible values are: 
	 * <ul>   <li><code>post</code>: The data from the form is included in the
	 * body of the form and is sent to the server.</li>   <li><code>get</code>:
	 * The data from the form are appended to the form attribute URI, with a
	 * '?' as a separator, and the resulting URI is sent to the server. Use
	 * this method when the form has no side-effects and contains only ASCII
	 * characters.</li>  </ul>  <p>If specified, this attribute overrides the
	 * <code>method</code> attribute of the button's form owner.</p>See the
	 * FORM_METHOD_* constants in this class.
	 * @param formMethod
	 */
	public function setFormMethod( $formMethod )
	{
		$this->setAttribute( "formmethod", $formMethod );
	}
	
	/**
	 *   If the button is a submit button, this Boolean attribute specifies
	 * that the form is not to be validated when it is submitted. If this
	 * attribute is specified, it overrides the <code>novalidate</code>
	 * attribute of the button's form owner.
	 */
	public function setFormNoValidateYes()
	{
		$this->setAttribute( "formnovalidate");
	}
	
	/**
	 * If the button is a submit button, this attribute is a name or keyword
	 * indicating where to display the response that is received after
	 * submitting the form. This is a name of, or keyword for, a browsing
	 * context (for example, tab, window, or inline frame). If this attribute
	 * is specified, it overrides the <code>target</code> attribute of the
	 * button's form owner. The following keywords have special meanings:  <ul>
	 *   <li><code>_self</code>: Load the response into the same browsing
	 * context as the current one. This value is the default if the attribute
	 * is not specified.</li>   <li><code>_blank</code>: Load the response into
	 * a new unnamed browsing context.</li>   <li><code>_parent</code>: Load
	 * the response into the parent browsing context of the current one. If
	 * there is no parent, this option behaves the same way as
	 * <code>_self</code>.</li>   <li><code>_top</code>: Load the response into
	 * the top-level browsing context (that is, the browsing context that is an
	 * ancestor of the current one, and has no parent). If there is no parent,
	 * this option behaves the same way as <code>_self</code>.</li></ul>
	 * @param formTarget
	 */
	public function setFormTarget( $formTarget )
	{
		$this->setAttribute( "formtarget", $formTarget );
	}
	
	/**
	 * The name of the button, which is submitted with the form data.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * The type of the button. Possible values are:  <ul>  
	 * <li><code>submit</code>: The button submits the form data to the server.
	 * This is the default if the attribute is not specified, or if the
	 * attribute is dynamically changed to an empty or invalid value.</li>  
	 * <li><code>reset</code>: The button resets all the controls to their
	 * initial values.</li>   <li><code>button</code>: The button has no
	 * default behavior. It can have client-side scripts associated with the
	 * element's events, which are triggered when the events
	 * occur.</li></ul>See the BUTTON_TYPE_* constants in this class.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * The initial value of the button
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
	
	/**
	 */
	public function setFormMethodGet()
	{
		$this->setFormMethod( self::FORM_METHOD_GET );
	}
	/**
	 */
	public function setFormMethodPost()
	{
		$this->setFormMethod( self::FORM_METHOD_POST );
	}
}