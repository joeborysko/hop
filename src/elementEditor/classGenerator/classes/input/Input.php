<?php

namespace hop\elements\instances\input;

require_once __DIR__ . "/../../EmptyElement.php";

/**
 * The HTML <code><input></code> element is used to create interactive controls
 * for web-based forms in order to accept data from the user. The semantics of
 * an <code><input></code> varies considerably depending on the value of its
 * <code>type</code> attribute.
 */
class Input extends EmptyElement
{
	const INPUT_TYPE_BUTTON = "button";
	const INPUT_TYPE_CHECKBOX = "checkbox";
	const INPUT_TYPE_COLOR = "color";
	const INPUT_TYPE_DATE = "date";
	const INPUT_TYPE_DATETIME = "datetime";
	const INPUT_TYPE_DATETIME_LOCALE = "datetime-local";
	const INPUT_TYPE_EMAIL = "email";
	const INPUT_TYPE_FILE = "file";
	const INPUT_TYPE_HIDDEN = "hidden";
	const INPUT_TYPE_IMAGE = "image";
	const INPUT_TYPE_MONTH = "month";
	const INPUT_TYPE_NUMBER = "number";
	const INPUT_TYPE_PASSWORD = "qpassword";
	const INPUT_TYPE_RANGE = "radio";
	const INPUT_TYPE_RANGE = "range";
	const INPUT_TYPE_RESET = "reset";
	const INPUT_TYPE_SEARCH = "search";
	const INPUT_TYPE_SUBMIT = "submit";
	const INPUT_TYPE_TEL = "tel";
	const INPUT_TYPE_TEXT = "text";
	const INPUT_TYPE_TIME = "time";
	const INPUT_TYPE_URL = "url";
	const INPUT_TYPE_WEEK = "week";
	const FORM_ENCODE_TYPE_FORM_URL_ENCODED = "application/x-www-form-urlencoded";
	const FORM_ENCODE_TYPE_FORM_DATA = "multipart/form-data";
	const FORM_ENCODE_TYPE_TEXT = "text/plain";
	const FORM_METHOD_GET = "get";
	const FORM_METHOD_POST = "post";
	const INPUT_MODE_VERBATIM = "verbatim";
	const INPUT_MODE_LATIN = "latin";
	const INPUT_MODE_LATIN_NAME = "latin-name";
	const INPUT_MODE_PROSE = "latin-prose";
	const INPUT_MODE_FULL_WIDTH_LATIN = "full-width-latin";
	const INPUT_MODE_KANA = "kana";
	const INPUT_MODE_KATAKANA = "katakana";
	const INPUT_MODE_NUMERIC = "numeric";
	const INPUT_MODE_TEL = "tel";
	const INPUT_MODE_EMAIL = "email";
	const INPUT_MODE_URL = "url";
	const SELECTION_DIRECTION_FORWARD = "forward";
	const SELECTION_DIRECTION_BACKWARD = "backward";
	const SELECTION_DIRECTION_UNKNOWN = "none";
	const SPELLCHECK_TRUE = "true";
	const SPELLCHECK_FALSE = "false";
	const SPELLCHECK_DEFAULT = "default";
	
	/**
	 * @param type
	 */
	public function __construct( $type )
	{
		parent::__construct( "input" );
		$this->setType( $type );
	}
	
