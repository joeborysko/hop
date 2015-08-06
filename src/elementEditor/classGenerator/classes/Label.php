<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Label Element (<label>) represents a caption for an item in a user
 * interface. It can be associated with a control either by placing the control
 * element inside the <code>label</code> element, or by using the <code
 * style="font-size: 14.44444465637207px;">for</code> attribute. Such a
 * control is called the labeled control of the label element.
 */
class Label extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "label" );
	}
	
	/**
	 * A shortcut key to access this element from the keyboard.
	 * @param accessKey
	 */
	public function setAccessKey( $accessKey )
	{
		$this->setAttribute( "accesskey", $accessKey );
	}
	
	/**
	 * The ID of a labelable form-related element in the same document as the
	 * label element. The first such element in the document with an ID
	 * matching the value of the <code>for</code> attribute is the labeled
	 * control for this label element. Note: A label element can have both a
	 * <code>for</code> attribute and a contained control element, as long as
	 * the <code>for</code> attribute points to the contained control element.
	 * @param for
	 */
	public function setFor( $for )
	{
		$this->setAttribute( "for", $for );
	}
	
	/**
	 * The form element that the label element is associated with (its form
	 * owner). The value of the attribute must be an ID of a
	 * <code><form></code> element in the same document. If this attribute is
	 * not specified, this <code><label></code> element must be a descendant of
	 * a <code><form></code> element. This attribute enables you to place label
	 * elements anywhere within a document, not just as descendants of their
	 * form elements.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
}