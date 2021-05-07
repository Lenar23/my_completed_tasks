<?php
/*
trait Trait1
{
	private function method() {
		return 1;
	}
}

trait Trait2
{
	private function method() {
		return 2;
	}
}

trait Trait3
{
	private function method() {
		return 3;
	}
}

class Test
{
	use Trait1, Trait2, Trait3 {
	Trait1::method insteadof Trait2;
	Trait1::method as method1;
	Trait2::method as method2;
	Trait3::method as method3;
	}
	public function getSum() {
		return $this->method1() + $this->method2() + $this->method3();
	}
}

$test = new Test;
echo $test->getSum();
*/
trait Trait1
	{
		private function method()
		{
			return 1;
		}
	}
	
trait Trait2
{
	private function method()
	{
		return 2;
	}
}
	
trait Trait3
{
	private function method()
	{
		return 3;
	}
}
	
class Test
{
	use Trait1, Trait2, Trait3 {
		Trait1::method insteadof Trait2; // берем метод из первого трейта
		Trait2::method as method1; // метод второго трейта будет доступен как method2
		Trait3::method as method2;
	}
	
	public function getSum()
	{
		echo $this->method() + $this->method1() + $this->method2();
	}
}
	
	$test = new Test();
	$test->getSum();
?>