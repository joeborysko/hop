<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * <p>The Word Break Opportunity (<code><wbr></code>) HTML element represents a
 * position within text where the browser may optionally break a line, though
 * its line-breaking rules would not otherwise create a break at that
 * location.</p><p>On UTF-8 encoded pages, <code><wbr></code> behaves like the
 * <code>U+200B</code><code> ZERO-WIDTH SPACE</code> code point. In particular,
 * it behaves like a Unicode bidi BN code point, meaning it has no effect on
 * bidi-ordering: <code><div dir=rtl>123,<wbr>456</div></code> displays, when
 * not broken on two lines, <code>123,456</code> and not
 * <code>456,123</code>.</p><p>For the same reason, the
 * <code><﻿wbr﻿></code> element does not introduce a hyphen at the line
 * break point. To make a hyphen appear only at the end of a line, use the soft
 * hyphen character entity (<code>&﻿shy;</code>) instead.</p><p>This element
 * was first implemented in Internet Explorer 5.5 and was officially defined in
 * HTML5.</p>
 */
class WBR extends EmptyElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "wbr" );
	}
}