<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Mark Element (<mark>) represents highlighted text, i.e., a run
 * of text marked for reference purpose, due to its relevance in a particular
 * context. For example it can be used in a page showing search results to
 * highlight every instance of the searched-for word.</p><p>Usage notes:
 * </p><ul> <li>In a quotation or another block, the highlighted text typically
 * marks text that is referenced outside the quote, or marked for specific
 * scrutiny even though the original author didn't consider it important.</li>
 * <li>In the main text, the highlighted text typically marks text that may be
 * of special relevance for the user's current activity, like search
 * results.</li> <li>Do not use the <code><mark></code> element for syntax
 * highlighting; use the <code><span></code> element for this purpose.</li>
 * <li>Do not confuse the <code><mark></code> element with the
 * <code><strong></code> element. The <code><strong></code> element is used to
 * denote spans of text of importance in context of the text, when the
 * <code><mark></code> element is used to denote spans of text of relevance to
 * a different context.</li></ul>
 */
class Mark extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "mark" );
	}
}