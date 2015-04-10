<?php
	require_once( __DIR__ . "/class.htmlRoot.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class Body extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "body" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::SECTIONING_ROOT
			);
		}
		
		protected function isAllowedChild( \IHTMLElement $child )
		{
			return $child->hasContentCategory( ContentCategory::FLOW );
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent instanceof HTMLRoot;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		public function setOnBeforePrint( $function )
		{
			$this->setAttribute( "onbeforeprint", $function );
		}
		
		public function setOnAfterPrint( $function )
		{
			$this->setAttribute( "onafterprint", $function );
		}
		
		public function setOnBeforeUnload( $function )
		{
			$this->setAttribute( "onbeforeunload", $function );
		}
		
		public function setOnBlur( $function )
		{
			$this->setAttribute( "onblur", $function );
		}
		
		public function setOnError( $function )
		{
			$this->setAttribute( "onerror", $function );
		}
		
		public function setOnFocus( $function )
		{
			$this->setAttribute( "onfocus", $function );
		}
		
		public function setOnHasChange( $function )
		{
			$this->setAttribute( "onhaschange", $function );
		}
		
		public function setOnLoad( $function )
		{
			$this->setAttribute( "onload", $function );
		}
		
		public function setOnMessage( $function )
		{
			$this->setAttribute( "onmessage", $function );
		}
		
		public function setOnOffline( $function )
		{
			$this->setAttribute( "onoffline", $function );
		}
		
		public function setOnOnline( $function )
		{
			$this->setAttribute( "ononline", $function );
		}
		
		public function setOnPopState( $function )
		{
			$this->setAttribute( "onpopstate", $function );
		}
		
		public function setOnRedo( $function )
		{
			$this->setAttribute( "onredo", $function );
		}
		
		public function setOnResize( $function )
		{
			$this->setAttribute( "onresize", $function );
		}
		
		public function setOnStorage( $function )
		{
			$this->setAttribute( "onstorage", $function );
		}
		
		public function setOnUndo( $function )
		{
			$this->setAttribute( "onundo", $function );
		}
		
		public function setOnUnload( $function )
		{
			$this->setAttribute( "onunload", $function );
		}
	}
?>