<?php
	class InputMode
	{
		const VERBATIM			= "verbatim";
		const LATIN				= "latin";
		const LATIN_NAME		= "latin-name";
		const LATIN_PROSE		= "latin-prose";
		const FULL_WIDTH_LATIN	= "full-width-latin";
		const KANA				= "kana";
		const KATAKANA			= "katakana";
		const NUMERIC			= "numeric";
		const TEL				= "tel";
		const EMAIL				= "email";
		const URL				= "url";
		
		public static function containsMode( $mode )
		{
			$reflection = new ReflectionClass( "InputMode" );
			return in_array( $mode, $reflection->getConstants() );			
		}
	}
?>