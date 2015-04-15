<?php
require_once( __DIR__ . "/class.menu.php" );

abstract class MenuState
{
	protected $_menu;
	
	public function __construct( Menu $menu )
	{
		$this->_menu = $menu;
	}
	
	public abstract function getContentCategories();
	public abstract function isAllowedChild();
	public function setType( $type )
	{
		$toLowerType = strtolower( $type );
		//Ensure that the type is valid
		if
		(
			!
			(
				$toLowerType === Menu::MENU_TYPE_POPUP ||
				$toLowerType === Menu::MENU_TYPE_TOOLBAR
			)
		)
		{
			$message = "The given type is not a valid menu type. See the " .
				"MENU_TYPE_* consts in the Menu class.";
			throw new InvalidArgumentException( $type );
		}
		
		$this->_menu->setAttribute( "type", $type );		
		$this->changeState( $type );
	}
	protected abstract function changeState( $type );
}