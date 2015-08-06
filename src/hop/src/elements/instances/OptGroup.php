<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * In a Web form, the HTML <code><optgroup></code> element  creates a grouping
 * of options within a <code><select></code> element.
 */
class OptGroup extends HTMLElement
{
	/**
	 * @param label
	 * The value of the required label attribute.
	 */
	public function __construct( $label )
	{
		parent::__construct( "optgroup" );
		$this->setLabel( $label );
	}
	
	/**
	 * If this Boolean attribute is set, none of the items in this option group
	 * is selectable. Often browsers grey out such control and it won't receive
	 * any browsing events, like mouse clicks or focus-related ones.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * The name of the group of options, which the browser can use when
	 * labeling the options in the user interface. This attribute is mandatory
	 * if this element is used.
	 * @param label
	 */
	public function setLabel( $label )
	{
		$this->setAttribute( "label", $label );
	}
}