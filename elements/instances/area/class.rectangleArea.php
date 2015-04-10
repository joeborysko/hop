<?php

require_once( __DIR__ . "/class.area.php" );

class RectangleArea extends Area
{
	/**
	 * RectangleArea constructor.
	 * @param int $top
	 * The minimum y-coordinate of the rectangle.
	 * @param int $left
	 * The minimum x-coordinate of the rectangle.
	 * @param int $bot
	 * the maximum y-coordinate of the rectangle.
	 * @param int $right
	 * the maximum x-coordinate of the rectangle.
	 */
	public function __construct( $top, $left, $bot, $right )
	{
		parent::__construct();
		
		$this->setShape( Area::SHAPE_RECTANGLE );
		$this->setCoords( $top, $left, $bot, $right );
	}
	
	/**
	 * Set the coordinates of the RectangleArea.
	 * @param int $top
	 * The minimum y-coordinate of the rectangle.
	 * @param int $left
	 * The minimum x-coordinate of the rectangle.
	 * @param int $bot
	 * the maximum y-coordinate of the rectangle.
	 * @param int $right
	 * the maximum x-coordinate of the rectangle.
	 */
	public function setCoords( $top, $left, $bot, $right )
	{
		parent::setCoords( $top, $left, $bot, $right );
	}
}