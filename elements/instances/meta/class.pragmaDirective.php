<?php
	require_once( __DIR__ . "/class.meta.php" );
	require_once( __DIR__ . "/../class.head.php" );
	
	class PragmaDirective extends Meta
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Head; //|| $parent instanceof NoScript;
		}
		
		public function setDefaultStyle( $defaultStyle )
		{
			$this->setHTTPEquiv( "default-style" );
			$this->setContent( $defaultStyle );
		}
		
		public function setRefresh( $refreshTime )
		{
			//Make sure refresh time is a positive integer
			$regex = "/^[0-9]+$/";
			if ( preg_match( $regex, $refreshTime ) !== 1 )
			{
				$message = "\$refreshTime must be a positive integer";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setHTTPEquiv( "refresh" );
			$this->setContent( $refreshTime );
		}
		
		public function setRedirect( $redirectTime, $redirectURL )
		{
			//Make sure redirect time is a positive integer
			$regex = "/^[0-9]+$/";
			if ( preg_match( $regex, $redirectTime ) !== 1 )
			{
				$message = "\$refreshTime must be a positive integer";
				throw new InvalidArgumentException( $message );
			}
			
			$content = "$redirectTime;url=$redirectURL";
			$this->setHttpEquiv( "refresh" );
			$this->setContent( $content );
		}
	}
?>