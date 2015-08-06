<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * The HTML <code><source></code> element is used to specify multiple media
 * resources for <code><picture></code>, <code><audio></code> and
 * <code><video></code> elements. It is an empty element. It is commonly used
 * to serve the same media in multiple formats supported by different browsers.
 */
class Source extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "source" );
	}
	
	/**
	 * Is a list of source sizes that describes the final rendered width of the
	 * image represented by the source. Each source size consists of a
	 * comma-separated list of media condition-length pairs. This information
	 * is used by the browser to determine, before laying the page out, which
	 * image defined in <code>srcset</code> to use. The <code>sizes</code>
	 * attribute has an effect only when the <code><source></code> element is
	 * the direct child of a <code><picture></code> element.
	 * @param sizes
	 */
	public function setSizes( $sizes )
	{
		$this->setAttribute( "sizes", $sizes );
	}
	
	/**
	 * Required for <code><audio></code> and <code><video></code>, address of
	 * the media resource. The value of this attribute is ignored when the
	 * <code><source></code> element is placed inside a <code><picture></code>
	 * element.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * A list of one or more strings separated by commas indicating a set of
	 * possible images represented by the source for the browser to use. Each
	 * string is composed of: <ol>  <li>one URL to an image,</li>  <li>a width
	 * descriptor, that is a positive integer directly followed by
	 * <code>'w'</code>. The default value, if missing, is the infinity.</li> 
	 * <li>a pixel density descriptor, that is a positive floating number
	 * directly followed by <code>'x'</code>. The default value, if missing, is
	 * <code>1x</code>.</li> </ol> <p>Each string in the list must have at
	 * least a width descriptor or a pixel density descriptor to be valid.
	 * Among the list, there must be only one string containing the same tuple
	 * of width descriptor and pixel density descriptor.  The browser chooses
	 * the most adequate image to display at a given point of time.  The
	 * <code>srcset</code> attribute has an effect only when the
	 * <code><source></code> element is the direct child of a
	 * <code><picture></code> element.</p>
	 * @param srcset
	 */
	public function setSrcset( $srcset )
	{
		$this->setAttribute( "srcset", $srcset );
	}
	
	/**
	 * The MIME-type of the resource, optionally with a <code>codecs</code>
	 * parameter. See RFC 4281 for information about how to specify codecs.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
	
	/**
	 * Media query of the resource's intended media; this should be used only
	 * in a <code><picture></code> element.
	 * @param media
	 */
	public function setMedia( $media )
	{
		$this->setAttribute( "media", $media );
	}
}