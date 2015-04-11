<?php
require_once( __DIR__ . "/class.menuState.php" );
require_once( __DIR__ . "/class.menuItem.php" );
require_once( __DIR__ . "/../class.hr.php" );
require_once( __DIR__ . "/../class.template.php" );
require_once( __DIR__ . "/../script/class.script.php" );
require_once( __DIR__ . "/../../enum.contentCategory.php" );
require_once( __DIR__ . "/../../interface.iHTMLElement.php" );

class MenuStatePopup extends MenuState
{
	public function getContentCategories()
	{
		return array( ContentCategory::FLOW );
	}
	
	public function isAllowedChild(IHTMLElement $child )
	{
		return
			$child instanceof Menu ||
			$child instanceof MenuItem ||
			$child instanceof HR ||
			$child instanceof Script ||
			$child instanceof Template;
	}
	
	protected function changeState( $type )
	{
		if ( $type === Menu::MENU_TYPE_TOOLBAR )
		{
			$this->_menu->setToolbarState();
		}
	}
}