	/**
	 * <code>type</code> The type of control to display. The default type is
	 * text, if this attribute is not specified. Possible values are: <ul> 
	 * <li><code>button</code>: A push button with no default behavior.</li> 
	 * <li><code>checkbox</code>: A check box. You must use the value attribute
	 * to define the value submitted by this item. Use the checked attribute to
	 * indicate whether this item is selected. You can also use the
	 * indeterminate attribute to indicate that the checkbox is in an
	 * indeterminate state (on most platforms, this draws a horizontal line
	 * across the checkbox).</li>  <li><code>color</code>: HTML5 A control for
	 * specifying a color. A color picker's UI has no required features other
	 * than accepting simple colors as text (more info).</li> 
	 * <li><code>date</code>: HTML5 A control for entering a date (year, month,
	 * and day, with no time).</li>  <li><code>datetime</code>: HTML5 A control
	 * for entering a date and time (hour, minute, second, and fraction of a
	 * second) based on UTC time zone.</li>  <li><code>datetime-local</code>:
	 * HTML5 A control for entering a date and time, with no time zone.</li> 
	 * <li><code>email</code>: HTML5 A field for editing an e-mail address. The
	 * input value is validated to contain either the empty string or a single
	 * valid e-mail address before submitting. The <code>:valid</code> and
	 * <code>:invalid</code> CSS pseudo-classes are applied as
	 * appropriate.</li>  <li><code>file</code>: A control that lets the user
	 * select a file. Use the accept attribute to define the types of files
	 * that the control can select.</li>  <li><code>hidden</code>: A control
	 * that is not displayed, but whose value is submitted to the server.</li> 
	 * <li><code>image</code>: A graphical submit button. You must use the src
	 * attribute to define the source of the image and the alt attribute to
	 * define alternative text. You can use the height and width attributes to
	 * define the size of the image in pixels.</li>  <li><code>month</code>:
	 * HTML5 A control for entering a month and year, with no time zone.</li> 
	 * <li><code>number</code>: HTML5 A control for entering a floating point
	 * number.</li>  <li><code>password</code>: A single-line text field whose
	 * value is obscured. Use the maxlength attribute to specify the maximum
	 * length of the value that can be entered.</li>  <li><code>radio</code>: A
	 * radio button. You must use the value attribute to define the value
	 * submitted by this item. Use the checked attribute to indicate whether
	 * this item is selected by default. Radio buttons that have the same value
	 * for the name attribute are in the same "radio button group"; only one
	 * radio button in a group can be selected at one time.</li> 
	 * <li><code>range</code>: HTML5 A control for entering a number whose
	 * exact value is not important. This type control uses the following
	 * default values if the corresponding attributes are not specified:   <ul>
	 *    <li><code>min</code>: 0</li>    <li><code>max</code>: 100</li>   
	 * <li><code>value</code>: <code>min</code> +
	 * (<code>max</code>-<code>min</code>)/2, or <code>min</code> if
	 * <code>max</code> is less than <code>min</code></li>   
	 * <li><code>step</code>: 1</li>   </ul>  </li>  <li><code>reset</code>: A
	 * button that resets the contents of the form to default values.</li> 
	 * <li><code>search</code>: HTML5 A single-line text field for entering
	 * search strings; line-breaks are automatically removed from the input
	 * value.</li>  <li><code>submit</code>: A button that submits the
	 * form.</li>  <li><code>tel</code>: HTML5 A control for entering a
	 * telephone number; line-breaks are automatically removed from the input
	 * value, but no other syntax is enforced. You can use attributes such as
	 * pattern and maxlength to restrict values entered in the control. The
	 * <code>:valid</code> and <code>:invalid</code> CSS pseudo-classes are
	 * applied as appropriate.</li>  <li><code>text</code>: A single-line text
	 * field; line-breaks are automatically removed from the input value.</li> 
	 * <li><code>time</code>: HTML5 A control for entering a time value with no
	 * time zone.</li>  <li><code>url</code>: HTML5 A field for editing a URL.
	 * The input value is validated to contain either the empty string or a
	 * valid absolute URL before submitting. Line-breaks and leading or
	 * trailing whitespace are automatically removed from the input value. You
	 * can use attributes such as pattern and maxlength to restrict values
	 * entered in the control. The <code>:valid</code> and
	 * <code>:invalid</code> CSS pseudo-classes are applied as
	 * appropriate.</li>  <li><code>week</code>: HTML5 A control for entering a
	 * date consisting of a week-year number and a week number with no time
	 * zone.</li></ul>See the INPUT_TYPE_* constants in this file.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * If the value of the type attribute is <code>file</code>, this attribute
	 * indicates the types of files that the server accepts; otherwise it is
	 * ignored. The value must be a comma-separated list of unique content type
	 * specifiers: <ul>  <li>A file extension starting with the STOP character
	 * (U+002E). (E.g.: ".jpg,.png,.doc")</li>  <li>A valid MIME type with no
	 * extensions</li>  <li><code>audio/*</code> representing sound files
	 * HTML5</li>  <li><code>video/*</code> representing video files HTML5</li>
	 *  <li><code>image/*</code> representing image files HTML5</li></ul>
	 * @param accept
	 */
	public function setAccept( $accept )
	{
		$this->setAttribute( "accept", $accept );
	}
	
