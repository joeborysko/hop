<?php
	/**
	 * An "enum" for the allowed values of the dropzone attribute.
	 */
	abstract class Dropzone
	{
		const COPY = "copy";
		const MOVE = "move";
		const LINK = "link";
			
		
		public static function hasConstant( $constant )
		{
			$reflection = new ReflectionClass( "Dropzone" );
			$constants = $reflection->getConstants();
			return in_array( $constant, $constants );
		}
	}
?>