<?php
class Arr
{
	private $numbers = [];
	
	public function __construct($numbers) {
		$this->numbers = $numbers;
	}
	
	public function getSum() {
		return array_sum($this->numbers);
	}
}
echo (new Arr([1,2.3, 4, 5]))->getSum();
?>