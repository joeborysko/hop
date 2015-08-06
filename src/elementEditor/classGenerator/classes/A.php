<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * The HTML <code><a></code> Element (or the HTML Anchor Element) defines a
 * hyperlink, the named target destination for a hyperlink, or both.
 */
class A extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "a" );
	}
	
	/**
	 * This attribute, if present, indicates that the author intends the
	 * hyperlink to be used for downloading a resource so that when the user
	 * clicks on the link they will be prompted to save it as a local file. If
	 * the attribute has a value, the value will be used as the pre-filled file
	 * name in the Save prompt that opens when the user clicks on the link (the
	 * user can change the name before actually saving the file of course).
	 * There are no restrictions on allowed values (though <code>/</code> and
	 * <code>\</code> will be converted to underscores, preventing specific
	 * path hints), but you should consider that most file systems have
	 * limitations with regard to what punctuation is supported in file names,
	 * and browsers are likely to adjust file names accordingly.
	 *  
	 *  <p>Note:</p>
	 * 
	 *  <ul>
	 *   <li>Can be used with <code>blob:</code> URLs and <code>data:</code>
	 * URLs, to make it easy for users to download content that is generated
	 * programmatically using JavaScript (e.g. a picture created using an
	 * online drawing Web app).</li>
	 *   <li>If the HTTP header <code>Content-Disposition:</code> is present
	 * and gives a different filename than this attribute, the HTTP header has
	 * priority over this attribute.</li>
	 *   <li>If this attribute is present and <code>Content-Disposition:</code>
	 * is set to <code>inline</code>, Firefox gives priority to
	 * <code>Content-Disposition</code>, like for the filename case, while
	 * Chrome gives priority to the <code>download</code> attribute.</li>
	 *   <li>In Firefox 20 this attribute is only honored for links to
	 * resources with the same-origin.</li></ul>
	 * @param download
	 */
	public function setDownload( $download )
	{
		$this->setAttribute( "download", $download );
	}
	
	/**
	 * This was the single required attribute for anchors defining a hypertext
	 * source link, but is no longer required in HTML5. Omitting this attribute
	 * creates a placeholder link. The <code>href</code> attribute indicates
	 * the link target, either a URL or a URL fragment. A URL fragment is a
	 * name preceded by a hash mark (#), which specifies an internal target
	 * location (an ID) within the current document. URLs are not restricted to
	 * Web (HTTP)-based documents. URLs might use any protocol supported by the
	 * browser. For example, <code>file</code>, <code>ftp</code>, and
	 * <code>mailto</code> work in most user agents.
	 *  
	 *  <p>Note: You can use the special fragment "top" to create a link back
	 * to the top of the page; for example <code><a href="#top">Return to
	 * top</a></code>. This behavior is specified by HTML5.</p>
	 * @param href
	 */
	public function setHref( $href )
	{
		$this->setAttribute( "href", $href );
	}
	
	/**
	 * The 'ping' attribute, if present, sends the URLs of the resources a
	 * notification/ping if the user follows the hyperlink.
	 * @param ping
	 */
	public function setPing( $ping )
	{
		$this->setAttribute( "ping", $ping );
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
	 * This attribute specifies the media which the linked resource applies to.
	 * Its value must be a media query. This attribute is mainly useful when
	 * linking to external stylesheets by allowing the user agent to pick the
	 * best adapted one for the device it runs on.
	 *  
	 *  <p>Usage note:</p>
	 * 
	 *  <ul>
	 *   <li>In HTML 4, only simple white-space-separated list of media
	 * description literals, i.e. media types and groups, where defined and
	 * allowed as values for this attribute, like <code>print</code>,
	 * <code>screen</code>, <code>aural</code>, <code>braille</code>, ... HTML
	 * 5 extended this to any kind of media queries, which are a superset of
	 * the allowed values of HTML 4.</li>
	 *   <li>Browsers not supporting the CSS3 Media Queries won't necessarily
	 * recognize the adequate link; do not forget to set fallback links, the
	 * restricted set of media queries defined in HTML 4.</li></ul>
	 * @param media
	 */
	public function setMedia( $media )
	{
		$this->setAttribute( "media", $media );
	}
	
	/**
	 * This attribute specifies where to display the linked resource. In HTML4,
	 * this is the name of, or a keyword for, a frame. In HTML5, it is a name
	 * of, or keyword for, a browsing context (for example, tab, window, or
	 * inline frame). The following keywords have special meanings:
	 *  <ul>
	 *   <li><code>_self</code>: Load the response into the same HTML4 frame
	 * (or HTML5 browsing context) as the current one. This value is the
	 * default if the attribute is not specified.</li>
	 *   <li><code>_blank</code>: Load the response into a new unnamed HTML4
	 * window or HTML5 browsing context.</li>
	 *   <li><code>_parent</code>: Load the response into the HTML4 frameset
	 * parent of the current frame or HTML5 parent browsing context of the
	 * current one. If there is no parent, this option behaves the same way as
	 * <code>_self</code>.</li>
	 *   <li><code>_top</code>: In HTML4: Load the response into the full,
	 * original window, canceling all other frames. In HTML5: Load the response
	 * into the top-level browsing context (that is, the browsing context that
	 * is an ancestor of the current one, and has no parent). If there is no
	 * parent, this option behaves the same way as
	 * <code>_self</code>.</li></ul>
	 * @param target
	 */
	public function setTarget( $target )
	{
		$this->setAttribute( "target", $target );
	}
	
	/**
	 * This attribute indicates the language of the linked resource. It is
	 * purely advisory. Allowed values are determined by BCP47 for HTML5 and by
	 * RFC1766 for HTML4. Use this attribute only if the <code>href</code>
	 * attribute is present.
	 * @param hreflang
	 */
	public function setHreflang( $hreflang )
	{
		$this->setAttribute( "hreflang", $hreflang );
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
	
	/**
	 * Make the  link to an element within the current page.
	 * @param idElement
	 * The id attribute of the element to link to.
	 */
	public function linkWithinPage( $idElement )
	{
		$this->setAttribute( "href", "#$idElement" );
	}
	/**
	 * Make the  link to the top of the current page.
	 */
	public function linkToTopOfPage()
	{
		$this->setAttribute( "href", "#top" );
	}
}