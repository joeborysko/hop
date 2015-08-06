<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><output></code> element represents the result of a
 * calculation or user action.
 */
class Output extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "output" );
	}
	
	/**
	 * A list of IDs of other elements, indicating that those elements
	 * contributed input values to (or otherwise affected) the calculation.
	 * @param for
	 */
	public function setFor( $for )
	{
		$this->setAttribute( "for", $for );
	}
	
	/**
	 * The form element that this element is associated with (its "form
	 * owner"). The value of the attribute must be an ID of a form element in
	 * the same document. If this attribute is not specified, the output
	 * element must be a descendant of a form element. This attribute enables
	 * you to place output elements anywhere within a document, not just as
	 * descendants of their form elements.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The name of the element.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
}