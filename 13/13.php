<?php
class Arr
{
	private $numbers = [];
	
	public function add($arr) {
		foreach($arr as $item)
		$this->numbers[] = $item;
	}
	
	public function getAvg() {
		for($i = 0; $i < count($this->numbers); $i++) {
			$res += $this->numbers[$i]/count($this->numbers);
		}
		
		return $res;
	}
}

$var = new Arr;

$var->add([2,3,5,6]);

echo $var->getAvg();
?>