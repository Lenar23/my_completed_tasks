<?php
class Arr
{
	private $nums = [];
	private $sumHelper;
	private $avgHelper;
	
	public function __construct() {
		$this->sumHelper = new SumHelper;
		$this->avgHelper = new AvgHelper;
	}
	
	public function add($num){
		$this->nums[] = $num;
	}
	
	public function getSum23() {
		$nums = $this->nums;
		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
	}
	
	public function getAvgMeanSum() {
		$nums = $this->nums;
		return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);
	}
	
}

class SumHelper{
	public function getSum2($arr) {
		return $this->getSum($arr, 2);
	}
	
	public function getSum3($arr) {
		return $this->getSum($arr, 3);
	}
	
	public function getSum($arr, $power) {
		$sum = 0;
		foreach ($arr as $item){
		    $sum += pow($item, $power);
		}
			return $sum;
	}
}

$arr = new Arr;

$arr->add(2);
$arr->add(3);
$arr->add(4);
echo $arr->getSum23();
echo '<br>';
echo $arr->getAvgMeanSum();

class AvgHelper
{
	public function getAvg($arr) {
		$sum = 0;
		foreach ($arr as $item)
		    $sum += $item / count($arr);
			
			return $sum;
	}
	
	public function getMeanSquare($arr) {
		$sum = 0;
		foreach ($arr as $item)
		   $sum += sqrt($item) / count($arr);
		   
		   return $sum;
	}
}
?>