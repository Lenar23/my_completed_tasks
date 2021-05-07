<?php
class Num
{
	//public static $num1;
	//public static $num2;
	
	private static $num1 = 2;
	private static $num2 = 4;
	
	public static function getSum() {
		return self::$num1 + self::$num2;
	}
}

//Num::$num1 = 1;
//Num::$num2 = 2;

//echo Num::$num1 + Num::$num2;
//echo Num::getSum();

class Geometry
{
	private static $pi = 3.14;
	
	public static function getCircleSquare($radius) {
		return self::$pi * $radius * $radius;
	}
	
	public static function getCircleVolume($radius) {
		return 4 / 3 * self::$pi * $radius * $radius;
	}
	
	
}

$radius = 10;

echo Geometry::getCircleVolume($radius) . 'см3';
?>