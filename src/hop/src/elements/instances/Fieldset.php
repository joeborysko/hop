<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><fieldset></code> element is used to group several controls
 * as well as labels (<code><label></code>) within a web form.
 */
class Fieldset extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "fieldset" );
	}
	
	/**
	 * If this Boolean attribute is set, the form controls that are its
	 * descendants, except descendants of its first optional
	 * <code><legend></code> element, are disabled, i.e., not editable. They
	 * won't receive any browsing events, like mouse clicks or focus-related
	 * ones. Often browsers display such controls as gray.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * This attribute has the value of the id attribute of the
	 * <code><form></code> element its related to. Its default value is the id
	 * of the nearest <code><form></code> element it is a descendant of.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The name associated with the group, which is submitted with the form
	 * data. The label for the field set is given by the first
	 * <code><legend></code> element that is a child of this field set.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
}