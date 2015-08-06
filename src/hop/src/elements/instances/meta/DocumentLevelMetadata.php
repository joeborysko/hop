<?php

namespace hop\elements\instances\meta;

require_once( __DIR__ . "/Meta.php" );

class DocumentLevelMetadata extends Meta
{
	
	public function setApplicationName( $applicationName )
	{
		$this->setName( "application-name" );
		$this->setContent( $applicationName );
	}
	
	public function setAuthor( $author )
	{
		$this->setName( "author" );
		$this->setAuthor( $author );
	}
	
	public function setDescription( $description )
	{
		$this->setName( "description" );
		$this->setContent( $description );
	}
	
	public function setGenerator( $generator )
	{
		$this->setName( "generator" );
		$this->setContent( $generator );
	}
	
	/**
	 * @param array $keywords
	 * The array of keywords associated to the content of the page
	 */
	public function setKeywords( array $keywords )
	{
		$keywordsString = implode( ",", $keywords );			
		$this->setName( "keywords" );
		$this->setContent( $keywordsString );
	}
	
	public function setCreator( $creator )
	{
		$this->setName( "creator" );
		$this->setContent( $creator );
	}
	
	/**
	 * @param array $googleBotBehaviors
	 * An array of strings containing the values of the content attribute.
	 */
	public function setGoogleBot( $googleBotBehaviors )
	{
		$this->setName( "googlebot" );
		$this->setRobotContent( $googleBotBehaviors );
	}
	
	public function setPublisher( $publisher )
	{
		$this->setName( "publisher" );
		$this->setContent( $publisher );
	}
	
	/**
	 * @param type $robotBehaviors
	 * An array of strings containing the values of the content attribute.
	 */
	public function setRobots( $robotBehaviors )
	{
		$this->setName( "robots" );
		$this->setRobotContent( $robotBehaviors );
	}
	
	/**
	 * @param type $robotBehaviors
	 * An array of strings containing the values of the content attribute.
	 */
	public function setSlurp( $robotBehaviors )
	{
		$this->setName( "slurp" );
		$this->setRobotContent( $robotBehaviors );
	}
	
	public function setViewportWidth( $width )
	{
		$this->setName( "viewport" );
		$this->setContent( "width=$width" );
	}
	
	public function setViewportHeight( $height )
	{
		$this->setName( "viewport" );
		$this->setContent( "height=$height" );
	}
	
	public function setViewportInitialScale( $initialScale )
	{
		$this->setName( "viewport" );
		$this->setContent( "initial-scale=$initialScale" );
	}
	
	public function setViewportMaximumScale( $maximumScale )
	{
		$this->setName( "viewport" );
		$this->setContent( "maximum-scale=$maximumScale" );
	}
	
	public function setViewportMinimumScale( $minimumScale )
	{
		$this->setName( "viewport" );
		$this->setContent( "minimum-scale=$minimumScale" );
	}
	
	public function setViewportUserScalable( $isUserScalable )
	{
		$userScalableString = "yes";
		if ( $isUserScalable === false )
		{
			$userScalableString = "no";
		}
		else if ( $isUserScalable !== true )
		{
			$message = "\$isUserScalable must be a boolean value";
			throw new DomainException( $message );
		}
		
		$this->setName( "viewport" );
		$this->setContent( "user-scalable=$userScalableString" );
	}
	
	private function setRobotContent( $robotBehaviors )
	{
		$content = implode( ",", $robotBehaviors );
		$this->setContent( $content );
	}
}