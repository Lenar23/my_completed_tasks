<?php 
trait Helper
{
	private $name;
	private $age;
	
	public function getName() {
		return $this->name;
	}
	
	public function getAge() {
		return $this->age;
	}
	
}

class City
{
	use Helper;
	
	private $population;
	public function __construct($name, $age, $population) {
		$this->name = $name;
		$this->age = $age;
		$this->population = $population;
	}
	
	public function getPopulation() {
		return $this->population;
	}
}
/*
$city = new City('Бугульма', 233, 89000);
echo $city->getName();
echo $city->getAge();
echo $city->getPopulation();
*/

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
	private function method3() {
		return 3;
	}
}

class Test
{
	use Trait1, Trait2, Trait3; 
	public function getSum() {
		return $this->method1() + $this->method2() + $this->method3();
	}
}

$test = new Test;

echo $test->getSum();
?>