	/**
	 * This attribute indicates whether the value of the control can be
	 * automatically completed by the browser. This attribute is ignored if the
	 * value of the type attribute is <code>hidden,
	 * password,</code> <code>checkbox</code>, <code>radio</code>,
	 * <code>file</code>, or a button type (<code>button</code>,
	 * <code>submit</code>, <code>reset</code>, <code>image</code>). Possible
	 * values are: <ul>  <li><code>off</code>: The user must explicitly enter a
	 * value into this field for every use, or the document provides its own
	 * auto-completion method; the browser does not automatically complete the
	 * entry.</li>  <li><code>on</code>: The browser can automatically complete
	 * the value based on values that the user has entered during previous
	 * uses.</li> </ul> <p>If the autocomplete attribute is not specified on an
	 * input element, then the browser uses the autocomplete attribute value of
	 * the <code><input></code> element's form owner. The form owner is either
	 * the <code>form</code> element that this <code><input></code> element is
	 * a descendant of or the form element whose id is specified by the form
	 * attribute of the input element. For more information, see the
	 * <code></code> attribute in <code><form></code>.</p> <p>The autocomplete
	 * attribute also controls whether Firefox will, unlike other browsers,
	 * persist the dynamic disabled state and (if applicable) dynamic
	 * checkedness of an <code><input></code> across page loads. The
	 * persistence feature is enabled by default. Setting the value of the
	 * autocomplete attribute to <code>off</code> disables this feature; this
	 * works even when the autocomplete attribute would normally not apply to
	 * the <code><input></code> by virtue of its type. See bug 654072.</p>
	 * @param autocomplete
	 */
	public function setAutocomplete( $autocomplete )
	{
		$this->setAttribute( "autocomplete", $autocomplete );
	}
	
	/**
	 * This Boolean attribute lets you specify that a form control should have
	 * input focus when the page loads, unless the user overrides it, for
	 * example by typing in a different control. Only one form element in a
	 * document can have the autofocus attribute, which is a Boolean. It cannot
	 * be applied if the type attribute is set to <code>hidden</code> (that is,
	 * you cannot automatically set focus to a hidden control).
	 */
	public function setAutoFocusYes()
	{
		$this->setAttribute( "autofocus");
	}
	
	/**
	 * This attribute should be defined as a unique value. If the value of the
	 * type attribute is <code>search</code>, previous search term values will
	 * persist in the dropdown across page load.
	 * @param autoSave
	 */
	public function setAutoSave( $autoSave )
	{
		$this->setAttribute( "autosave", $autoSave );
	}
	
	/**
	 * <p>When the value of the type attribute is <code>radio</code> or
	 * <code>checkbox</code>, the presence of this Boolean attribute indicates
	 * that the control is selected by default; otherwise it is ignored.</p>
	 * <p>Firefox will, unlike other browsers, by default, persist the dynamic
	 * checked state of an <code><input></code> across page loads. Use the
	 * <code></code> attribute to control this feature.</p>
	 * @param checked
	 */
	public function setChecked( $checked )
	{
		$this->setAttribute( "checked", $checked );
	}
	
	/**
	 * <p>This Boolean attribute indicates that the form control is not
	 * available for interaction. In particular, the <code>click</code> event
	 * will not be dispatched on disabled controls. Also, a disabled control's
	 * value isn't submitted with the form.</p> <p>Firefox will, unlike other
	 * browsers, by default, persist the dynamic disabled state of an
	 * <code><input></code> across page loads. Use the <code></code> attribute
	 * to control this feature.</p>
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * The form element that the input element is associated with (its form
	 * owner). The value of the attribute must be an id of a
	 * <code><form></code> element in the same document. If this attribute is
	 * not specified, this <code><input></code> element must be a descendant of
	 * a <code><form></code> element. This attribute enables you to place
	 * <code><input></code> elements anywhere within a document, not just as
	 * descendants of their form elements. An input can only be associated with
	 * one form.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The URI of a program that processes the information submitted by the
	 * input element, if it is a submit button or image. If specified, it
	 * overrides the <code></code> attribute of the element's form owner.
	 * @param formAction
	 */
	public function setFormAction( $formAction )
	{
		$this->setAttribute( "formaction", $formAction );
	}
	
