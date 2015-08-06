<?php

namespace hop\elements\instances;

require_once __DIR__ . "/../HtmlElement.php";

/**
 * <p>The HTML <code><meter></code> Element represents either a scalar value
 * within a known range or a fractional value.</p> Usage note: Unless the value
 * attribute is between 0 and 1 (inclusive), the min attribute and max
 * attribute should define the range so that the value attribute's value is
 * within it.
 */
class Meter extends HTMLElement
{
	/**
	 * @param value
	 * @param min
	 * @param max
	 */
	public function __construct( $value, $min, $max )
	{
		parent::__construct( "meter" );
		$this->setValue( $value );
		$this->setMin( $min );
		$this->setMax( $max );
	}
	
	/**
	 * The current numeric value. This must be between the minimum and maximum
	 * values (min attribute and max attribute) if they are specified. If
	 * unspecified or malformed, the value is 0. If specified, but not within
	 * the range given by the min attribute and max attribute, the value is
	 * equal to the nearest end of the range.
	 * @param value
	 */
	public function setValue( $value )
	{
		$this->setAttribute( "value", $value );
	}
	
	/**
	 * The lower numeric bound of the measured range. This must be less than
	 * the maximum value (max attribute), if specified. If unspecified, the
	 * minimum value is 0.
	 * @param min
	 */
	public function setMin( $min )
	{
		$this->setAttribute( "min", $min );
	}
	
	/**
	 * The upper numeric bound of the measured range. This must be greater than
	 * the minimum value (min attribute), if specified. If unspecified, the
	 * maximum value is 1.
	 * @param max
	 */
	public function setMax( $max )
	{
		$this->setAttribute( "max", $max );
	}
	
	/**
	 * The upper numeric bound of the low end of the measured range. This must
	 * be greater than the minimum value (min attribute), and it also must be
	 * less than the high value and maximum value (high attribute and max
	 * attribute, respectively), if any are specified. If unspecified, or if
	 * less than the minimum value, the low value is equal to the minimum
	 * value.
	 * @param low
	 */
	public function setLow( $low )
	{
		$this->setAttribute( "low", $low );
	}
	
	/**
	 * The lower numeric bound of the high end of the measured range. This must
	 * be less than the maximum value (max attribute), and it also must be
	 * greater than the low value and minimum value (low attribute and min
	 * attribute, respectively), if any are specified. If unspecified, or if
	 * greater than the maximum value, the high value is equal to the maximum
	 * value.
	 * @param high
	 */
	public function setHigh( $high )
	{
		$this->setAttribute( "high", $high );
	}
	
	/**
	 * This attribute indicates the optimal numeric value. It must be within
	 * the range (as defined by the min attribute and max attribute). When used
	 * with the low attribute and high attribute, it gives an indication where
	 * along the range is considered preferable. For example, if it is between
	 * the min attribute and the low attribute, then the lower range is
	 * considered preferred.
	 * @param optimum
	 */
	public function setOptimum( $optimum )
	{
		$this->setAttribute( "optimum", $optimum );
	}
	
	/**
	 * This attribute associates the element with a <code>form</code> element
	 * that has ownership of the <code>meter</code> element. For example, a
	 * <code>meter</code> might be displaying a range corresponding to an
	 * <code>input</code> element of type number. This attribute is only used
	 * if the <code>meter</code> element is being used as a form-associated
	 * element; even then, it may be omitted if the element appears as a
	 * descendant of a <code>form</code> element.
	 * @param form
	 */
	public function setForm( $form )
	{
		$this->setAttribute( "form", $form );
	}
}