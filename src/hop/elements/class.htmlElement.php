<?php
	require_once( __DIR__ . "/interface.iHTMLElement.php" );
	require_once( __DIR__ . "/../attributes/class.htmlElementAttributes.php" );
	require_once( __DIR__ . "/../attributes/class.htmlElementClass.php" );
	require_once( __DIR__ . "/../attributes/enum.directionality.php" );
	require_once( __DIR__ . "/../attributes/enum.dropzone.php" );
	
	abstract class HTMLElement implements IHTMLElement
	{
		protected $_tagName;
		protected $_attributes;
		protected $_classes;
		protected $_children;
		
		public function __construct( $tagName )
		{
			$this->_tagName = $tagName;
			$this->_attributes = new HTMLElementAttributes();
			$this->_classes = new HTMLElementClass();
			$this->_children = array();
		}
		
		public function hasContentCategory( $contentCategory )
		{
			$contentCategories = $this->getContentCategories();
			
			//Iterate through the categories that this element has
			foreach( $contentCategories as $curCategory )
			{
				//If the current category is a child of the content category...
				if ( ContentCategory::isChildOfCategory( $curCategory,
					$contentCategory ) )
				{
					return true;
				}
			}
			
			return false;
		}
		
		protected abstract function getContentCategories();
		public abstract function acceptsContentCategory( $contentCategory );
		
		public function setText( $text )
		{
			//This require has to be put here for annoying reasons
			require_once( __DIR__ . "/instances/class.textElement.php" );
			
			$textElement = new TextElement( $text );
			$this->_children[] = $textElement;
		}
		
		public function addChild( IHTMLElement $child )
		{
			if
			(
				! $child instanceof TextElement &&
				(
					$this->isAllowedChild( $child ) === false ||
					$child->isAllowedParent( $this ) === false
				)
			)
			{
				$message = "The given child of type " . get_class( $child ) .
					" cannot be a child of this HTMLElement of type " .
					get_class( $this );
				throw new InvalidArgumentException( $message );
			}
			
			$this->_children[] = $child;
		}
                
                public function addChildAtIndex( IHTMLElement $child, $index )
                {
                        if
			(
				! $child instanceof TextElement &&
				(
					$this->isAllowedChild( $child ) === false ||
					$child->isAllowedParent( $this ) === false
				)
			)
			{
				$message = "The given child of type " . get_class( $child ) .
					" cannot be a child of this HTMLElement of type " .
					get_class( $this );
				throw new InvalidArgumentException( $message );
			}
			
			array_splice( $this->_children, $index, 0, array( $child ) );
                }
		
		protected abstract function isAllowedChild( IHTMLElement $child );
		
		//Override this function if the HTML element has nonstandard rules
		//for allowing parents, for example, <li>.
		public function isAllowedParent( IHTMLElement $parent )
		{
			return true;
		}
		
		public function getAttributeValue( $key )
		{
			return $this->_attributes->getValue( $key );
		}
		
		protected function setAttribute( $key, $value=null )
		{
			$this->_attributes->setAttribute( $key, $value );
		}
		
		public function removeAttribute( $key )
		{
			$this->_attributes->removeAttribute( $key );
		}
		
		/**
		 * Determine if an attribute has been set.
		 * @param string $key
		 * @return boolean
		 */
		public function hasAttribute( $key )
		{
			return $this->_attributes->hasAttribute( $key );
		}
		
		public function addClass( $class )
		{
			$this->_classes->addClass( $class );
		}
		
		public function removeClass( $class )
		{
			$this->_classes->removeClass( $class );
		}
		
		public function hasClass( $class )
		{
			return $this->_classes->hasClass( $class );
		}
		
		/**
		 * Set the accesskey attribute of this html element.
		 * @param string $accessKey
		 */
		public function setAccessKey( $accessKey )
		{
			$this->setAttribute( "accesskey", $accessKey );
		}
		
		/**
		 * Set the contenteditable attribute of this html element.
		 * @param boolean $isContentEditable
		 * @throws InvalidArgumentException
		 * if $isContentEditable is not a boolean
		 */
		public function setContentEditable( $isContentEditable )
		{
			if ( $isContentEditable === true )
			{
				$this->setAttribute( "contenteditable", "true" );
			}
			else if ( $isContentEditable === false )
			{
				$this->setAttribute( "contenteditable", "false" );
			}
			else
			{
				$message = "\$isContentEditable must be a boolean value";
				throw new InvalidArgumentException( $message );
			}
		}
		
		/**
		 * Set the contextmenu attribute of this html element.
		 * @param string $idContextMenu
		 */
		public function setContextMenu( $idContextMenu )
		{
			$this->setAttribute( "contextmenu", $idContextMenu );
		}
		
		/**
		 * Set a data-* attribute of this html element.
		 * @param string $dataAttributeSuffix
		 * The suffix of the data-* attribute, i.e. the * part. The suffix must
		 * follow the following rules:
		 * -must not start with xml
		 * -must not contain a semicolon
		 * -must not contain capital A to Z letters
		 * @throws InvalidArgumentException
		 */
		public function setDataAttribute( $dataAttributeSuffix, $value )
		{
			//Check for errors
			$regex = "/[A-Z;]|(^xml)/";
			if ( preg_match( $regex, $dataAttributeSuffix ) === 1 )
			{
				$message = "The data-* suffix must not start with 'xml', " .
					"contain capital letters, or contain a semicolon";
				throw new InvalidArgumentException( $message );
			}			
			$key = "data-$dataAttributeSuffix";
			$this->setAttribute( $key, $value );
		}
		
		/**
		 * Set the dir attribute of this html element
		 * @param string $dir
		 * Must be const value in the enum.directionality.php class.
		 * @throws InvalidArgumentException
		 */
		public function setDir( $dir )
		{
			if ( ! Directionality::hasConstant( $dir ) )
			{
				$message = "The given dir is not an allowed dir value";
				throw new InvalidArgumentException( $message );
			}			
			$this->setAttribute( "dir", $dir );
		}
		
		/**
		 * Set the contenteditable attribute of this html element.
		 * @param boolean $isContentEditable
		 * @throws InvalidArgumentException
		 * if $isDraggable is not a boolean
		 */
		public function setDraggable( $isDraggable )
		{
			if ( $isDraggable === true )
			{
				$this->setAttribute( "draggable", "true" );
			}
			else if ( $isDraggable === false )
			{
				$this->setAttribute( "draggable", "false" );
			}
			else
			{
				$message = "\$isDraggable must be a boolean value";
				throw new InvalidArgumentException( $message );
			}
		}
		
		/**
		 * Set the dropzone attribute of this html element
		 * @param string $dropzone
		 * Must be const value in the enum.dropzone.php class.
		 * @throws InvalidArgumentException
		 */
		public function setDropzone( $dropzone )
		{
			if ( ! Dropzone::hasConstant( $dropzone ) )
			{
				$message = "The given dropzone is not an allowed dropzone " .
					"value";
				throw new InvalidArgumentException( $message );
			}			
			$this->setAttribute( "dropzone", $dropzone );
		}
		
		/**
		 * Give this element the hidden attribute.
		 */
		public function setHiddenTrue()
		{
			$this->setAttribute( "hidden", null );
		}
		
		/**
		 * Set the id attribute of this html element.
		 * @param string $id
		 * The id must not contain spaces.
		 * @throws InvalidArgumentException
		 */
		public function setID( $id )
		{
			//Make sure the id does not contain spaces
			if ( preg_match('/\s/', $id ) === 1 )
			{
				$message = "The id attribute must not contain spaces";
				throw new InvalidArgumentException( $message );
			}			
			$this->setAttribute( "id", $id );
		}
		
		/**
		 * Set the lang attribute of this html element.
		 * @param type $lang
		 */
		public function setLang( $lang )
		{
			$this->setAttribute( "lang", $lang );
		}
		
		public function setOnClick( $onClick )
		{
			$this->setAttribute( "onclick", $onClick );
		}
		
		public function setOnMouseDown( $onMouseDown )
		{
			$this->setAttribute( "onmousedown", $onMouseDown );
		}
		
		public function setRole( $role )
		{
			$this->setAttribute( "role", $role );
		}
		
		/**
		 * Set the spellcheck attribute of this html element.
		 * @param boolean $isContentEditable
		 * @throws InvalidArgumentException
		 * if $isSpellcheck is not a boolean
		 */
		public function setSpellcheck( $isSpellcheck )
		{
			if ( $isSpellcheck === true )
			{
				$this->setAttribute( "spellcheck", "true" );
			}
			else if ( $isSpellcheck === false )
			{
				$this->setAttribute( "spellcheck", "false" );
			}
			else
			{
				$message = "\$isSpellcheck must be a boolean value";
				throw new InvalidArgumentException( $message );
			}
		}
		
		/**
		 * Set the style attribute of this html element.
		 * @param string $style
		 */
		public function setStyle( $style )
		{
			$this->setAttribute( "style", $style );
		}
		
		/**
		 * Set the tabindex attribute of this html element.
		 * @param int $tabIndex
		 * The tab index, defined by the following rules:
		 * • A negative value means that the element should be focusable, but
		 * should not be reachable via sequential keyboard navigation;
		 * • 0 means that the element should be focusable and reachable via
		 * sequential keyboard navigation, but its relative order is defined by
		 * the platform convention;
		 * • A positive value which means should be focusable and reachable via
		 * sequential keyboard navigation; its relative order is defined by the
		 * value of the attribute: the sequential follow the increasing number
		 * of the tabindex. If several elements share the same tabindex, their
		 * relative order follows their relative position in the document).
		 * @throws InvalidArgumentException
		 */
		public function setTabIndex( $tabIndex )
		{
			//Make sure $tabIndex is an integer
			if ( ! is_int( $tabIndex ) )
			{
				$message = "\$tabIndex must be an int variable.";
				throw new InvalidArgumentException( $message );
			}			
			$this->setAttribute( "tabindex", $tabIndex );
		}
		
		/**
		 * Set the title attribute of this html element.
		 * @param string $title
		 */
		public function setTitle( $title )
		{
			$this->setAttribute( "title", $title );
		}
		
		public function getHTML()
		{
			$openTag = "<$this->_tagName " . $this->_classes->getHTML() .
				" " . $this->_attributes->getHTML() . ">";
			
			$content = "";
			foreach( $this->_children as $child )
			{
				$content .= $child->getHTML();
			}
			
			$closeTag = "</$this->_tagName>";
			
			return $openTag . $content . $closeTag;
		}
	}
?>