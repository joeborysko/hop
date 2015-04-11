<?php
	require_once( __DIR__ . "/class.htmlAttribute.php" );
	require_once( __DIR__ . "/../interface.iHTMLComponent.php" );

	class HTMLElementAttributes implements IHTMLComponent
	{
		private $_attributes;
		
		public function __construct()
		{
			$this->_attributes = array();
		}
		
		public function getValue( $key )
		{
			foreach( $this->_attributes as $attribute )
			{
				if ( $attribute->equals( $key ) )
				{
					return $attribute->getValue();
				}
			}
			
			return null;
		}
		
		public function setAttribute( $key, $value=null )
		{
			$index = $this->getIndexOfAttribute( $key );
			if ( $index !== null )
			{
				$this->_attributes[ $index ]->setValue( $value );
			}
			else
			{
				$this->_attributes[] = new HTMLAttribute( $key, $value );
			}
		}
		
		public function removeAttribute( $key )
		{
			$index = $this->getIndexOfAttribute( $key );
			if ( $index !== null )
			{
				unset( $this->_attributes[ $index ] );
			}
		}
		
		public function hasAttribute( $key )
		{
			$index = $this->getIndexOfAttribute( $key  );
			return $index !== null;
		}
		
		private function getIndexOfAttribute( $key )
		{
			for( $i = 0; $i < sizeof( $this->_attributes ); $i++ )
			{
				if ( $this->_attributes[ $i ]->equals( $key ) )
				{
					return $i;
				}
			}
			
			return null;
		}
		
		public function getHTML()
		{
			$html = "";
			
			foreach( $this->_attributes as $attribute )
			{
				$html .= $attribute->getHTML() . " ";
			}
			
			return trim( $html );
		}
	}
?>