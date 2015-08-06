<?php

namespace hop\elements\instances\ruby;

require_once __DIR__ . "/../../HtmlElement.php";

/**
 * The HTML <code><rp></code> element is used to provide fall-back parenthesis
 * for browsers non-supporting ruby annotations. Ruby annotations are for
 * showing pronounciation of East Asian characters, like using Japanese
 * furigana or Taiwainese bopomofo characters. The <code><rp></code> element is
 * used in the case of lack of <code><ruby></code> element support its content
 * has what should be displayed in order to indicate the presence of a ruby
 * annotation, usually parentheses.
 */
class RP extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "rp" );
	}
}