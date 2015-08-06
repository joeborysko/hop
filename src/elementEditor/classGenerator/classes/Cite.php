<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML Citation Element (<cite>) represents a reference to a creative
 * work. It must include the title of a work or a URL reference, which may be
 * in an abbreviated form according to the conventions used for the addition of
 * citation metadata.</p><p>Usage Notes:</p><ul> <li>A creative work may
 * include a book, a paper, an essay, a poem, a score, a song, a script, a
 * film, a TV show, a game, a sculpture, a painting, a theater production, a
 * play, an opera, a musical, an exhibition, a legal case report, a computer
 * program, a web site, a web page, a blog post or comment, a forum post or
 * comment, a tweet, a written or oral statement, etc.</li> <li>Use the
 * <code>cite</code> attribute on a <code><blockquote></code> or
 * <code><q></code> element to reference an online resource for a
 * source.</li></ul>
 */
class Cite extends HTMLElement
{
	/**
	 */
	public function __construct()
	{
		parent::__construct( "cite" );
	}
}