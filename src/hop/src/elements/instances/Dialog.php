<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><dialog></code> element represents a dialog box or other
 * interactive component, such as an inspector or window. <code><form></code>
 * elements can be integrated within a dialog by specifying them with the
 * attribute <code>method="dialog"</code>. When such a form is submitted, the
 * dialog is closed with a <code>returnValue</code> attribute set to the
 * <code>value</code> of the submit button used.</p><p>The
 * <code>::backdrop</code> CSS pseudo-element can be used to style behind a
 * <code><dialog></code> element, for example to dim inaccessible content
 * whilst a modal dialog is active.</p>
 */
class Dialog extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "dialog" );
	}
	
	/**
	 * Indicates that the dialog is active and available for interaction. When
	 * the open attribute is not set, it shouldn't be shown to the user.
	 */
	public function setOpenYes()
	{
		$this->setAttribute( "open");
	}
}