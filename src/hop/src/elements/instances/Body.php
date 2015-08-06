<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML Body Element (<body>) represents the content of an HTML document.
 * There can be only one <code><body></code> element in a document.
 */
class Body extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "body" );
	}
	
	/**
	 * Function to call after the user has printed the document.
	 * @param onAfterPrint
	 */
	public function setOnAfterPrint( $onAfterPrint )
	{
		$this->setAttribute( "onafterprint", $onAfterPrint );
	}
	
	/**
	 * Function to call when the user requests printing of the document.
	 * @param onBeforePrint
	 */
	public function setOnBeforePrint( $onBeforePrint )
	{
		$this->setAttribute( "onbeforeprint", $onBeforePrint );
	}
	
	/**
	 * Function to call when the document is about to be unloaded.
	 * @param onBeforeUnload
	 */
	public function setOnBeforeUnload( $onBeforeUnload )
	{
		$this->setAttribute( "onbeforeunload", $onBeforeUnload );
	}
	
	/**
	 * Function to call when the fragment identifier part (starting with the
	 * hash (<code>'#'</code>) character) of the document's current address has
	 * changed.
	 * @param onHashChange
	 */
	public function setOnHashChange( $onHashChange )
	{
		$this->setAttribute( "onhashchange", $onHashChange );
	}
	
	/**
	 * Function to call when the preferred languages changed.
	 * @param onLanguageChange
	 */
	public function setOnLanguageChange( $onLanguageChange )
	{
		$this->setAttribute( "onlanguagechange", $onLanguageChange );
	}
	
	/**
	 * Function to call when the document has received a message.
	 * @param onMessage
	 */
	public function setOnMessage( $onMessage )
	{
		$this->setAttribute( "onmessage", $onMessage );
	}
	
	/**
	 * Function to call when network communication has failed.
	 * @param onOffline
	 */
	public function setOnOffline( $onOffline )
	{
		$this->setAttribute( "onoffline", $onOffline );
	}
	
	/**
	 * Function to call when network communication has been restored.
	 * @param onOnline
	 */
	public function setOnOnline( $onOnline )
	{
		$this->setAttribute( "ononline", $onOnline );
	}
	
	/**
	 * Function to call when the user has navigated session history.
	 * @param onPopState
	 */
	public function setOnPopState( $onPopState )
	{
		$this->setAttribute( "onpopstate", $onPopState );
	}
	
	/**
	 * Function to call when the user has moved forward in undo transaction
	 * history.
	 * @param onRedo
	 */
	public function setOnRedo( $onRedo )
	{
		$this->setAttribute( "onredo", $onRedo );
	}
	
	/**
	 * Function to call when the storage area has changed.
	 * @param onStorage
	 */
	public function setOnStorage( $onStorage )
	{
		$this->setAttribute( "onstorage", $onStorage );
	}
	
	/**
	 * Function to call when the user has moved backward in undo transaction
	 * history.
	 * @param onUndo
	 */
	public function setOnUndo( $onUndo )
	{
		$this->setAttribute( "onundo", $onUndo );
	}
	
	/**
	 * Function to call when the document is going away.
	 * @param onUnload
	 */
	public function setOnUnload( $onUnload )
	{
		$this->setAttribute( "onunload", $onUnload );
	}
}