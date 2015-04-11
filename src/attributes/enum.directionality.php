<?php
	/**
	 * An "enum" for the allowed values of the dir attribute.
	 */
	abstract class Directionality
	{
		const LEFT_TO_RIGHT = "ltr";
		const RIGHT_TO_LEFT = "rtl";
		const AUTO = "auto";
			
		
		public static function hasConstant( $constant )
		{
			$reflection = new ReflectionClass( "Directionality" );
			$constants = $reflection->getConstants();
			return in_array( $constant, $constants );
		}
	}
?>