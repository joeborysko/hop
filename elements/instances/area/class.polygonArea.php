<?php

require_once( __DIR__ . "/class.area.php" );

class PolygonArea extends Area
{
	/**
	 * PolygonArea constructor.
	 * @param array $coordinates
	 * An array of coordinates, where each index contains an array with two
	 * ints. For example, [[0,0],[10,15],[30,5],[0,0]]. If the first and last
	 * coordinates are not the same, the browser should automatically duplicate
	 * the first coordinate at the end, so the polygon is connected.
	 */
	public function __construct( array $coordinates )
	{
		parent::__construct();
		
		$this->setShape( Area::SHAPE_POLY );
		$this->setCoords( $coordinates );
	}
	
	/**
	 * Set the coordinates of the vertices at the edge of this polygon.
	 * @param array $coordinates
	 * An array of coordinates, where each index contains an array with two
	 * ints. For example, [[0,0],[10,15],[30,5],[0,0]]. If the first and last
	 * coordinates are not the same, the browser should automatically duplicate
	 * the first coordinate at the end, so the polygon is connected.
	 */
	public function setCoords( array $coordinates )
	{
		//Convert the 2D array into 1D array
		$flatCoordinates = array();
		foreach( $coordinates as $coordinate )
		{
			array_push( $flatCoordinates, $coordinate[ 0 ] );
			array_push( $flatCoordinates, $coordinate[ 1 ] );
		}
		
		//Convert the 1D array into a comma-separated string
		$coordinateString = implode( ",", $flatCoordinates );
		
		$this->setAttribute( "coords", $coordinateString );
	}
}