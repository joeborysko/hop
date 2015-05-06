<?php
	require_once( __DIR__ . "/../class.emptyElement.php" );
	
	class Command extends EmptyElement
	{
		const COMMAND_TYPE_NORMAL	= "command";
		const COMMAND_TYPE_CHECKBOX	= "checkbox";
		const COMMAND_TYPE_RADIO	= "radio";
		
		public function __construct()
		{
			parent::__construct( "command" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::METADATA,
				ContentCategory::PHRASING
			);
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return
                $parent->acceptsContentCategory( ContentCategory::METADATA ) ||
                $parent->acceptsContentCategory( ContentCategory::PHRASING );
		}
        
        public function setCheckedYes()
        {
            //This attribute is only allowed when the type attribute is set to
            //"radio" or "checkbox"
            $typeAttribute = $this->getAttributeValue( "type" );
            
            if
            (
				! isset( $typeAttribute ) ||
				!
				(
					$typeAttribute === "checkbox" ||
					$typeAttribute === "radio"
				)
			)
			{
				$message = "The checked attribute can only be set if the " .
					"<command>'s type attribute is set to radio or checkbox.";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "checked" );
        }
		
		public function setDisabledYes()
		{
			$this->setAttribute( "disabled" );
		}
		
		public function setIcon( $iconURL )
		{
			$this->setAttribute( "icon", $iconURL );
		}
		
		public function setLabel( $label )
		{
			$this->setAttribute( "label", $label );
		}
		
		public function setRadioGroup( $radioGroup )
		{
			 //This attribute is only allowed when the type attribute is set to
            //"radio"
            $typeAttribute = $this->getAttributeValue( "type" );
            
            if
            (
				! isset( $typeAttribute ) ||
				$typeAttribute !== "radio"
			)
			{
				$message = "The radioGroup attribute can only be set if the " .
					"<command>'s type attribute is set to radio.";
				throw new LogicException( $message );
			}
			
			$this->setAttribute( "radiogroup", $radioGroup );
		}
		
		/**
		 * Set the type of this command.
		 * @param string $commandType
		 * See the COMMAND_TYPE_* consts in this class.
		 */
		public function setType( $commandType )
		{
			//Ensure that the command type is one of the allowed values
			if
			(
				!
				(
					$commandType === self::COMMAND_TYPE_CHECKBOX ||
					$commandType === self::COMMAND_TYPE_NORMAL ||
					$commandType === self::COMMAND_TYPE_RADIO
				)
			)
			{
				$message = "The given commandType is not valid. See the " .
					"COMMAND_TYPE_* consts in the Command class for valid " .
					"command types.";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "type", $commandType );
		}
	}
?>