	/**
	 * If the input element is a submit button or image, this attribute
	 * specifies the type of content that is used to submit the form to the
	 * server. Possible values are: <ul> 
	 * <li><code>application/x-www-form-urlencoded</code>: The default value if
	 * the attribute is not specified.</li> 
	 * <li><code>multipart/form-data</code>: Use this value if you are using an
	 * <code><input></code> element with the <code></code> attribute set to
	 * <code>file</code>.</li>  <li><code>text/plain</code></li> </ul> <p>If
	 * this attribute is specified, it overrides the <code></code> attribute of
	 * the element's form owner.</p>See the FORM_ENCODE_TYPE_* constants in
	 * this file.
	 * @param formEncType
	 */
	public function setFormEncType( $formEncType )
	{
		$this->setAttribute( "formenctype", $formEncType );
	}
	
	/**
	 * If the input element is a submit button or image, this attribute
	 * specifies the HTTP method that the browser uses to submit the form.
	 * Possible values are: <ul>  <li><code>post</code>: The data from the form
	 * is included in the body of the form and is sent to the server.</li> 
	 * <li><code>get</code>: The data from the form are appended to the form
	 * attribute URI, with a '?' as a separator, and the resulting URI is sent
	 * to the server. Use this method when the form has no side-effects and
	 * contains only ASCII characters.</li> </ul> <p>If specified, this
	 * attribute overrides the <code></code> attribute of the element's form
	 * owner.</p>See the FORM_METHOD_* constants in this file.
	 * @param formMethod
	 */
	public function setFormMethod( $formMethod )
	{
		$this->setAttribute( "formmethod", $formMethod );
	}
	
	/**
	 * If the input element is a submit button or image, this Boolean attribute
	 * specifies that the form is not to be validated when it is submitted. If
	 * this attribute is specified, it overrides the <code></code> attribute of
	 * the element's form owner.
	 */
	public function setFormNoValidateYes()
	{
		$this->setAttribute( "formnovalidate");
	}
	
	/**
	 * If the input element is a submit button or image, this attribute is a
	 * name or keyword indicating where to display the response that is
	 * received after submitting the form. This is a name of, or keyword for, a
	 * browsing context (for example, tab, window, or inline frame). If this
	 * attribute is specified, it overrides the <code></code> attribute of the
	 * elements's form owner. The following keywords have special meanings:
	 * <ul>  <li>_<code>self</code>: Load the response into the same browsing
	 * context as the current one. This value is the default if the attribute
	 * is not specified.</li>  <li><code>_blank</code>: Load the response into
	 * a new unnamed browsing context.</li>  <li><code>_parent</code>: Load the
	 * response into the parent browsing context of the current one. If there
	 * is no parent, this option behaves the same way as
	 * <code>_self</code>.</li>  <li><code>_top</code>: Load the response into
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
	 * If the value of the type attribute is <code>image</code>, this attribute
	 * defines the height of the image displayed for the button.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * A hint to the browser for which keyboard to display. This attribute
	 * applies when the value of the type attribute is text, password, email,
	 * or url. Possible values are: <ul>  <li><code>verbatim</code>:
	 * Alphanumeric, non-prose content such as usernames and passwords.</li> 
	 * <li><code>latin</code>: Latin-script input in the user's preferred
	 * language with typing aids such as text prediction enabled. For
	 * human-to-computer communication such as search boxes.</li> 
	 * <li><code>latin-name</code>: As latin, but for human names.</li> 
	 * <li><code>latin-prose</code>: As latin, but with more aggressive typing
	 * aids. For human-to-human communication such as instant messaging or
	 * email.</li>  <li><code>full-width-latin</code>: As latin-prose, but for
	 * the user's secondary languages.</li>  <li><code>kana</code>: Kana or
	 * romaji input, typically hiragana input, using full-width characters,
	 * with support for converting to kanji. Intended for Japanese text
	 * input.</li>  <li><code>katakana</code>: Katakana input, using full-width
	 * characters, with support for converting to kanji. Intended for Japanese
	 * text input.</li>  <li><code>numeric</code>: Numeric input, including
	 * keys for the digits 0 to 9, the user's preferred thousands separator
	 * character, and the character for indicating negative numbers. Intended
	 * for numeric codes, e.g. credit card numbers. For actual numbers, prefer
	 * using <input type="number"></li>  <li><code>tel</code>: Telephone input,
	 * including asterisk and pound key. Use <input type="tel"> if possible
	 * instead.</li>  <li><code>email</code>: Email input. Use <input
	 * type="email"> if possible instead.</li>  <li><code>url</code>: URL
	 * input. Use <input type="url"> if possible instead.</li></ul>See the
	 * INPUT_MODE_* constants in this file.
	 * @param inputMode
	 */
	public function setInputMode( $inputMode )
	{
		$this->setAttribute( "inputmode", $inputMode );
	}
	
