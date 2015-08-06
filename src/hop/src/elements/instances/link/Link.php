<?php

namespace hop\elements\instances\link;

require_once __DIR__ . "/../../EmptyElement.php";

/**
 * The HTML Link Element (<link>) specifies relationships between the current
 * document and an external resource. Possible uses for this element include
 * defining a relational framework for navigation. This Element is most used to
 * link to style sheets.
 */
class Link extends EmptyElement
{
	const CROSS_ORIGIN_ANONYMOUS = "anonymous";
	const CROSS_ORIGIN_USE_CREDENTIALS = "use-credentials";
	const LINK_TYPE_ALTERNATE = "alternate";
	const LINK_TYPE_ARCHIVES = "archive";
	const LINK_TYPE_AUTHOR = "author";
	const LINK_TYPE_BOOKMARK = "bookmark";
	const LINK_TYPE_EXTERNAL = "external";
	const LINK_TYPE_FIRST = "first";
	const LINK_TYPE_HELP = "help";
	const LINK_TYPE_ICON = "icon";
	const LINK_TYPE_INDEX = "index";
	const LINK_TYPE_LAST = "last";
	const LINK_TYPE_LICENSE = "license";
	const LINK_TYPE_NEXT = "next";
	const LINK_TYPE_NO_FOLLOW = "nofollow";
	const LINK_TYPE_NO_REFERRER = "noreferrer";
	const LINK_TYPE_PING_BACK = "pingback";
	const LINK_TYPE_PREFETCH = "prefetch";
	const LINK_TYPE_PREV = "prev";
	const LINK_TYPE_SEARCH = "search";
	const LINK_TYPE_STYLESHEET = "stylsheet";
	const LINK_TYPE_SIDEBAR = "sidebar";
	const LINK_TYPE_TAG = "tag";
	const LINK_TYPE_UP = "up";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "link" );
	}
	
	/**
	 * This enumerated attribute indicates if the fetching of the related image
	 * must be done using CORS or not. CORS-enabled images can be reused in the
	 * <code><canvas></code> element without being tainted. The allowed values
	 * are:         anonymous       A cross-origin request (i.e. with
	 * <code>Origin:</code> HTTP header) is performed. But no credential is
	 * sent (i.e. no cookie, no X.509 certificate and no HTTP Basic
	 * authentication is sent). If the server does not give credentials to the
	 * origin site (by not setting the
	 * <code>Access-Control-Allow-Origin:</code> HTTP header), the image will
	 * be tainted and its usage restricted..       use-credentials       A
	 * cross-origin request (i.e. with <code>Origin:</code> HTTP header) is
	 * performed with credential is sent (i.e. a cookie, a certificate and HTTP
	 * Basic authentication is performed). If the server does not give
	 * credentials to the origin site (through
	 * <code>Access-Control-Allow-Credentials:</code> HTTP header), the image
	 * will be tainted and its usage restricted.    When not present, the
	 * resource is fetched without a CORS request (i.e. without sending the
	 * <code>Origin:</code> HTTP header), preventing its non-tainted used in
	 * <code><canvas></code> elements. If invalid, it is handled as if the
	 * enumerated keyword anonymous was used. See CORS settings attributes for
	 * additional information.See the CROSS_ORIGIN_* constants in this class.
	 * @param crossOrigin
	 */
	public function setCrossOrigin( $crossOrigin )
	{
		$this->setAttribute( "crossorigin", $crossOrigin );
	}
	
	/**
	 * This attribute specifies the URL of the linked resource. A URL might be
	 * absolute or relative.
	 * @param href
	 */
	public function setHref( $href )
	{
		$this->setAttribute( "href", $href );
	}
	
	/**
	 * This attribute indicates the language of the linked resource. It is
	 * purely advisory. Allowed values are determined by BCP47 for HTML5 and by
	 * RFC1766 for HTML 4. Use this attribute only if the <code>href</code>
	 * attribute is present.
	 * @param hrefLang
	 */
	public function setHrefLang( $hrefLang )
	{
		$this->setAttribute( "hreflang", $hrefLang );
	}
	
	/**
	 * This attribute specifies the media which the linked resource applies to.
	 * Its value must be a media query. This attribute is mainly useful when
	 * linking to external stylesheets by allowing the user agent to pick the
	 * best adapted one for the device it runs on.     Usage note:    <ul>   
	 * <li>In HTML 4, this can only be a simple white-space-separated list of
	 * media description literals, i.e., media types and groups, where defined
	 * and allowed as values for this attribute, such as <code>print</code>,
	 * <code>screen</code>, <code>aural</code>, <code>braille</code>. HTML5
	 * extended this to any kind of media queries, which are a superset of the
	 * allowed values of HTML 4.</li>    <li>Browsers not supporting the CSS3
	 * Media Queries won't necessarily recognize the adequate link; do not
	 * forget to set fallback links, the restricted set of media queries
	 * defined in HTML 4.</li></ul>
	 * @param media
	 */
	public function setMedia( $media )
	{
		$this->setAttribute( "media", $media );
	}
	
	/**
	 * This attribute names a relationship of the linked document to the
	 * current document. The attribute must be a space-separated list of the
	 * link types values. The most common use of this attribute is to specify a
	 * link to an external style sheet: the rel attribute is set to
	 * <code>stylesheet</code>, and the href attribute is set to the URL of an
	 * external style sheet to format the page. WebTV also supports the use of
	 * the value <code>next</code> for rel to preload the next page in a
	 * document series.
	 * @param rel
	 */
	public function setRel( $rel )
	{
		$this->setAttribute( "rel", $rel );
	}
	
	/**
	 * This attribute defines the sizes of the icons for visual media contained
	 * in the resource. It must be present only if the <code>rel</code>
	 * contains the icon link types value. It may have the following values: 
	 * <ul>   <li><code>any</code>, meaning that the icon can be scaled to any
	 * size as it is in a vectorial format, like
	 * <code>image/svg+xml</code>.</li>   <li>a white-space separated list of
	 * sizes, each in the format <width in pixels>x<height in pixels> or <width
	 * in pixels>X<height in pixels>. Each of these sizes must be contained in
	 * the resource.</li>  </ul>     Usage note:    <ul>    <li>Most icon
	 * format are only able to store one single icon; therefore most of the
	 * time the <code>sizes</code> contains only one entry. Among the major
	 * browsers, only the Apple's ICNS format allows the storage of multiple
	 * icons, and this format is only supported in WebKit.</li>    <li>Apple's
	 * iOS does not support this attribute, hence Apple's iPhone and iPad use
	 * special, non-standard link types values to define icon to be used as Web
	 * Clip or start-up placeholder: apple-touch-icon and
	 * apple-touch-startup-icon.</li></ul>
	 * @param sizes
	 */
	public function setSizes( $sizes )
	{
		$this->setAttribute( "sizes", $sizes );
	}
	
	/**
	 * This attribute is used to define the type of the content linked to. The
	 * value of the attribute should be a MIME type such as text/html,
	 * text/css, and so on. The common use of this attribute is to define the
	 * type of style sheet linked and the most common current value is
	 * text/css, which indicates a Cascading Style Sheet format.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
}