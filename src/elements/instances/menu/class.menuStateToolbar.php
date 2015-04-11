<?php
require_once( __DIR__ . "/class.menuState.php" );
require_once( __DIR__ . "/../class.li.php" );
require_once( __DIR__ . "/../class.template.php" );
require_once( __DIR__ . "/../script/class.script.php" );
require_once( __DIR__ . "/../../enum.contentCategory.php" );
require_once( __DIR__ . "/../../interface.iHTMLElement.php" );

class MenuStatePopup extends MenuState
{
	public function getContentCategories()
	{
		return array
		(
			ContentCategory::FLOW,
			ContentCategory::PALPABLE
		);
	}
	
	public function isAllowedChild(IHTMLElement $child )
	{
		return
			$child->hasContentCategory( ContentCategory::FLOW ) ||
			$child instanceof LI ||
			$child instanceof Script ||
			$child instanceof Template;
	}
	
	protected function changeState( $type )
	{
		if ( $type === Menu::MENU_TYPE_POPUP )
		{
			$this->_menu->setPopupState();
		}
	}
}