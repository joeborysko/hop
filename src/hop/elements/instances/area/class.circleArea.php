<?php

require_once( __DIR__ . "/class.area.php" );

class CircleArea extends Area
{
	
	/**
	 * CircleArea constructor.
	 * @param int $centerX
	 * The x coordinate of the center of the circle.
	 * @param int $centerY
	 * The y coordinate of the center of the circle.
	 * @param int $radius
	 * The radius of the circle.
	 */
	public function __construct( $centerX, $centerY, $radius )
	{
		parent::__construct();
		
		$this->setShape( Area::SHAPE_CIRCLE );
		$this->setCoords( $centerX, $centerY, $radius );
	}
	
	/**
	 * Set the coordinates of the CircleArea.
	 * @param int $top
	 * The minimum y-coordinate of the rectangle.
	 * @param int $left
	 * The minimum x-coordinate of the rectangle.
	 * @param int $bot
	 * the maximum y-coordinate of the rectangle.
	 * @param int $right
	 * the maximum x-coordinate of the rectangle.
	 */
	public function setCoords( $centerX, $centerY, $radius )
	{
		parent::setCoords( $centerX, $centerY, $radius );
	}
}