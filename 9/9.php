<?php
class Employee
 {
	
	public function __construct($var1, $var2, $var3) {
		$this->salary = $var1;
		$this->surname = $var2;
		$this->name = $var3;
	}
	
	public function getSurname() {
		return $this->surname;
	}
	
	public function getSalary() {
		return $this->salary . '$';
	}
	
	public function getName() {
		return $this->name;
	}
		
	public function setSalary($salary) {
		$this->salary = $salary;
	}
	
     private $salary;
	 private $name;
	 private $surname;
	 
	 
	
 }
 
 $emp1 = new Employee(25000, 'Петров', 'Вася');
 $emp2 = new Employee(30000, 'Васов', 'Петя');
 echo $emp1->getSalary() . ' ' . $emp2->getSalary();
?>