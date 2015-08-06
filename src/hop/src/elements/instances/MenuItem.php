<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><menuitem></code> element represents a command that a user
 * is able to invoke through a popup menu. This includes context menus, as well
 * as menus that might be attached to a menu button.</p><p>A command can either
 * be defined explicitly, with a textual label and optional icon to describe
 * its appearance, or alternatively as an indirect command whose behavior is
 * defined by a separate element. Commands can also optionally include a
 * checkbox or be grouped to share radio buttons. (Menu items for indirect
 * commands gain checkboxes or radio buttons when defined against elements
 * <code><input type="checkbox"></code> and <code><input
 * type="radio"></code>.)</p>
 */
class MenuItem extends HTMLElement
{
	const MENU_ITEM_TYPE_COMMAND = "command";
	const MENU_ITEM_TYPE_CHECKBOX = "checkbox";
	const MENU_ITEM_TYPE_RADIO = "radio";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "menuitem" );
	}
	
	/**
	 * Boolean attribute which indicates whether the command is selected. May
	 * only be used when the <code>type</code> attribute is
	 * <code>checkbox</code> or <code>radio</code>.
	 */
	public function setCheckedYes()
	{
		$this->setAttribute( "checked");
	}
	
	/**
	 * Specifies the ID of a separate element, indicating a command to be
	 * invoked indirectly. May not be used within a menu item that also
	 * includes the attributes <code>checked</code>, <code>disabled</code>,
	 * <code>icon</code>, <code>label</code>, <code>radiogroup</code> or
	 * <code>type</code>.
	 * @param command
	 */
	public function setCommand( $command )
	{
		$this->setAttribute( "command", $command );
	}
	
	/**
	 * This Boolean attribute indicates use of the same command as the menu's
	 * subject element (such as a <code>button</code> or <code>input</code>).
	 */
	public function setDefaultYes()
	{
		$this->setAttribute( "default");
	}
	
	/**
	 * Boolean attribute which indicates that the command is not available in
	 * the current state. Note that <code>disabled</code> is distinct from
	 * <code>hidden</code>; the <code>disabled</code> attribute is appropriate
	 * in any context where a change in circumstances might render the command
	 * relevant.
	 * @param disabled
	 */
	public function setDisabled( $disabled )
	{
		$this->setAttribute( "disabled", $disabled );
	}
	
	/**
	 * Image URL, used to provide a picture to represent the command.
	 * @param icon
	 */
	public function setIcon( $icon )
	{
		$this->setAttribute( "icon", $icon );
	}
	
	/**
	 * The name of the command as shown to the user. Required when a
	 * <code>command</code> attribute is not present.
	 * @param label
	 */
	public function setLabel( $label )
	{
		$this->setAttribute( "label", $label );
	}
	
	/**
	 * This attribute specifies the name of a group of commands to be toggled
	 * as radio buttons when selected. May only be used where the
	 * <code>type</code> attribute is <code>radio</code>.
	 * @param radioGroup
	 */
	public function setRadioGroup( $radioGroup )
	{
		$this->setAttribute( "radiogroup", $radioGroup );
	}
	
	/**
	 * This attribute indicates the kind of command, and can be one of three
	 * values.  <ul>   <li><code>command</code>: A regular command with an
	 * associated action. This is the missing value default.</li>  
	 * <li><code>checkbox</code>: Represents a command that can be toggled
	 * between two different states.</li>   <li><code>radio</code>: Represent
	 * one selection from a group of commands that can be toggled as radio
	 * buttons.</li></ul>See the MENU_ITEM_TYPE_* constants in this file.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
}