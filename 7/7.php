<?php

 class Employee
 {
	 public $age;
	 public $name;
	 public $salary;
	 
	public function __construct($var1, $var2, $var3) {
		$this->age = $var1;
		$this->salary = $var2;
		$this->name = $var3;
	}
	
 }
 
 $emp1 = new Employee(25, 1000, 'Вася');
 $emp2 = new Employee(30, 2000, 'Петя');
 echo $emp1->salary + $emp2->salary; 
?>