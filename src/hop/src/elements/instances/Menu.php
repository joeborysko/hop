<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><menu></code> element represents a group of commands that
 * a user can perform or activate. This includes both list menus, which might
 * appear across the top of a screen, as well as context menus, such as those
 * that might appear underneath a button after it has been clicked.</p>Usage
 * note:  The <code><menu></code> and <code><ul></code> elements both represent
 * an unordered list of items. The key difference is that <code><ul></code>
 * primarily contains items for display, whilst <code><menu></code> is intended
 * for interactive items, to act on.<p class="note"></p>Note: This element was
 * deprecated in HTML4, but reintroduced in HTML5.1 (still working
 * draft).<p></p><p class="note"></p>Note: This documentation describes
 * current Firefox implementation. Type 'list' is likely to change to 'toolbar'
 * and 'context' to 'popup' according to HTML5.1 working draft.
 */
class Menu extends HTMLElement
{
	const MENU_TYPE_CONTEXT = "context";
	const MENU_TYPE_LIST = "list";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "menu" );
	}
	
	/**
	 * The name of the menu as shown to the user. Used within nested menus, to
	 * provide a label through which the submenu can be accessed. Must only be
	 * specified when the parent element is a <code><menu></code> in the
	 * context menu state.
	 * @param label
	 */
	public function setLabel( $label )
	{
		$this->setAttribute( "label", $label );
	}
	
	/**
	 * This attribute indicates the kind of menu being declared, and can be one
	 * of two values. <ul>  <li><code>context</code>: The context menu state,
	 * which represents a group of commands activated through another element.
	 * This might be through the <code>menu</code> attribute of a
	 * <code><button></code>, or an element with a <code>contextmenu</code>
	 * attribute. When nesting <code><menu></code> elements directly within one
	 * another, this is the missing value default if the parent is already in
	 * this state.</li>  <li><code>list</code>: The list menu state, which
	 * represents a series of commands for user interaction. This is the
	 * missing value default, except where the parent element is a
	 * <code><menu></code> in the context menu state.</li></ul>See the
	 * MENU_TYPE_* constants in this class.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
}