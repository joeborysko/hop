<?php
	require_once( __DIR__ . "/class.head.php" );
	require_once( __DIR__ . "/class.body.php" );
	require_once( __DIR__ . "/../interface.iHTMLElement.php" );
	
	class HTMLRoot implements IHTMLElement
	{
		protected $_head;
		public function getHead() { return $this->_head; }
		public function setHead( Head $head )
		{
			$this->_head = $head;
		}
		
		protected $_body;
		public function getBody() { return $this->_body; }
		public function setBody( Body $body )
		{
			$this->_body = $body;
		}
		
		protected $_manifest;
		public function setManifest( $manifest )
		{
			$this->_manifest = $manifest;
		}
		
		public function __construct()
		{
		}
		
		public function hasContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return false;
		}		
		
		public function addChild( IHTMLElement $child )
		{
			$message = "You cannot use HTMLRoot's addChild function " .
				"directly. Use getHead(), getBody(), setHead(), setBody().";
			throw new BadFunctionCallException( $message );
		}
		
		public function getHTML()
		{
			if ( ! isset( $this->_head ) || ! isset( $this->_body ) )
			{
				$message = "HTMLRoot's head and body must be set before " .
					"calling getHTML()";
				throw new LogicException( $message );
			}
			
			$doctypeDeclaration = "<!DOCTYPE html>";
			$openTag = "<html";
			if ( ! empty( $this->_manifest ) )
			{
				$openTag .= " manifest=$this->_manifest";
			}
			$openTag .= ">";
			
			return $doctypeDeclaration . $openTag . $this->_head->getHTML() .
				$this->_body->getHTML() . "</html>";
		}
	}
?>