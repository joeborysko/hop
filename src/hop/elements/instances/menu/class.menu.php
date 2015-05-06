<?php
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	class Menu extends HTMLElement
	{
		const MENU_TYPE_TOOLBAR = "toolbar";
		const MENU_TYPE_POPUP = "popup";
		
		private $_activeMenuState;
		private $_popupState;
		private $_toolbarState;
		
		public function __construct()
		{
			parent::__construct( "menu" );
			
			$this->_popupState = new MenuStatePopup();
			$this->_toolbarState = new MenuStateToolbar();
			
			//TODO: Need to check if the parent is a menu or not in order
			//to set the default menu state
			$this->_activeMenuState = $this->_toolbarState;
		}
		
		protected function getContentCategories()
		{
			return $this->_activeMenuState->getContentCategories();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $this->_activeMenuState->isAllowedChild( $child );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setLabel( $label )
		{
			//TODO: Need to access the parent for validation purposes
			$this->setAttribute( "label", $label );
		}
		
		public function setType( $type )
		{
			$this->_activeMenuState->setType( $type );
		}
		
		public function setPopupState()
		{
			$this->_activeMenuState = $this->_popupState;
		}
		
		public function setToolbarState()
		{
			$this->_activeMenuState = $this->_toolbarState;
		}
	}
?>