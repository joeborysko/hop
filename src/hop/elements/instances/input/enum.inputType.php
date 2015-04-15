<?php
	class InputType
	{
		const BUTTON			= "button";
		const CHECKBOX			= "checkbox";
		const COLOR				= "color";
		const DATE				= "date";
		const DATETIME			= "datetime";
		const DATETIME_LOCAL	= "datetime-local";
		const EMAIL				= "email";
		const FILE				= "file";
		const HIDDEN			= "hidden";
		const IMAGE				= "image";
		const MONTH				= "month";
		const NUMBER			= "number";
		const PASSWORD			= "password";
		const RADIO				= "radio";
		const RANGE				= "range";
		const RESET				= "reset";
		const SEARCH			= "search";
		const SUBMIT			= "submit";
		const TEL				= "tel";
		const TEXT				= "text";
		const TIME				= "time";
		const URL				= "url";
		const WEEK				= "week";
		
		public static function containsType( $type )
		{
			$reflection = new ReflectionClass( "InputType" );
			return in_array( $type, $reflection->getConstants() );			
		}
	}
?>