<?php
	require_once( __DIR__ . "/../elements/instances/class.div.php" );
	require_once( __DIR__ . "/../elements/instances/input/class.input.php" );
	require_once( __DIR__ . "/../elements/instances/class.label.php" );
	
	class LabelledInput extends Div
	{
		private $_label;
		public function getLabel() { return $this->_label; }
		
		private $_input;
		public function getInput() { return $this->_input; }
		
		public function __construct( $labelText, $inputType )
		{
			parent::__construct();
			
			$this->initSelf();
			$this->initLabel( $labelText );
			$this->initInput( $inputType );
		}
		
		private function initSelf()
		{
			$this->addClass( "labelledInput" );
		}
		
		private function initLabel( $labelText )
		{
			$this->_label = new Label();
			$this->_label->addClass( "inputLabel" );
			$this->_label->setText( $labelText );
			$this->addChild( $this->_label );
		}
		
		private function initInput( $inputType )
		{
			$this->_input = new Input( $inputType );
			$this->_input->addClass( "input" );
			$this->addChild( $this->_input );
		}
		
		/**
		 * Make this LabelledInput the first LabelledInput in the line.
		 */
		public function setFirstOfLine()
		{
			$this->addClass( "firstOfLine" );
		}
	}
?>