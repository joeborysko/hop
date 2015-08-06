<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><video></code> element is used to embed video content. It
 * may contain several video sources, represented using the <code>src</code>
 * attribute or the <code><source></code> element; the browser will choose the
 * most suitable one.</p><p>For a list of supported formats, see Media formats
 * supported by the audio and video elements.</p>
 */
class Video extends HTMLElement
{
	const CROSS_ORIGIN_ANONYMOUS = "anonymous";
	const CROSS_ORIGIN_USE_CREDENTIALS = "use-credentials";
	const PRELOAD_NONE = "none";
	const PRELOAD_METADATA = "metadata";
	const PRELOAD_AUTO = "auto";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "video" );
	}
	
	/**
	 * A Boolean attribute; if specified, the video will automatically begin to
	 * play back as soon as it can do so without stopping to finish loading the
	 * data.
	 */
	public function setAutoplayYes()
	{
		$this->setAttribute( "autoplay");
	}
	
	/**
	 * An attribute you can read to determine which time ranges of the media
	 * have been buffered. This attribute contains a <code>TimeRanges</code>
	 * object.
	 * @param buffered
	 */
	public function setBuffered( $buffered )
	{
		$this->setAttribute( "buffered", $buffered );
	}
	
	/**
	 * If this attribute is present, Gecko will offer controls to allow the
	 * user to control video playback, including volume, seeking, and
	 * pause/resume playback.
	 */
	public function setControlsYes()
	{
		$this->setAttribute( "controls");
	}
	
	/**
	 * This enumerated attribute indicates if the fetching of the related image
	 * must be done using CORS or not. CORS-enabled resources can be reused in
	 * the <code><canvas></code> element without being tainted. The allowed
	 * values are:   anonymous  A cross-origin request (i.e. with
	 * <code>Origin:</code> HTTP header) is performed. But no credential is
	 * sent (i.e. no cookie, no X.509 certificate and no HTTP Basic
	 * authentication is sent). If the server does not give credentials to the
	 * origin site (by not setting the
	 * <code>Access-Control-Allow-Origin:</code> HTTP header), the image will
	 * be tainted and its usage restricted..  use-credentials  A cross-origin
	 * request (i.e. with <code>Origin:</code> HTTP header) is performed with
	 * credential is sent (i.e. a cookie, a certificate and HTTP Basic
	 * authentication is performed). If the server does not give credentials to
	 * the origin site (through <code>Access-Control-Allow-Credentials:</code>
	 * HTTP header), the image will be tainted and its usage restricted.  When
	 * not present, the resource is fetched without a CORS request (i.e.
	 * without sending the <code>Origin:</code> HTTP header), preventing its
	 * non-tainted used in <code><canvas></code> elements. If invalid, it is
	 * handled as if the enumerated keyword anonymous was used. See CORS
	 * settings attributes for additional information.See the CROSS_ORIGIN_*
	 * constants in this class.
	 * @param crossOrigin
	 */
	public function setCrossOrigin( $crossOrigin )
	{
		$this->setAttribute( "crossorigin", $crossOrigin );
	}
	
	/**
	 * The height of the video's display area, in CSS pixels.
	 * @param height
	 */
	public function setHeight( $height )
	{
		$this->setAttribute( "height", $height );
	}
	
	/**
	 * A Boolean attribute; if specified, we will, upon reaching the end of the
	 * video, automatically seek back to the start.
	 */
	public function setLoopYes()
	{
		$this->setAttribute( "loop");
	}
	
	/**
	 * A Boolean attribute which indicates the default setting of the audio
	 * contained in the video. If set, the audio will be initially silenced.
	 * Its default value is false, meaning that the audio will be played when
	 * the video is played.
	 */
	public function setMutedYes()
	{
		$this->setAttribute( "muted");
	}
	
	/**
	 * A <code>TimeRanges</code> object indicating all the ranges of the video
	 * that have been played.
	 * @param played
	 */
	public function setPlayed( $played )
	{
		$this->setAttribute( "played", $played );
	}
	
	/**
	 * This enumerated attribute is intended to provide a hint to the browser
	 * about what the author thinks will lead to the best user experience. It
	 * may have one of the following values: <ul>  <li>none: hints that either
	 * the author thinks that the user won't need to consult that video or that
	 * the server wants to minimize its traffic; in others terms this hint
	 * indicates that the video should not be cached.</li>  <li>metadata: hints
	 * that though the author thinks that the user won't need to consult that
	 * video, fetching the metadata (e.g. length) is reasonable.</li> 
	 * <li>auto: hints that the user needs have priority; in others terms this
	 * hint indicated that, if needed, the whole video could be downloaded,
	 * even if the user is not expected to use it.</li>  <li>the empty string:
	 * which is a synonym of the auto value.</li> </ul> <p>If not set, its
	 * default value is browser-defined (i.e. each browser can choose its own
	 * default value), though the spec advises it to be set to metadata.</p>
	 * Usage notes: <ul>  <li>The <code>autoplay</code> attribute has
	 * precedence over this one as if one wants to automatically play a video,
	 * the browser will obviously need to download it. Setting both the
	 * <code>autoplay</code> and the <code>preload</code> attributes is allowed
	 * by the specification.</li>  <li>The browser is not forced by the
	 * specification to follow the value of this attribute; it is a mere
	 * hint.</li></ul>
	 * @param preload
	 */
	public function setPreload( $preload )
	{
		$this->setAttribute( "preload", $preload );
	}
	
	/**
	 * A URL indicating a poster frame to show until the user plays or seeks.
	 * If this attribute isn't specified, nothing is displayed until the first
	 * frame is available; then the first frame is displayed as the poster
	 * frame.
	 * @param poster
	 */
	public function setPoster( $poster )
	{
		$this->setAttribute( "poster", $poster );
	}
	
	/**
	 * The URL of the video to embed. This is optional; you may instead use the
	 * <code><source></code> element within the video block to specify the
	 * video to embed.
	 * @param src
	 */
	public function setSrc( $src )
	{
		$this->setAttribute( "src", $src );
	}
	
	/**
	 * The width of the video's display area, in CSS pixels.
	 * @param width
	 */
	public function setWidth( $width )
	{
		$this->setAttribute( "width", $width );
	}
}