	/**
	 * Identifies a list of pre-defined options to suggest to the user. The
	 * value must be the id of a <code><datalist></code> element in the same
	 * document. The browser displays only options that are valid values for
	 * this input element. This attribute is ignored when the type attribute's
	 * value is <code>hidden</code>, <code>checkbox</code>, <code>radio</code>,
	 * <code>file</code>, or a button type.
	 * @param list
	 */
	public function setList( $list )
	{
		$this->setAttribute( "list", $list );
	}
	
	/**
	 * The maximum (numeric or date-time) value for this item, which must not
	 * be less than its minimum (min attribute) value.
	 * @param max
	 */
	public function setMax( $max )
	{
		$this->setAttribute( "max", $max );
	}
	
	/**
	 * If the value of the type attribute is <code>text</code>,
	 * <code>email</code>,<code> search</code>, <code>password</code>,
	 * <code>tel</code>, or <code>url</code>, this attribute specifies the
	 * maximum number of characters (in Unicode code points) that the user can
	 * enter; for other control types, it is ignored. It can exceed the value
	 * of the size attribute. If it is not specified, the user can enter an
	 * unlimited number of characters. Specifying a negative number results in
	 * the default behavior; that is, the user can enter an unlimited number of
	 * characters. The constraint is evaluated only when the value of the
	 * attribute has been changed.
	 * @param maxLength
	 */
	public function setMaxLength( $maxLength )
	{
		$this->setAttribute( "maxlength", $maxLength );
	}
	
	/**
	 * The minimum (numeric or date-time) value for this item, which must not
	 * be greater than its maximum (max attribute) value.
	 * @param min
	 */
	public function setMin( $min )
	{
		$this->setAttribute( "min", $min );
	}
	
	/**
	 * This Boolean attribute indicates whether the user can enter more than
	 * one value. This attribute applies when the type attribute is set to
	 * <code>email</code> or <code>file</code>; otherwise it is ignored.
	 * @param minLength
	 */
	public function setMinLength( $minLength )
	{
		$this->setAttribute( "minlength", $minLength );
	}
	
	/**
	 * The name of the control, which is submitted with the form data.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
	
	/**
	 * A regular expression that the control's value is checked against. The
	 * pattern must match the entire value, not just some subset. Use the title
	 * attribute to describe the pattern to help the user. This attribute
	 * applies when the value of the type attribute is <code>text</code>,
	 * <code>search</code>, <code>tel</code>, <code>url</code> or
	 * <code>email</code>; otherwise it is ignored. The regular expression
	 * language is the same as JavaScript's. The pattern is not surrounded by
	 * forward slashes.
	 * @param pattern
	 */
	public function setPattern( $pattern )
	{
		$this->setAttribute( "pattern", $pattern );
	}
	
	/**
	 * A hint to the user of what can be entered in the control . The
	 * placeholder text must not contain carriage returns or line-feeds. This
	 * attribute applies when the value of the type attribute is
	 * <code>text</code>, <code>search</code>, <code>tel</code>,
	 * <code>url</code> or <code>email</code>; otherwise it is ignored. Note:
	 * Do not use the <code>placeholder</code> attribute instead of a
	 * <code><label></code> element. Their purposes are different: the
	 * <code><label></code> attribute describes the role of the form element;
	 * that is, it indicates what kind of information is expected, the
	 * <code>placeholder</code> attribute is a hint about the format the
	 * content should take. There are cases in which the
	 * <code>placeholder</code> attribute is never displayed to the user, so
	 * the form must be understandable without it.
	 * @param placeholder
	 */
	public function setPlaceholder( $placeholder )
	{
		$this->setAttribute( "placeholder", $placeholder );
	}
	
