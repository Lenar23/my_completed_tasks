<?php
class ArraySumHelper
{
	public static function getSum1($arr) {
		return self::getSum($arr, 1);
	}
	
	public static function getSum2($arr) {
		return self::getSum($arr, 2);
	}
	
	public static function getSum3($arr) {
		return self::getSum($arr, 3);
	}
	
	public static function getSum4($arr) {
		return self::getSum($arr, 4);
	}
	
	public static function getSum($arr, $power) {
		$sum = 0;
		foreach ($arr as $item)
		    $sum += pow($item, $power);
			
			return $sum;
	}
}
	$arr = [4, 6, 8, 10, 11];
	
	echo ArraySumHelper::getSum2($arr);

?>