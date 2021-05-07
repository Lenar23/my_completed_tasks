<?php
class Employee
 {
	
	public function __construct($var1, $var2, $var3) {
		$this->age = $var1;
		$this->salary = $var2;
		$this->name = $var3;
	}
	
	public function getAge() {
		return $this->age;
	}
	
	public function getSalary() {
		return $this->salary . '$';
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setAge($age) {
		if ($this->isCorrectAge($age))
		$this->age = $age;
	}
	
	public function setSalary($salary) {
		$this->salary = $salary;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	private function isCorreсtAge($age) {
		return $age >= 1 AND $age <= 100;
	}
	
	 private $age;
	 private $name;
	 private $salary;
	 
	 
	
 }
 
 $emp1 = new Employee(25, 1000, 'Вася');
 $emp2 = new Employee(30, 2000, 'Петя');
 echo $emp1->getSalary() . ' ' . $emp2->getSalary();
?>