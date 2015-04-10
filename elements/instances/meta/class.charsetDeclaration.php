<?php
	require_once( __DIR__ . "/class.meta.php" );
	
	class CharsetDeclaration extends Meta
	{
		public function __construct( $charset )
		{
			parent::__construct();
			
			$this->setCharset( $charset );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof Head;
		}
	}
?>