<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * In a Web form, the HTML <code><option></code> element is used to create a
 * control representing an item within a <code><select></code>, an
 * <code><optgroup></code> or a <code><datalist></code> HTML5 element.
 */
class Option extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "option" );
	}
	
	/**
	 * If this Boolean attribute is set, this option is not checkable. Often
	 * browsers grey out such control and it won't receive any browsing event,
	 * like mouse clicks or focus-related ones. If this attribute is not set,
	 * the element can still be disabled if one its ancestors is a disabled
	 * <code><optgroup></code> element.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * This attribute is text for the label indicating the meaning of the
	 * option. If the <code>label</code> attribute isn't defined, its value is
	 * that of the element text content. Usage note: the <code>label</code>
	 * attribute is designed to contain a short label typically used in a
	 * hierarchical menu. The <code>value</code> attribute describes a longer
	 * label designed to be used near a radio button, for example.
	 * @param label
	 */
	public function setLabel( $label )
	{
		$this->setAttribute( "label", $label );
	}
	
	/**
	 * If present, this Boolean attribute indicates that the option is
	 * initially selected. If the <code><option></code> element is the
	 * descendant of a<code><select></code> element whose <code>multiple</code>
	 * attribute is not set, only one single <code><option></code> of this
	 * <code><select></code> element may have the selected attribute.
	 */
	public function setSelectedYes()
	{
		$this->setAttribute( "selected");
	}
	
	/**
	 * The content of this attribute represents the value to be submitted with
	 * the form, should this option be selected. If this attribute is omitted,
	 * the value is taken from the text content of the option element.
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
}