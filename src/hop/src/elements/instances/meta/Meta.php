<?php

namespace hop\elements\instances\meta;

require_once __DIR__ . "/../../EmptyElement.php";

/**
 * <p>The HTML Meta Element (<meta>) represents any metadata information that
 * cannot be represented by one of the other HTML meta-related elements
 * (<code><base></code>, <code><link></code>, <code><script></code>,
 * <code><style></code> or <code><title></code>).</p><p>According to the
 * attributes set, the kind of metadata can be one of the following:</p><ul>
 * <li>if the <code>name</code> is set, a document-level metadata, applying to
 * the whole page;</li> <li>if the <code>http-equiv</code> is set, a pragma
 * directive, i.e. information normally given from the webserver on how the
 * webpage should be served;</li> <li>if the <code>charset</code> is set, a
 * charset declaration, i.e. the charset used for the serialized-form of the
 * webpage; HTML5</li> <li>if the <code>itemprop</code> is set, a user-defined
 * metadata, transparent for the user-agent as the semantics of the metadata is
 * user-specific. Living Standard Unimplemented</li></ul>
 */
class Meta extends EmptyElement
{
	const HTTP_EQUIV_CONTENT_SECURITY_POLICY = "Content-Security-Policy";
	const HTTP_EQUIV_DEFAULT_STYLE = "default-style";
	const HTTP_EQUIV_REFRESH = "refresh";
	const NAME_APPLICATION_NAME = "application-name";
	const NAME_AUTHOR = "author";
	const NAME_DESCRIPTION = "description";
	const NAME_GENERATOR = "generator";
	const NAME_KEYWORDS = "keywords";
	const NAME_REFERRER = "referrer";
	const NAME_CREATOR = "creator";
	const NAME_GOOGLEBOT = "googlebot";
	const NAME_PUBLISHER = "publisher";
	const NAME_ROBOTS = "robots";
	const NAME_SLURP = "slurp";
	const NAME_VIEWPORT = "viewport";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "meta" );
	}
	
	/**
	 * This attribute declares the character encoding used of the page. It can
	 * be locally overridden using the lang attribute on any element. This
	 * attribute is a literal string and must be one of the preferred MIME name
	 * for a character encoding as defined by the IANA. Though the standard
	 * doesn't request a specific character encoding, it gives some
	 * recommendations: <ul>  <li>Authors are encouraged to use UTF-8.</li> 
	 * <li>Authors should not use ASCII-incompatible encodings (i.e. those that
	 * don't map the 8-bit code points 0x20 to 0x7E to the Unicode 0x0020 to
	 * 0x007E code points) as these represent a security risk: browsers not
	 * supporting them may interpret benign content as HTML Elements. This is
	 * the case of at least the following charsets: JIS_C6226-1983,
	 * JIS_X0212-1990, HZ-GB-2312, JOHAB, the ISO-2022 family, and the EBCDIC
	 * family.</li>  <li>Authors must not use CESU-8, UTF-7, BOCU-1 and SCSU,
	 * also falling in that category and not intended to be used on the web.
	 * Cross-scripting attacks with some of these encodings have been
	 * documented.</li>  <li>Authors should not use UTF-32 because not all
	 * HTML5 encoding algorithms can distinguish it from UTF-16.</li> </ul>
	 * Notes: <ul>  <li>The declared character set must match the one of the
	 * page. There is no valid reason to declare an inaccurate character
	 * set.</li>  <li>This <code><meta></code> element must be inside the
	 * <code><head></code> element and within the 512 first bytes of the page,
	 * as some browsers only look at these first bytes before choosing a
	 * character set for the page.</li>  <li>This <code><meta></code> element
	 * is only a part of the algorithm to determine the character set of a page
	 * that browsers apply. The HTTP Content-Type header and any BOM elements
	 * have precedence over this element.</li>  <li>It is good practice, and
	 * strongly recommended, to define the character set using this attribute.
	 * If no character set is defined for a page, several cross-scripting
	 * techniques may be able to harm the page user, such as the
	 * UTF-7 fallback cross-scripting technique. Always setting this meta will
	 * protect against these risks.</li>  <li>This <code><meta></code> element
	 * is a synonym for the pre-HTML5 <code><meta http-equiv="Content-Type"
	 * content="text/html; charset=IANAcharset"> </code>where
	 * <code>IANAcharset</code> corresponds of the value of the equivalent
	 * <code>charset</code> attribute. This syntax is still allowed, although
	 * obsolete and no more recommended.</li></ul>
	 * @param charset
	 */
	public function setCharset( $charset )
	{
		$this->setAttribute( "charset", $charset );
	}
	
	/**
	 * This attribute gives the value associated with the
	 * <code>http-equiv</code> or <code>name</code> attribute, depending of the
	 * context.
	 * @param content
	 */
	public function setContent( $content )
	{
		$this->setAttribute( "content", $content );
	}
	
	/**
	 * This enumerated attribute defines the pragma that can alter servers and
	 * user-agents behavior. The value of the pragma is defined using the
	 * <code>content</code> and can be one of the following:   content-language
	 *    This pragma defines the default language of the page.  Usage note: do
	 * not use this pragma as it is obsolete. Use the global lang attribute on
	 * the <code><body></code> element instead.    Content-Security-Policy 
	 * This attribute allows web site administrators to define content policies
	 * for served resources. With a few exceptions, policies mostly involve
	 * specifiying server origins and script endpoints. This helps guard
	 * against cross-site scripting attacks.  content-type    This attribute
	 * defines the MIME type of the document, eventually followed by its
	 * character set. It follows the same syntax as the HTTP
	 * <code>content-type</code> entity-header field, but as it is inside an
	 * HTML Element, most values are not possible. Therefore the valid syntax
	 * for its content is the literal string '<code>text/html</code>'
	 * eventually followed by a character set with the following
	 * syntax:'<code>; charset=</code><code>IANAcharset</code>' where
	 * <code>IANAcharset</code> is the preferred MIME name for a character set
	 * as defined by the IANA.  Usage note:  <ul>   <li>Do not use this pragma
	 * as it is obsolete. Use the <code>charset</code> attribute on the
	 * <code><meta></code> element instead.</li>   <li>As the
	 * <code><meta></code> may not be used to change the type of a document in
	 * an XHTML document, or in an HTML5 document following the XHTML syntax,
	 * never set MIME type to an XHTML MIME type that way. It would be
	 * incorrect.</li>   <li>Only an HTML document can use the content-type, so
	 * most of it is redundant: that's why it has been obsoleted and replaced
	 * by the <code>charset</code> attribute.</li>  </ul>      default-style 
	 * This pragma specifies the preferred stylesheet to be used on the page.
	 * The <code>content</code> attribute must contain the title of a
	 * <code><link></code> element whose <code>href</code> attribute links to a
	 * CSS stylesheet, or the title of a <code><style></code> element which
	 * contains a CSS stylesheet.  refresh  This pragma specifies:  <ul>  
	 * <li>the number of seconds until the page should be reloaded, if the
	 * <code>content</code> attribute contains only a positive integer
	 * number;</li>   <li>the number of seconds until the page should be
	 * redirected to another, if the <code>content</code> attribute contains a
	 * positive integer number followed by the string '<code>;url=</code>' and
	 * a valid URL.</li>  </ul>    set-cookie    This pragma defines a cookie
	 * for the page. Its content must follows the syntax defines in the IETF
	 * HTTP Cookie Specification.  Note: Do not use this pragma as it is
	 * obsolete. Use the HTTP header set-cookie instead.See the HTTP_EQUIV_*
	 * constants in this file.
	 * @param httpEquiv
	 */
	public function setHttpEquiv( $httpEquiv )
	{
		$this->setAttribute( "http-equiv", $httpEquiv );
	}
	
	/**
	 * This attribute defines the name of a document-level metadata. It should
	 * not be set if one of the attributes <code>itemprop</code>,
	 * <code>http-equiv</code> or <code>charset</code> is also set. This
	 * document-level metadata name is associated with a value, contained by
	 * the <code>content</code> attribute. The possible values for the name
	 * element are, with their associated value, stored via the
	 * <code>content</code> attribute: <ul>  <li><code>application-name</code>,
	 * defining the name of the web application running in the webpage;   Note:
	 *   <ul>    <li>Browsers may use this to identify the application. It is
	 * different from the <code><title></code> element, which usually consist
	 * of the application name but may also contain specific information like
	 * the document name or a status;</li>    <li>Simple webpages shouldn't
	 * define the application-name meta.</li>   </ul>     </li> 
	 * <li><code>author</code>, defining, in a free format, the name of the
	 * author of the document;</li>  <li><code>description</code>, containing a
	 * short and accurate summary of the content of the page. Several browsers,
	 * among them Firefox and Opera, use this meta as the default description
	 * of the page when bookmarked;</li>  <li><code>generator</code>,
	 * containing, in a free format, the identifier to the software that
	 * generated the page;</li>  <li><code>keywords</code>, containing, as
	 * strings separated by commas, relevant words associated with the content
	 * of the page;</li>  <li><code>referrer</code>   controlling the content
	 * of the HTTP <code>Referer</code> HTTP header attached to any request
	 * sent from this document:       Values for the content of <meta
	 * name="referrer">                       <code>no-referrer</code>      Do
	 * not send a HTTP <code>Referer</code> header.               
	 * <code>origin</code>      Send the origin of the document.               
	 * <code>no-referrer-when-downgrade</code>      Send the origin as referrer
	 * to a-priori as-much-secure destination (https->https), but doesn't send
	 * a referrer to a less secure destination (https->http). This is the
	 * default behavior.                <code>origin-when-crossorigin</code>   
	 *   Send a full URL (stripped from parameters) when performing a
	 * same-origin request, but only send the origin of the document for other
	 * cases.                <code>unsafe-URL</code>      Send a full URL
	 * (stripped from parameters) when perfoming a same-origin request.        
	 *          Note: Dynamically inserting <code><meta name="referrer"></code>
	 * (by document.write or appendChild) create a non-determinism when it
	 * comes to sending referrers or not. Note also that when several
	 * conflicting policies are defined, the No-referrer policy is applied.    
	 * </li> </ul> <p>The attribute may also have a value taken from the
	 * extended list defined on WHATWG Wiki MetaExtensions page. Although none
	 * has been formally accepted yet, a few commonly used names are among the
	 * proposals:</p> <ul>  <li><code>creator</code>, defining, in a free
	 * format, the name of the creator of the document. Note that it can be the
	 * name of the institution. If there are more than one, several
	 * <code><meta></code> elements should be used;</li> 
	 * <li><code>googlebot</code>, which is a synonym of <code>robots</code>,
	 * but is only followed by Googlebot, the indexing crawler for Google;</li>
	 *  <li><code>publisher</code>, defining, in a free format, the name of the
	 * publisher of the document. Note that it can be the name of the
	 * institution;</li>  <li><code>robots</code>, defining the behavior that
	 * cooperative crawlers should have with the page. It is a comma-separated
	 * list of values taken in the following list:       Values for the content
	 * of <meta name="robots">               Value      Description      Used
	 * by                        <code>index</code>      Allows the robot to
	 * index the page      All                <code>noindex</code>     
	 * Prevents the robot from indexing the page      All               
	 * <code>follow</code>      Allows the robot to follow the links on the
	 * page      All                <code>nofollow</code>      Prevents the
	 * robot from following the links on the page      All               
	 * <code>noodp</code>      Prevents the usage of the Open Directory Project
	 * description, if any, as the description of the page in the search engine
	 * results page             <p>Google, Yahoo, Bing</p>                     
	 * <code>noarchive</code>      Prevents the search engine from caching the
	 * content of the page      Google, Yahoo               
	 * <code>nosnippet</code>      Prevents the display of any description of
	 * the page in the search engine results page      Google               
	 * <code>noimageindex</code>      Prevents this page from appearing as the
	 * referring page of an indexed image      Google               
	 * <code>noydir</code>      Prevents the usage of the Yahoo Directory
	 * description, if any, as the description of the page in the search engine
	 * results page      Yahoo                <code>nocache</code>      Synonym
	 * of <code>noarchive</code>      Bing               Notes:   <ul>   
	 * <li>Only cooperative robots will follow the rules defined by the robots
	 * name. Do not expect to keep e-mail harvesters at bay with this.</li>   
	 * <li>The robot still needs to access the page in order to read the meta
	 * value. If you want to keep them at bay, for example to prevent bandwidth
	 * consumption, use a robots.txt file instead (or in complement).</li>   
	 * <li>If you want to remove the page of an index, changing the meta to
	 * <code>noindex</code> will work, but only when the robot visit the page
	 * again. Be sure not to prevent such visits, via the robots.txt file for
	 * example. Some search engines have developers tools, allowing a quick
	 * removal of some page.</li>    <li>Some possible values are mutually
	 * exclusive, like using <code>index</code> and <code>noindex</code>, or
	 * <code>follow</code> and <code>nofollow</code>, at the same time. In
	 * these cases the behavior of the robot is undefined, and may vary from
	 * one to the other. So avoid these cases.</li>    <li>Some search engine
	 * crawler robots, like those of Google, Yahoo Search or Bing, support the
	 * same values on an HTTP directive, <code>X-Robot-Tags</code>: this allows
	 * them to use these pragma on non-HTML documents, like images.</li>  
	 * </ul>     </li>  <li><code>slurp</code>, which is a synonym of
	 * <code>robots</code>, but is only followed by Slurp, the indexing crawler
	 * for Yahoo Search;</li> </ul> <p>Finally a few names are in common use,
	 * though not in progress of being standardized:</p> <ul> 
	 * <li><code>viewport</code>, which gives hints about the size of the
	 * initial size of the viewport. This pragma is used by several mobile
	 * devices only.       Values for the content of <code><meta
	 * name="viewport"></code>               Value      Possible values     
	 * Description                        <code>width</code>      a positive
	 * integer number or the literal <code>device-width</code>      defines the
	 * width, in pixels, of the viewport                <code>height</code>    
	 *  a positive integer number of the literal <code>device-height</code>    
	 *  defines the height, in pixels, of the viewport               
	 * <code>initial-scale</code>      a positive number between
	 * <code>0.0</code> and <code>10.0</code>      defines the ratio between
	 * the device width (<code>device-width</code> in portrait mode or
	 * <code>device-height</code> in landscape mode) and the viewport size.    
	 *            <code>maximum-scale</code>      a positive number between
	 * <code>0.0</code> and <code>10.0</code>      defines the maximum value of
	 * the zoom; it must be greater or equal to the <code>minimum-scale</code>
	 * or the behavior is indeterminate.               
	 * <code>minimum-scale</code>      a positive number between
	 * <code>0.0</code> and <code>10.0</code>      defines the minimum value of
	 * the zoom; it must be smaller or equal to the <code>maximum-scale</code>
	 * or the behavior is indeterminate.               
	 * <code>user-scalable</code>      a boolean value (<code>yes</code> or
	 * <code>no</code>)      If set to <code>no</code>, the user is not able to
	 * zoom in the webpage. Default value is <code>yes</code>.                 
	 *             Specification      Status      Comment                      
	 *  CSS Device AdaptationThe definition of '<meta name="viewport">' in that
	 * specification.      Working Draft      Non-normatively describes the
	 * Viewport META element               See also: <code>@viewport</code>  
	 * Notes:   <ul>    <li>Though not standardized, this attribute is used by
	 * different mobile browsers like Safari Mobile, Firefox for Mobile or
	 * Opera Mobile.</li>    <li>The default values may change from one device,
	 * and browser, to another.</li>    <li>To learn about this pragma in
	 * Firefox for Mobile, see this article.</li></ul></li></ul>See the NAME_*
	 * constants in this class.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
}