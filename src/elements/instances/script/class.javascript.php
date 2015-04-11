<?php
	require_once( __DIR__ . "/class.script.php" );
	
	class Javascript extends Script
	{
		public function __construct( $src=null )
		{
			parent::__construct();
			
			$this->setType( "text/javascript" );
			
			if ( isset( $src ) )
			{
				$this->setSrc( $src );
			}
		}
	}
?>