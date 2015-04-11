<?php
	require_once( __DIR__ . "/class.dl.php" );
	require_once( __DIR__ . "/class.dt.php" );
	require_once( __DIR__ . "/../class.htmlElement.php" );
	
	class DL extends HTMLElement
	{
		public function __construct()
		{
			parent::__construct( "dl" );
		}
		
		protected function getContentCategories()
		{
			$contentCategories = array( ContentCategory::FLOW );
			
			//This is palpable content if it contains at least one <dt> and at
			//least one <dd>
			$hasDT = false;
			$hasDL = false;
			foreach( $this->_children as $child )
			{
				if ( $child instanceof DT )
				{
					$hasDT = true;
				}
				else if ( $child instanceof DL )
				{
					$hasDL = true;
				}
				
				if ( $hasDT && $hasDL )
				{
					$contentCategories[] = ContentCategory::PALPABLE;
					break;
				}
			}
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			return $child instanceof DT || $child instanceof DL;
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory( ContentCategory::FLOW );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return false;
		}
	}
?>