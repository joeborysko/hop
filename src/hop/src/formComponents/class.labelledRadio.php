<?php
	require_once( __DIR__ . "/../elements/instances/class.div.php" );
	require_once( __DIR__ . "/../elements/instances/class.label.php" );
	require_once( __DIR__ . "/../elements/instances/class.textElement.php" );
	require_once( __DIR__ . "/../elements/instances/input/class.radioButton.php" );
	
	class LabelledRadio extends Div
	{
		private $_label;
		public function &getLabel() { return $this->_label; }
		
		private $_radioButton;
		public function &getRadioButton() { return $this->_radioButton; }
		
		public function __construct( $labelText, $radioValue, $radioName,
			$idRadio )
		{
			parent::__construct();
			
			$this->addClass( "labelledRadio" );
			
			//Create the radio button
			$this->_radioButton = new RadioButton( $radioValue );
			$this->_radioButton->setID( $idRadio );
			$this->_radioButton->setName( $radioName );
			$this->addChild( $this->_radioButton );
			
			//Create the label
			$this->_label = new Label();
			$this->_label->addClass( "radioLabel" );
			$this->_label->setFor( $idRadio );
			$labelText = new TextElement( $labelText );
			$this->_label->addChild( $labelText );
			$this->addChild( $this->_label );
		}
	}
?>