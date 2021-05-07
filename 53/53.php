<?php
class Arr
{
	private $nums = [];
	
	public function add($num) {
		$this->nums[] = $num;
		return $this;
	}
		
		public function __toString() {
			return (string)array_sum($this->nums);
		}
	
}

$arr = new Arr;

echo $arr->add(2)->add(3)->add(5)->add(22)->add(1)->add(52);
?>