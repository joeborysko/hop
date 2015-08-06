<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../EmptyElement.php";

/**
 * The HTML <code><keygen></code> element exists to facilitate generation of
 * key material, and submission of the public key as part of an HTML form. This
 * mechanism is designed for use with Web-based certificate management systems.
 * It is expected that the <code><keygen></code> element will be used in an
 * HTML form along with other information needed to construct a certificate
 * request, and that the result of the process will be a signed certificate.
 */
class Keygen extends EmptyElement
{
	const KEY_TYPE_RSA = "RSA";
	const KEY_TYPE_DSA = "DSA";
	const KEY_TYPE_EC = "EC";
	
	/**
	 */
	public function __construct()
	{
		parent::__construct( "keygen" );
	}
	
	/**
	 * This Boolean attribute lets you specify that the control should have
	 * input focus when the page loads, unless the user overrides it, for
	 * example by typing in a different control. Only one form element in a
	 * document can have the <code>autofocus</code> attribute, which is a
	 * Boolean.
	 */
	public function setAutofocusYes()
	{
		$this->setAttribute( "autofocus");
	}
	
	/**
	 * A challenge string that is submitted along with the public key. Defaults
	 * to an empty string if not specified.
	 * @param challenge
	 */
	public function setChallenge( $challenge )
	{
		$this->setAttribute( "challenge", $challenge );
	}
	
	/**
	 * This Boolean attribute indicates that the form control is not available
	 * for interaction.
	 */
	public function setDisabledYes()
	{
		$this->setAttribute( "disabled");
	}
	
	/**
	 * The form element that this element is associated with (its form owner).
	 * The value of the attribute must be an <code>id</code> of a
	 * <code><form></code> element in the same document. If this attribute is
	 * not specified, this element must be a descendant of a
	 * <code><form></code> element. This attribute enables you to place
	 * <code><keygen> </code>elements anywhere within a document, not just as
	 * descendants of their form elements.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
	
	/**
	 * The type of key generated. The default value is <code>RSA</code>.See the
	 * KEY_TYPE_* constants in this file.
	 * @param keyType
	 */
	public function setKeyType( $keyType )
	{
		$this->setAttribute( "keytype", $keyType );
	}
	
	/**
	 * The name of the control, which is submitted with the form data.
	 * @param name
	 */
	public function setName( $name )
	{
		$this->setAttribute( "name", $name );
	}
}