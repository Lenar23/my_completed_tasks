<?php
trait Trait1
{
	private function method1() {
		return 1;
	}
}

trait Trait2
{
	private function method2() {
		return 2;
	}
}

trait Trait3
{
	use Trait1, Trait2;
	
	private function method3() {
        return 3;
	}		
}

class Test
{
	use Trait3;
	
	public function getSum() {
		return $this->method1() + $this->method2() + $this->method3();
	}
}

$test = new Test();
echo $test->getSum();
?>