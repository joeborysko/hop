<?php
	require_once( __DIR__ . "/class.mediaElement.php" );
	
	class Audio extends MediaElement
	{
		const PRELOAD_NONE		= "none";
		const PRELOAD_METADATA	= "metadata";
		const PRELOAD_AUTO		= "auto";
		
		public function __construct()
		{
			parent::__construct( "audio" );
		}
		
		protected function getContentCategories()
		{
			$contentCategories = array
			(
				ContentCategory::EMBEDDED
			);
			
			if ( $this->hasAttribute( "controls" ) )
			{
				$contentCategories[] = ContentCategory::INTERACTIVE;
				$contentCategories[] = ContentCategory::PALPABLE;
			}
		}
		
		protected function isAllowedChild( IHTMLElement $child )
		{
			if ( $this->hasAttribute( "src" ) )
			{
				return
					(
						$child->hasContentCategory( ContentCategory::FLOW ) //&&
//						!
//						(
//							$child instanceof Audio ||
//							$child instanceof Video
//						)
					) //||
					//$child instanceof Track;
					;
			}
			else
			{
				return
				(
					$child->hasContentCategory( ContentCategory::FLOW ) //&&
//						!
//						(
//							$child instanceof Audio ||
//							$child instanceof Video
//						)
				) //||
				//$child instanceof Source
				//$child instanceof Track;
				;
			}
		}
		
		public function isAllowedParent( \IHTMLElement $parent )
		{
			return $parent->acceptsContentCategory(
				ContentCategory::EMBEDDED );
		}
		
		public function acceptsContentCategory( $contentCategory )
		{
			return ContentCategory::isChildOfCategory( $contentCategory,
				ContentCategory::FLOW );
		}
		
		/**
		 * Set the volume of the audio.
		 * @param int $volume
		 * The playback volume of any audio portions, in the range 0.0 (silent)
		 * to 1.0 (loudest).
		 */
		public function setVolume( $volume )
		{
			$this->setAttribute( "volume", $volume );
		}
	}
?>