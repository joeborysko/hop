<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><textarea> </code>element represents a multi-line plain-text
 * editing control.
 */
class TextArea extends HTMLElement
{
	const SELECTION_DIRECTION_FORWARD = "forward";
	const SELECTION_DIRECTION_BACKWARD = "backward";
	const SELECTION_DIRECTION_NONE = "none";
	const WRAP_HARD = "hard";
	const WRAP_SOFT = "soft";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "textarea" );
	}
	
	/**
	 * This attribute indicates whether the value of the control can be
	 * automatically completed by the browser. Possible values are:  <ul>  
	 * <li><code>off</code>: The user must explicitly enter a value into this
	 * field for every use, or the document provides its own auto-completion
	 * method; the browser does not automatically complete the entry.</li>  
	 * <li><code>on</code>: The browser can automatically complete the value
	 * based on values that the user has entered during previous uses.</li> 
	 * </ul>  <p>If the autocomplete attribute is not specified on an textarea
	 * element, then the browser uses the autocomplete attribute value of the
	 * <code><textarea></code> element's form owner. The form owner is either
	 * the <code>form</code> element that this <code><textarea></code> element
	 * is a descendant of or the form element whose id is specified by the form
	 * attribute of the input element. For more information, see the
	 * <code>autocomplete</code> attribute in <code><form></code>.</p>
	 * @param autoComplete
	 */
	public function setAutoComplete( $autoComplete )
	{
		$this->setAttribute( "autocomplete", $autoComplete );
	}
	
	/**
	 * This Boolean attribute lets you specify that a form control should have
	 * input focus when the page loads, unless the user overrides it, for
	 * example by typing in a different control. Only one form-associated
	 * element in a document can have this attribute specified. 
	 */
	public function setAutoFocusYes()
	{
		$this->setAttribute( "autofocus");
	}
	
	/**
	 * The visible width of the text control, in average character widths. If
	 * it is specified, it must be a positive integer. If it is not specified,
	 * the default value is 20 (HTML5).
	 * @param cols
	 */
	public function setCols( $cols )
	{
		$this->setAttribute( "cols", $cols );
	}
	
	/**
	 * This Boolean attribute indicates that the user cannot interact with the
	 * control. (If this attribute is not specified, the control inherits its
	 * setting from the containing element, for example
	 * <code><fieldset></code>; if there is no containing element with the
	 * <code>disabled</code> attribute set, then the control is enabled.)
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * The form element that the textarea element is associated with (its "form
	 * owner"). The value of the attribute must be an ID of a form element in
	 * the same document. If this attribute is not specified, the textarea
	 * element must be a descendant of a form element. This attribute enables
	 * you to place textarea elements anywhere within a document, not just as
	 * descendants of their form elements.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The maximum number of characters (Unicode code points) that the user can
	 * enter. If it is not specified, the user can enter an unlimited number of
	 * characters.
	 * @param maxLength
	 */
	public function setMaxLength( $maxLength )
	{
		$this->setAttribute( "maxlength", $maxLength );
	}
	
	/**
	 * The minimum number of characters (Unicode code points) required that the
	 * user should enter.
	 * @param minLength
	 */
	public function setMinLength( $minLength )
	{
		$this->setAttribute( "minlength", $minLength );
	}
	
	/**
	 * The name of the control.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * A hint to the user of what can be entered in the control. The
	 * placeholder text must not contain carriage returns or line-feeds.
	 * @param placeholder
	 */
	public function setPlaceholder( $placeholder )
	{
		$this->setAttribute( "placeholder", $placeholder );
	}
	
	/**
	 * This Boolean attribute indicates that the user cannot modify the value
	 * of the control. Unlike the <code>disabled</code> attribute, the
	 * <code>readonly</code> attribute does not prevent the user from clicking
	 * or selecting in the control. The value of a read-only control is still
	 * submitted with the form.
	 */
	public function setReadOnlyYes()
	{
		$this->setAttribute( "readonly");
	}
	
	/**
	 * <code></code>   The number of visible text lines for the control
	 * @param rows
	 */
	public function setRows( $rows )
	{
		$this->setAttribute( "rows", $rows );
	}
	
	/**
	 * The direction in which selection occurred. This is "forward" if the
	 * selection was made from left-to-right in an LTR locale or right-to-left
	 * in an RTL locale, or "backward" if the selection was made in the
	 * opposite direction. This can be "none" if the selection direction is
	 * unknown.See the SELECTION_DIRECTION_* constants in this class.
	 * @param selectionDirection
	 */
	public function setSelectionDirection( $selectionDirection )
	{
		$this->setAttribute( "selectiondirection", $selectionDirection );
	}
	
	/**
	 * The index to the last character in the current selection.
	 * @param selectionEnd
	 */
	public function setSelectionEnd( $selectionEnd )
	{
		$this->setAttribute( "selectionend", $selectionEnd );
	}
	
	/**
	 * The index to the first character in the current selection.
	 * @param selectionStart
	 */
	public function setSelectionStart( $selectionStart )
	{
		$this->setAttribute( "selectionstart", $selectionStart );
	}
	
	/**
	 * Setting the value of this attribute to <code>true</code> indicates that
	 * the element needs to have its spelling and grammar checked. The value
	 * <code>default</code> indicates that the element is to act according to a
	 * default behavior, possibly based on the parent element's own
	 * <code>spellcheck</code> value. The value <code>false</code> indicates
	 * that the element should not be checked.
	 * @param spellcheck
	 */
	public function setSpellcheck( $spellcheck )
	{
		$this->setAttribute( "spellcheck", $spellcheck );
	}
	
	/**
	 * Indicates how the control wraps text. Possible values are:  <ul>  
	 * <li>hard: The browser automatically inserts line breaks (CR+LF) so that
	 * each line has no more than the width of the control; the
	 * <code>cols</code> attribute must be specified.</li>   <li>soft: The
	 * browser ensures that all line breaks in the value consist of a CR+LF
	 * pair, but does not insert any additional line breaks.</li>  </ul>  <p>If
	 * this attribute is not specified, soft is its default value.</p>See the
	 * WRAP_* constants in this class.
	 * @param wrap
	 */
	public function setWrap( $wrap )
	{
		$this->setAttribute( "wrap", $wrap );
	}
	
	/**
	 * This attribute specifies that the user must fill in a value before
	 * submitting a form.
	 */
	public function setRequiredYes()
	{
		$this->setAttribute( "required");
	}
}