	/**
	 * This Boolean attribute indicates that the user cannot modify the value
	 * of the control. It is ignored if the value of the type attribute is
	 * <code>hidden</code>, <code>range</code>, <code>color</code>,
	 * <code>checkbox</code>, <code>radio</code>, <code>file</code>, or a
	 * button type (such as <code>button</code> or <code>submit</code>).
	 */
	public function setReadOnlyYes()
	{
		$this->setAttribute( "readonly");
	}
	
	/**
	 * This attribute specifies that the user must fill in a value before
	 * submitting a form. It cannot be used when the type attribute is
	 * <code>hidden</code>, <code>image</code>, or a button type
	 * (<code>submit</code>, <code>reset</code>, or <code>button</code>). The
	 * <code>:optional</code> and <code>:required</code> CSS pseudo-classes
	 * will be applied to the field as appropriate.
	 * @param required
	 */
	public function setRequired( $required )
	{
		$this->setAttribute( "required", $required );
	}
	
	/**
	 * The direction in which selection occurred. This is "forward" if the
	 * selection was made from left-to-right in an LTR locale or right-to-left
	 * in an RTL locale, or "backward" if the selection was made in the
	 * opposite direction. This can be "none" if the selection direction is
	 * unknown. See the SELECTION_DIRECTION_* constants in this file.
	 * @param selectionDirection
	 */
	public function setSelectionDirection( $selectionDirection )
	{
		$this->setAttribute( "selectiondirection", $selectionDirection );
	}
	
	/**
	 * The initial size of the control. This value is in pixels unless the
	 * value of the type attribute is <code>text</code> or
	 * <code>password</code>, in which case, it is an integer number of
	 * characters. Starting in HTML5, this attribute applies only when the type
	 * attribute is set to <code>text</code>, <code>search</code>,
	 * <code>tel</code>, <code>url</code>, <code>email</code>, or
	 * <code>password</code>; otherwise it is ignored. In addition, the size
	 * must be greater than zero. If you don't specify a size, a default value
	 * of 20 is used.
	 * @param size
	 */
	public function setSize( $size )
	{
		$this->setAttribute( "size", $size );
	}
	
	/**
	 * Setting the value of this attribute to <code>true</code> indicates that
	 * the element needs to have its spelling and grammar checked. The value
	 * <code>default</code> indicates that the element is to act according to a
	 * default behavior, possibly based on the parent element's own
	 * <code>spellcheck</code> value. The value <code>false</code> indicates
	 * that the element should not be checked.See the SPELLCHECK_* constants in
	 * this file.
	 * @param spellcheck
	 */
	public function setSpellcheck( $spellcheck )
	{
		$this->setAttribute( "spellcheck", $spellcheck );
	}
	
	/**
	 * If the value of the type attribute is <code>image</code>, this attribute
	 * specifies a URI for the location of an image to display on the graphical
	 * submit button; otherwise it is ignored.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * Works with the min and max attributes to limit the increments at which a
	 * numeric or date-time value can be set. It can be the string
	 * <code>any</code> or a positive floating point number. If this attribute
	 * is not set to <code>any</code>, the control accepts only values at
	 * multiples of the step value greater than the minimum.
	 * @param step
	 */
	public function setStep( $step )
	{
		$this->setAttribute( "step", $step );
	}
	
	/**
	 * The position of the element in the tabbing navigation order for the
	 * current document.
	 * @param tabIndex
	 */
	public function setTabIndex( $tabIndex )
	{
		$this->setAttribute( "tabindex", $tabIndex );
	}
	
	/**
	 * The initial value of the control. This attribute is optional except when
	 * the value of the type attribute is <code>radio</code> or
	 * <code>checkbox</code>. Note that when reloading the page, Gecko and IE
	 * will ignore the value specified in the HTML source, if the value was
	 * changed before the reload.
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
	
	/**
	 * If the value of the type attribute is <code>image</code>, this attribute
	 * defines the width of the image displayed for the button.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
}