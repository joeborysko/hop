<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * The HTML <code><area></code> element defines a hot-spot region on an image,
 * and optionally associates it with a hypertext link. This element is used
 * only within a <code><map></code> element.
 */
class Area extends EmptyElement
{
	const SHAPE_RECTANGLE = "rect";
	const SHAPE_CIRCLE = "circ";
	const SHAPE_POLY = "poly";
	const SHAPE_DEFAULT = "default";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "area" );
	}
	
	/**
	 * A text string alternative to display on browsers that do not display
	 * images. The text should be phrased so that it presents the user with the
	 * same kind of choice as the image would offer when displayed without the
	 * alternative text. In HTML4, this attribute is required, but may be the
	 * empty string (""). In HTML5, this attribute is required only if the href
	 * attribute is used.
	 * @param alt
	 */
	public function setAlt( $alt )
	{
		$this->setAttribute( "alt", $alt );
	}
	
	/**
	 * A set of values specifying the coordinates of the hot-spot region. The
	 * number and meaning of the values depend upon the value specified for the
	 * shape attribute. For a <code>rect</code> or rectangle shape, the coords
	 * value is two x,y pairs: left, top, right, and bottom. For a
	 * <code>circle</code> shape, the value is <code>x,y,r</code> where
	 * <code>x,y</code> is a pair specifying the center of the circle and
	 * <code>r</code> is a value for the radius. For a <code>poly</code> or
	 * polygon< shape, the value is a set of x,y pairs for each point in the
	 * polygon: <code>x1,y1,x2,y2,x3,y3,</code> and so on. In HTML4, the values
	 * are numbers of pixels or percentages, if a percent sign (%) is appended;
	 * in HTML5, the values are numbers of CSS pixels.
	 * @param coords
	 */
	public function setCoords( $coords )
	{
		$this->setAttribute( "coords", $coords );
	}
	
	/**
	 * This attribute, if present, indicates that the author intends the
	 * hyperlink to be used for downloading a resource. See <code><a></code>
	 * for a full description of the <code>download</code> attribute.
	 */
	public function setDownloadYes()
	{
		$this->setAttribute( "download");
	}
	
	/**
	 * The hyperlink target for the area. Its value is a valid URL. In HTML4,
	 * either this attribute or the nohref attribute must be present in the
	 * element. In HTML5, this attribute may be omitted; if so, the area
	 * element does not represent a hyperlink.
	 * @param href
	 */
	public function setHref( $href )
	{
		$this->setAttribute( "href", $href );
	}
	
	/**
	 * Indicates the language of the linked resource. Allowed values are
	 * determined by BCP47. Use this attribute only if the href attribute is
	 * present.
	 * @param hrefLang
	 */
	public function setHrefLang( $hrefLang )
	{
		$this->setAttribute( "hreflang", $hrefLang );
	}
	
	/**
	 * A hint of the media for which the linked resource was designed, for
	 * example <code>print and screen</code>. If omitted, it defaults to
	 * <code>all</code>. Use this attribute only if the href attribute is
	 * present.
	 * @param media
	 */
	public function setMedia( $media )
	{
		$this->setAttribute( "media", $media );
	}
	
	/**
	 * For anchors containing the href attribute, this attribute specifies the
	 * relationship of the target object to the link object. The value is a
	 * comma-separated list of link types values. The values and their
	 * semantics will be registered by some authority that might have meaning
	 * to the document author. The default relationship, if no other is given,
	 * is void. Use this attribute only if the href attribute is present.
	 * @param rel
	 */
	public function setRel( $rel )
	{
		$this->setAttribute( "rel", $rel );
	}
	
	/**
	 * The shape of the associated hot spot. The specifications for HTML 5 and
	 * HTML 4 define the values <code>rect</code>, which defines a rectangular
	 * region; <code>circle</code>, which defines a circular region;
	 * <code>poly</code>, which defines a polygon; and <code>default</code>,
	 * which indicates the entire region beyond any defined shapes. Many
	 * browsers, notably Internet Explorer 4 and higher, support
	 * <code>circ</code>, <code>polygon</code>, and <code>rectangle</code> as
	 * valid values for shape; these values are not standard. See the SHAPE_*
	 * constants in this class for valid shapes.
	 * @param shape
	 */
	public function setShape( $shape )
	{
		$this->setAttribute( "shape", $shape );
	}
	
	/**
	 * This attribute specifies where to display the linked resource. In HTML4,
	 * this is the name of, or a keyword for, a frame. In HTML5, it is a name
	 * of, or keyword for, a browsing context (for example, tab, window, or
	 * inline frame). The following keywords have special meanings: <ul> 
	 * <li><code>_self</code>: Load the response into the same HTML4 frame (or
	 * HTML5 browsing context) as the current one. This value is the default if
	 * the attribute is not specified.</li>  <li><code>_blank</code>: Load the
	 * response into a new unnamed HTML4 window or HTML5 browsing context.</li>
	 *  <li><code>_parent</code>: Load the response into the HTML4 frameset
	 * parent of the current frame or HTML5 parent browsing context of the
	 * current one. If there is no parent, this option behaves the same way as
	 * <code>_self</code>.</li>  <li><code>_top</code>: In HTML4: Load the
	 * response into the full, original window, canceling all other frames. In
	 * HTML5: Load the response into the top-level browsing context (that is,
	 * the browsing context that is an ancestor of the current one, and has no
	 * parent). If there is no parent, this option behaves the same way as
	 * <code>_self</code>.</li> </ul> Use this attribute only if the href
	 * attribute is present.
	 * @param target
	 */
	public function setTarget( $target )
	{
		$this->setAttribute( "target", $target );
	}
	
	/**
	 * This attribute specifies the media type in the form of a MIME type for
	 * the link target. Generally, this is provided strictly as advisory
	 * information; however, in the future a browser might add a small icon for
	 * multimedia types. For example, a browser might add a small speaker icon
	 * when type is set to audio/wav. For a complete list of recognized MIME
	 * types, see http://www.w3.org/TR/html4/references.html#ref-MIMETYPES. Use
	 * this attribute only if the href attribute is present.
	 * @param type
	 */
	public function setType( $type )
	{
		$this->setAttribute( "type", $type );
	}
}