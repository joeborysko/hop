<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><b></code> Element represents a span of text stylistically
 * different from normal text, without conveying any special importance or
 * relevance. It is typically used for keywords in a summary, product names in
 * a review, or other spans of text whose typical presentation would be
 * boldfaced. Another example of its use is to mark the lead sentence of each
 * paragraph of an article.</p> <p>Usage notes:</p> <ul>  <li>Do not confuse
 * the <code><b></code> element with the <code><strong></code>,
 * <code><em></code>, or <code><mark></code> elements. The
 * <code><strong></code> element represents text of certain importance,
 * <code><em></code> puts some emphasis on the text and the <code><mark></code>
 * element represents text of certain relevance. The <code><b></code> element
 * doesn't convey such special semantic information; use it only when no others
 * fit.</li>  <li>Similarly, do not mark titles and headings using the
 * <code><b></code> element. For this purpose, use the <code><h1></code> to
 * <code><h6></code> tags. Further, stylesheets can change the default style of
 * these elements, with the result that they are not necessarily displayed in
 * bold.</li>  <li>It is a good practice to use the class attribute on the
 * <code><b></code> in order to convey additional semantic information (for
 * example <code><b class="lede"></code> for the first sentence in a
 * paragraph). This eases the development of several stylings of a web
 * document, without the need to change its HTML code.</li>  <li>Historically,
 * the <code><b></code> element was meant to make text boldface. Styling
 * information has been deprecated since HTML4, so the meaning of the
 * <code><b></code> element has been changed.</li>  <li>If there is no semantic
 * purpose on using the <b> element, using css property font-weight with bold
 * value would be a better choice for making text bold.</li></ul>
 */
class B extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "b" );
	}
}