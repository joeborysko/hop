<?php
	require_once( __DIR__ . "/class.labelledRadio.php" );
	require_once( __DIR__ . "/../elements/instances/class.div.php" );
	require_once( __DIR__ . "/../elements/instances/class.label.php" );
	require_once( __DIR__ . "/../elements/instances/class.textElement.php" );
	
	class RadioGroup extends Div
	{
		private $_groupName;
		
		private $_label;
		public function &getLabel() { return $this->_label; }
		
		private $_radioContainer;
		public function &getRadioContainer() { return $this->_radioContainer; }
		
		private $_labelledRadios;
		
		public function __construct( $groupName, $labelText=null )
		{
			parent::__construct();
			$this->_groupName = $groupName;
			$this->_labelledRadios = array();
			
			$this->addClass( "radioGroup" );
			
			$this->_radioContainer = new Div();
			$this->_radioContainer->addClass( "radioContainer" );
			
			if ( $labelText !== null )
			{
				$this->_label = new Label();
				$this->_label->addClass( "radioGroupLabel" );
				$labelTextElement = new TextElement( $labelText );
				$this->_label->addChild( $labelTextElement );
				$this->addChild( $this->_label );
			}
			
			$this->addChild( $this->_radioContainer );
		}
		
		public function addLabelledRadio( $labelText, $radioValue, $idRadio )
		{
			$labelledRadio = new LabelledRadio( $labelText, $radioValue,
				$this->_groupName, $idRadio );			
			$this->_labelledRadios[] = $labelledRadio;
			$this->_radioContainer->addChild( $labelledRadio );
		}
		
		public function &getLabelledRadio( $index )
		{
			if ( $index < 0 ||$index >= sizeof( $this->_labelledRadios ) )
			{
				null;
			}
			
			return $this->_labelledRadios[ $index ];
		}
		
		public function setCheckedRadio( $index )
		{
			$this->_labelledRadios[ $index ]->getRadioButton()->check();
		}
	}
?>