<?php
/*abstract class User 
{
	protected $name;
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	abstract public function increaseRevenue($value);
	
	abstract public function decreaseRevenue($value);

}

class Employee extends User
{
	private $salary;
	
	public function getSalary() {
		return $this->salary;
	}
	
	public function setSalary($salary) {
		$this->salary = $salary;
	}
	
	public function increaseRevenue($value) {
		$this->salary += $value;
	}
	
	public function decreaseRevenue($value) {
		$this->salary -= $value;
	}
}

class Student extends User
{
	private $scholarship;
	
	public function getScholarship() {
		return $this->scholarship;
	}
	
	public function setScholarship($scholarship) {
		$this->scholarship = $scholarship;
	}
	
	public function increaseRevenue($value) {
		$this->scholarship += $value;
	}
	
	public function decreaseRevenue($value) {
		$this->scholarship -= $value;
	}
}

    $employee = new Employee;
	$employee->setName('Коля'); // метод родителя, т.е. класса User
	$employee->setSalary(1000); // свой метод, т.е. класса Employee
	
	echo $employee->getName(); // выведет 'Коля'
	echo $employee->getSalary(); // выведет 1000
	$employee->increaseRevenue(2000);
	echo $employee->getSalary(); // выведет 3
	$employee->decreaseRevenue(2500);
	echo $employee->getSalary();
	*/
	
abstract class Figure
{
	abstract public function getSquare();
	abstract public function getPerimeter();
	public function getRatio() {
		return $this->getSquare() / $this->getPerimeter(); 
	}
	
	public function getSquarePerimeterSum() {
		return $this->getSquare() + $this->getPerimeter(); 
	}
}

class Rectangle extends Figure
{
	private $a;
	private $b;
	
	public function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}
	
	public function getSquare() {
		return $this->a * $this->b;
	}
	
	public function getPerimeter() {
		return 2 * ($this->a + $this->b);
	}
}

class Quadrate extends Figure
{
	private $a;
	
	public function __construct($a) {
		$this->a = $a;
	}
	
	public function getSquare() {
		return $this->a * $this->a;
	}
	
	public function getPerimeter() {
		return 4 * $this->a;
	}
}

	$quadrate = new Quadrate(2);
	echo $quadrate->getSquare(); // выведет 4
	echo '<br>';
	echo $quadrate->getPerimeter(); // выведет 8
	echo '<br>';
	echo $quadrate->getRatio(); // выведет 0.5
	echo '<br>';
	echo $quadrate->getSquarePerimeterSum();
?>