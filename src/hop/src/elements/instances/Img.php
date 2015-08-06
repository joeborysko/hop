<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Image Element (<img>) represents an image of the
 * document.</p><p>Usage note: Browsers do not always display the image
 * referenced by the element. This is the case for non-graphical browsers
 * (including those used by people with vision impairments), if the user
 * chooses not to display images, or if the browser is unable to display the
 * image because it is invalid or an unsupported type. In these cases, the
 * browser may replace the image with the text defined in this element's alt
 * attribute.</p>
 */
class Img extends HTMLElement
{
	const CROSS_ORIGIN_ANONYMOUS = "anonymous";
	const CROSS_ORIGIN_USE_CREDENTIALS = "use-credentials";
	
	/**
	 * @param src
	 * @param altText
	 */
	public function __construct( $src, $altText )
	{
		parent::__construct( "img" );
		$this->setSrc( $src );
		$this->setAlt( $altText );
	}
	
	/**
	 * This attribute defines the alternative text describing the image. Users
	 * will see this displayed if the image URL is wrong, the image is not in
	 * one of the supported formats, or if the image is not yet downloaded. 
	 * <p>Usage note: Omitting this attribute indicates that the image is a key
	 * part of the content, but no textual equivalent is available. Setting
	 * this attribute to the empty string indicates that this image is not a
	 * key part of the content; non-visual browsers may omit it from
	 * rendering.</p>
	 * @param alt
	 */
	public function setAlt( $alt )
	{
		$this->setAttribute( "alt", $alt );
	}
	
	/**
	 * This enumerated attribute indicates if the fetching of the related image
	 * must be done using CORS or not. CORS-enabled images can be reused in the
	 * <code><canvas></code> element without being tainted. The allowed values
	 * are:   anonymous  A cross-origin request (i.e., with
	 * <code>Origin:</code> HTTP header) is performed. But no credential is
	 * sent (i.e., no cookie, no X.509 certificate, and no HTTP Basic
	 * authentication is sent). If the server does not give credentials to the
	 * origin site (by not setting the
	 * <code>Access-Control-Allow-Origin:</code> HTTP header), the image will
	 * be tainted and its usage restricted.  use-credentials  A cross-origin
	 * request (i.e., with <code>Origin:</code> HTTP header) performed with
	 * credential is sent (i.e., a cookie, a certificate, and HTTP Basic
	 * authentication is performed). If the server does not give credentials to
	 * the origin site (through <code>Access-Control-Allow-Credentials:</code>
	 * HTTP header), the image will be tainted and its usage restricted.  When
	 * not present, the resource is fetched without a CORS request (i.e.,
	 * without sending the <code>Origin:</code> HTTP header), preventing its
	 * non-tainted usage in <code><canvas></code> elements. If invalid, it is
	 * handled as if the enumerated keyword anonymous was used. See CORS
	 * settings attributes for additional information.See the CROSS_ORIGIN_*
	 * constants in this file.
	 * @param crossOrigin
	 */
	public function setCrossOrigin( $crossOrigin )
	{
		$this->setAttribute( "crossorigin", $crossOrigin );
	}
	
	/**
	 * The intrinsic height of the image in CSS pixels.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * This Boolean attribute indicates that the image is part of a server-side
	 * map. If so, the precise coordinates of a click are sent to the server. 
	 * <p>Usage note: This attribute is allowed only if the <code><img></code>
	 * element is a descendant of an <code><a></code> element with a valid
	 * <code>href</code> attribute.</p>
	 */
	public function setIsMapYes()
	{
		$this->setAttribute( "ismap");
	}
	
	/**
	 * A list of one or more strings separated by commas indicating a set of
	 * source sizes. Each source size consists of: <ol>  <li>a media condition.
	 * This must be omitted for the last item.</li>  <li>a source size
	 * value.</li> </ol> <p>Source size values specify the intended display
	 * size of the image. User agents use the current source size to select one
	 * of the sources supplied by the <code>srcset</code> attribute, when those
	 * sources are described using width ('<code>w</code>') descriptors. The
	 * selected source size affects the intrinsic size of the image (the
	 * image’s display size if no CSS styling is applied). If the
	 * <code>srcset</code> attribute is absent, or contains no values with a
	 * width descriptor, then the <code>sizes</code> attribute has no
	 * effect.</p>
	 * @param sizes
	 */
	public function setSizes( $sizes )
	{
		$this->setAttribute( "sizes", $sizes );
	}
	
	/**
	 * The image URL. This attribute is mandatory for the <code><img></code>
	 * element. On browsers supporting <code>srcset</code>, <code>src</code> is
	 * treated like a candidate image with a pixel density descriptor
	 * <code>1x</code> unless an image with this pixel density descriptor is
	 * already defined in <code>srcset</code> or <code>srcset</code> contains
	 * '<code>w</code>' descriptors.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * A list of one or more strings separated by commas indicating a set of
	 * possible image sources for the user agent to use. Each string is
	 * composed of: <ol>  <li>a URL to an image,</li>  <li>optionally,
	 * whitespace followed by one of:   <ul>    <li>a width descriptor, that is
	 * a positive integer directly followed by '<code>w</code>'. The width
	 * descriptor is divided by the source size given in
	 * the <code>sizes</code> attribute to calculate the effective pixel
	 * density.</li>    <li>a pixel density descriptor, that is a positive
	 * floating point number directly followed by '<code>x</code>'.</li>  
	 * </ul>  </li> </ol> <p>If no descriptor is specified, the source is
	 * assigned the default descriptor: <code>1x</code>.</p> <p>It is invalid
	 * to mix width descriptors and pixel density descriptors in the same
	 * <code>srcset</code> attribute. Duplicate descriptors (for instance, two
	 * sources in the same <code>srcset</code> which are both described
	 * with '<code style="font-style: normal;">2x</code>') are invalid,
	 * too.</p> <p>User agents are given discretion to choose any one of the
	 * available sources. This provides them with significant leeway to tailor
	 * their selection based on things like user preferences or bandwidth
	 * conditions.</p>
	 * @param srcset
	 */
	public function setSrcset( $srcset )
	{
		$this->setAttribute( "srcset", $srcset );
	}
	
	/**
	 * The intrinsic width of the image in CSS pixels.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
	
	/**
	 * The partial URL (starting with '#') of an image map associated with the
	 * element.  <p>Usage note: You cannot use this attribute if the
	 * <code><img></code> element is a descendant of an <code><a></code> or
	 * <code><button></code> element.</p>
	 * @param useMap
	 */
	public function setUseMap( $useMap )
	{
		$this->setAttribute( "usemap", $useMap );
	}
}