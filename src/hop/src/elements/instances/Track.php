<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * <p>The HTML <code><track></code> element is used as a child of the media
 * elements—<code><audio></code> and <code><video></code>. It lets you
 * specify timed text tracks (or time-based data), for example to automaticaly
 * handle subtitles. The tracks are formatted in WebVTT format
 * (<code>.vtt</code> files) — Web Video Text Tracks.</p><p>The type of data
 * that <code> track</code> adds to the media is set in the <code>kind</code>
 * attribute, which can take values of <code>subtitles</code>,
 * <code>captions</code>, <code>descriptions</code>, <code>chapters</code> or
 * <code>metadata</code>. The element points to a source file containing timed
 * text that the browser exposes when the user requests additional
 * data.</p><p>A <code>media</code> element cannot have more than one
 * <code>track</code> with the same <code>kind</code>, <code>srclang</code>,
 * and <code>label</code>.</p>
 */
class Track extends EmptyElement
{
	const TRACK_KIND_SUBTITLES = "subtitles";
	const TRACK_KIND_CAPTIONS = "captions";
	const TRACK_KIND_DESCRIPTIONS = "descriptions";
	const TRACK_KIND_CHAPTERS = "chapters";
	const TRACK_KIND_METADATA = "metadata";
	
	/**
	 * @param trackSource
	 * The value of the <code>src</code> attribute of this <code><track></code>
	 */
	public function __construct( $trackSource )
	{
		parent::__construct( "track" );
		$this->setSrc( $trackSource );
	}
	
	/**
	 * This attribute indicates that the track should be enabled unless the
	 * user's preferences indicate that another track is more appropriate. This
	 * may only be used on one <code>track</code> element per media element.
	 */
	public function setDefaultYes()
	{
		$this->setAttribute( "default");
	}
	
	/**
	 * How the text track is meant to be used. If omitted the default kind is
	 * <code>subtitles</code>. The following keywords are allowed: <ul> 
	 * <li><code>subtitles</code>   <ul>    <li>Subtitles provide translation
	 * of content that cannot be understood by the viewer. For example dialogue
	 * or text that is not English in an English language film.</li>   
	 * <li>Subtitles may contain additional content, usually extra background
	 * information. For example the text at the beginning of the Star Wars
	 * films, or the date, time, and location of a scene.</li>   </ul>  </li> 
	 * <li><code>captions</code>   <ul>    <li>Closed captions provide a
	 * transcription and possibly a translation of audio.</li>    <li>It may
	 * include important non-verbal information such as music cues or sound
	 * effects. It may indicate the cue's source (e.g. music, text,
	 * character).</li>    <li>Suitable for users who are deaf or when the
	 * sound is muted.</li>   </ul>  </li>  <li><code>descriptions</code>  
	 * <ul>    <li>Textual description of the video content.</li>   
	 * <li>Suitable for users who are blind or where the video cannot be
	 * seen.</li>   </ul>  </li>  <li><code>chapters</code>   <ul>   
	 * <li>Chapter titles are intended to be used when the user is navigating
	 * the media resource.</li>   </ul>  </li>  <li><code>metadata</code>  
	 * <ul>    <li>Tracks used by scripts. Not visible to the
	 * user.</li></ul></li></ul>See the TRACK_KIND_* constants in this class.
	 * @param kind
	 */
	public function setKind( $kind )
	{
		$this->setAttribute( "kind", $kind );
	}
	
	/**
	 * A user-readable title of the text track which is used by the browser
	 * when listing available text tracks.
	 * @param label
	 */
	public function setLabel( $label )
	{
		$this->setAttribute( "label", $label );
	}
	
	/**
	 * Address of the track (<code>.vtt</code> file). Must be a valid URL. This
	 * attribute must be defined.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * Language of the track text data. It must be a valid BCP 47 language tag.
	 * If the <code>kind</code> attribute is set to <code>subtitles,</code>
	 * then <code>srclang</code> must be defined.
	 * @param srcLang
	 */
	public function setSrcLang( $srcLang )
	{
		$this->setAttribute( "srclang", $srcLang );
	}
}