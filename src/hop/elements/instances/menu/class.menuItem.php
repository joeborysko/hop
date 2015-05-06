<?php
	require_once( __DIR__ . "/class.menu.php" );
	require_once( __DIR__ . "/../../class.emptyElement.php" );
	
	class MenuItem extends EmptyElement
	{
		const MENU_ITEM_TYPE_COMMAND	= "command";
		const MENU_ITEM_TYPE_CHECKBOX	= "checkbox";
		const MENU_ITEM_TYPE_RADIO		= "radio";
		
		public function __construct()
		{
			parent::__construct( "menuitem" );
		}
		
		protected function getContentCategories()
		{
			return array();
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Menu;
		}
		
		public function setCheckedYes()
		{
			$this->setAttribute( "checked" );
		}
		
		public function setCommand( $idCommand )
		{
			// May not be used within a menu item that also includes the
			// attributes checked, disabled, icon, label, radiogroup or type
			if
			(
				$this->hasAttribute( "checked" ) ||
				$this->hasAttribute( "disabled" ) ||
				$this->hasAttribute( "icon" ) ||
				$this->hasAttribute( "label" ) ||
				$this->hasAttribute( "radiogroup" ) ||
				$this->hasAttribute( "type" )
			)
			{
				$message = "The command attribute for a <menuitem> may not " .
					"be set if one of the following attributes is also set: " .
					"checked, disabled, icon, label, radiogroup, type";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "command", $idCommand );
		}
		
		public function setDefaultYes()
		{
			$this->setAttribute( "default" );
		}
		
		public function setDisabledYes()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setIcon( $imageURL )
		{
			$this->setAttribute( "icon", $imageURL );
		}
		
		public function setLabel( $label )
		{
			$this->setAttribute( "label", $label );
		}
		
		public function setRadioGroup( $radioGroup )
		{
			//May only be used if the 'type' attribute is set to 'radio'
			$type = strtolower( $this->getAttributeValue( "type" ) );
			if ( ! isset( $type ) || $type !== "radio" )
			{
				$message = "The 'radiogroup' attribute of a <menuitem> can " .
					"only be set if its 'type' attribute is set to 'radio'";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "radiogroup", $radioGroup );
		}
		
		public function setType( $type )
		{
			//Make sure the type is an allowed value
			$this->setType( $type );
		}
	}
?>