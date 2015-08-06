<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * The <code>command</code> element represents a command which the user can
 * invoke.
 */
class Command extends EmptyElement
{
	const COMMAND_TYPE_NORMAL = "command";
	const COMMAND_TYPE_CHECKBOX = "checkbox";
	const COMMAND_TYPE_RADIO = "radio";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "command" );
	}
	
	/**
	 * Indicates whether the command is selected. Must be omitted unless the
	 * <code>type</code> attribute is <code>checkbox </code>or
	 * <code>radio</code>.
	 */
	public function setCheckedYes()
	{
		$this->setAttribute( "checked");
	}
	
	/**
	 * Indicates that the command is not available.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * Gives a picture which represents the command.
	 * @param icon
	 */
	public function setIcon( $icon )
	{
		$this->setAttribute( "icon", $icon );
	}
	
	/**
	 * The name of the command as shown to the user.
	 * @param label
	 */
	public function setLabel( $label )
	{
		$this->setAttribute( "label", $label );
	}
	
	/**
	 * This attribute gives the name of the group of commands, with a
	 * <code>type</code> of <code>radio</code>, that will be toggled when the
	 * command itself is toggled. This attribute must be omitted unless the
	 * <code>type</code> attribute is <code>radio</code>.
	 * @param radioGroup
	 */
	public function setRadioGroup( $radioGroup )
	{
		$this->setAttribute( "radiogroup", $radioGroup );
	}
	
	/**
	 * This attribute indicates the kind of command. This can be one of three
	 * values.  <ul>   <li>    <p><code>command</code> or empty which is the
	 * default state and indicates that this is a normal command.</p>   </li>  
	 * <li>    <p><code>checkbox</code> indicates that the command can be
	 * toggled using a checkbox.</p>   </li>   <li>    <p><code>radio</code>
	 * indicates that the command can be toggled using a
	 * radiobutton.</p></li></ul>See the COMMAND_TYPE_* constants at the top of
	 * this file.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
}