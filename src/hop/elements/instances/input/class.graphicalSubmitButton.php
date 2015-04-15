<?php
	require_once( __DIR__ . "/class.submitButton.php" );
	
	class GraphicalSubmitButton extends SubmitButton
	{
		public function __construct()
		{
			parent::__construct( InputType::IMAGE );
		}
		
		public function setSrc( $imageURI )
		{
			$this->setAttribute( "src", $imageURI );
		}
		
		public function setWidth( $width )
		{
			$this->setAttribute( "width", $width );
		}
		
		public function setHeight( $height )
		{
			$this->setAttribute( "height", $height );
		}
	}
?>