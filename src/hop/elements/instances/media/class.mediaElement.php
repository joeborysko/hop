<?php
	require_once( __DIR__ . "/../../class.htmlElement.php" );
	
	abstract class MediaElement extends HTMLElement
	{
		const PRELOAD_NONE		= "none";
		const PRELOAD_METADATA	= "metadata";
		const PRELOAD_AUTO		= "auto";
		
		public function __construct( $tagName )
		{
			parent::__construct( $tagName);
		}
		
		public function setAutoplayYes()
		{
			$this->setAttribute( "autoplay" );
		}
		
		public function setControlsYes()
		{
			$this->setAttribute( "controls" );
		}
		
		public function setCrossOrigin( $crossOrigin )
		{
			$this->setAttribute( "crossorigin", $crossOrigin );
		}
		
		public function setLoopYes()
		{
			$this->setAttribute( "loop" );
		}
		
		public function setMediaGroup( $mediaGroup )
		{
			$this->setAttribute( "mediagroup", $mediaGroup );
		}
		
		public function setMutedYes()
		{
			$this->setAttribute( "muted" );
		}
		
		/**
		 * This enumerated attribute is intended to provide a hint to the
		 * browser about what the author thinks will lead to the best user
		 * experience. It may have one of the following values:
		 * -none: hints that either the author thinks that the user won't need to
		 * consult that audio or that the server wants to minimize its traffic;
		 * in others terms this hint indicates that the audio should not be
		 * cached;
		 * -metadata: hints that though the author thinks that the user won't
		 * need to consult that audio, fetching the metadata (e.g. length) is
		 * reasonable;
		 * -auto: hints that the user needs have priority; in others terms this
		 * hint indicated that, if needed, the whole audio could be downloaded,
		 * even if the user is not expected to use it;
		 * -the empty string: which is a synonym of the auto value.
		 * If not set, its default value is browser-defined (i.e. each browser
		 * can choose its own default value), though the spec advises it to be
		 * set to metadata.
		 * See the PRELOAD_* constants in this class.
		 * Usage notes:
		 * -The autoplay attribute has precedence over this one as if one wants
		 * to automatically play a audio, the browser will obviously need to
		 * download it. Setting both the autoplay and the preload attributes
		 * is allowed by the specification.
		 * -The browser is not forced by the specification to follow the value
		 * of this attribute; it is a mere hint.
		 * @param string $preload
		 */
		public function setPreload( $preload )
		{
			if
			(
				!
				(
					$preload === self::SHAPE_RECTANGLE ||
					$preload === self::SHAPE_CIRCLE ||
					$preload === self::SHAPE_POLY ||
					$preload === self::SHAPE_DEFAULT
				)
			)
			{
				$message = "The given preload is not valid";
				throw new InvalidArgumentException( $message );
			}
			
			$this->setAttribute( "preload", $preload );
		}
		
		public function setSrc( $src )
		{
			$this->setAttribute( "src", $src );
		}
		
		public function setOnAbort( $javascript )
		{
			$this->setAttribute( "onabort", $javascript );
		}
		
		public function setOnCanPlay( $javascript )
		{
			$this->setAttribute( "oncanplay", $javascript );
		}
		
		public function setOnCanPlayThrough( $javascript )
		{
			$this->setAttribute( "oncanplaythrough", $javascript );
		}
		
		public function setOnDurationChange( $javascript )
		{
			$this->setAttribute( "ondurationchange", $javascript );
		}
		
		public function setOnEmptied( $javascript )
		{
			$this->setAttribute( "onemptied", $javascript );
		}
		
		public function setOnEnded( $javascript )
		{
			$this->setAttribute( "onended", $javascript );
		}
		
		public function setOnError( $javascript )
		{
			$this->setAttribute( "onerror", $javascript );
		}
		
		public function setOnLoadedData( $javascript )
		{
			$this->setAttribute( "onloadeddata", $javascript );
		}
		
		public function setOnLoadedMetaData( $javascript )
		{
			$this->setAttribute( "onloadedmetadata", $javascript );
		}
		
		public function setOnLoadStart( $javascript )
		{
			$this->setAttribute( "onloadstart", $javascript );
		}
		
		public function setOnPause( $javascript )
		{
			$this->setAttribute( "onpause", $javascript );
		}
		
		public function setOnPlay( $javascript )
		{
			$this->setAttribute( "onplay", $javascript );
		}
		
		public function setOnPlaying( $javascript )
		{
			$this->setAttribute( "onplaying", $javascript );
		}
		
		public function setOnProgress( $javascript )
		{
			$this->setAttribute( "onprogress", $javascript );
		}
		
		public function setOnRateChange( $javascript )
		{
			$this->setAttribute( "onratechange", $javascript );
		}
		
		public function setOnSeeked( $javascript )
		{
			$this->setAttribute( "onseeked", $javascript );
		}
		
		public function setOnSeeking( $javascript )
		{
			$this->setAttribute( "onseeking", $javascript );
		}
		
		public function setOnStalled( $javascript )
		{
			$this->setAttribute( "onstalled", $javascript );
		}
		
		public function setOnSuspend( $javascript )
		{
			$this->setAttribute( "onsuspend", $javascript );
		}
		
		public function setOnTimeUpdate( $javascript )
		{
			$this->setAttribute( "ontimeupdate", $javascript );
		}
		
		public function setOnVolumeChange( $javascript )
		{
			$this->setAttribute( "onvolumechange", $javascript );
		}
		
		public function setOnWaiting( $javascript )
		{
			$this->setAttribute( "onwaiting", $javascript );
		}
	}
?>