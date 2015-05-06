<?php
	require_once( __DIR__ . "/../../class.emptyElement.php" );

	abstract class Meta extends EmptyElement
	{
		public function __construct()
		{
			parent::__construct( "meta" );
		}
		
		protected function getContentCategories()
		{
			return array
			(
				ContentCategory::METADATA
			);
		}
		
		protected function setCharset( $charset )
		{
			$this->setAttribute( "charset", $charset );
		}
		
		protected function setContent( $content )
		{
			$this->setAttribute( "content", $content );
		}
		
		protected function setHTTPEquiv( $httpEquiv )
		{
			$httpEquivLowercase = strtolower( $httpEquiv );
			
			if ( $httpEquivLowercase !== "default-style" ||
				$httpEquivLowercase !== "refresh" )
			{
				$message = "httpequiv must be either 'default-style' or " .
					"'refresh'";
				throw new DomainException( $message );
			}
			
			$this->setAttribute( "httpequiv", $httpEquivLowercase );
		}
		
		protected function setName( $name )
		{
			//Make sure itemprop, http-equiv and charset are not set
			if
			(
				$this->hasAttribute( "itemprop" )
				||
				$this->hasAttribute( "http-equiv" )
				||
				$this->hasAttribute( "charset" )
			)
			{
				$message = "The name attribute must not be set when either " .
					"itemprop, http-equiv, or charset are also set";
				throw new LogicException( $message );
			}
			
			//Make sure $name is an acceptable value
			$nameToLower = strtolower( $name );
			if
			(
				$nameToLower !== "application-name" &&
				$nameToLower !== "author" &&
				$nameToLower !== "description" &&
				$nameToLower !== "generator" &&
				$nameToLower !== "keyword" &&
				$nameToLower !== "creator" &&
				$nameToLower !== "googlebot" &&
				$nameToLower !== "publisher" &&
				$nameToLower !== "robots" &&
				$nameToLower !== "slurp" &&
				$nameToLower !== "viewport"
			)
			{
				$message = "The given value for \$name '$name' is not an " .
					"acceptable value for the name attribute";
				throw new DomainException( $message );
			}
			
			$this->setAttribute( "name", $nameToLower );
		}
	}
?>