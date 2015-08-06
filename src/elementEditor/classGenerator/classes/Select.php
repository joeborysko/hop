<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML select (<code><select></code>) element represents a control that
 * presents a menu of options. The options within the menu are represented by
 * <code><code><option></code></code> elements, which can be grouped by
 * <code><code><optgroup></code></code> elements. Options can be pre-selected
 * for the user.
 */
class Select extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "select" );
	}
	
	/**
	 * This attribute lets you specify that a form control should have input
	 * focus when the page loads, unless the user overrides it, for example by
	 * typing in a different control. Only one form element in a document can
	 * have the <code>autofocus</code> attribute, which is a Boolean.
	 */
	public function setAutoFocusYes()
	{
		$this->setAttribute( "autofocus");
	}
	
	/**
	 * This Boolean attribute indicates that the user cannot interact with the
	 * control. If this attribute is not specified, the control inherits its
	 * setting from the containing element, for example <code>fieldset</code>;
	 * if there is no containing element with the <code>disabled</code>
	 * attribute set, then the control is enabled.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * The form element that the select element is associated with (its "form
	 * owner"). If this attribute is specified, its value must be the ID of a
	 * form element in the same document. This enables you to place select
	 * elements anywhere within a document, not just as descendants of their
	 * form elements.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * This Boolean attribute indicates that multiple options can be selected
	 * in the list. If it is not specified, then only one option can be
	 * selected at a time.
	 */
	public function setMultipleYes()
	{
		$this->setAttribute( "multiple");
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
	 * A Boolean attribute indicating that an option with a non-empty string
	 * value must be selected.
	 * @param required
	 */
	public function setRequired( $required )
	{
		$this->setAttribute( "required", $required );
	}
	
	/**
	 * If the control is presented as a scrolled list box, this attribute
	 * represents the number of rows in the list that should be visible at one
	 * time. Browsers are not required to present a select elements as a
	 * scrolled list box. The default value is 0.
	 * @param size
	 */
	public function setSize( $size )
	{
		$this->setAttribute( "size", $size );
	}
}