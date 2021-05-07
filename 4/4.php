<?php
 class Employee
 {
	 public $age;
	 public $name;
	 public $salary;
	 
	 public function getAge(){
		 return $this->age;
	 }
	 
	  public function getName(){
		 return $this->name;
	 }
	 
	  public function getSalary(){
		 return $this->salary;
	 }
	 
	  public function doubleSalary(){
		 return $this->salary * 2;
	 }
	 
	  public function checkAge(){
		 if ($this->age > 18)
			 return true;
		 else
			 return false;
	 }
 }
 
 $emp1 = new Employee;
 $emp1->age = 26;
 $emp1->name = 'Ленар';
 $emp1->salary = '2000';
 
 $emp2 = new Employee;
 $emp2->age = 29;
 $emp2->name = 'Петя';
 $emp2->salary = '2700'; 
 
 $emp3 = new Employee;
 $emp3->age = 36;
 $emp3->name = 'Леонид';
 $emp3->salary = '200';
 
 echo $emp1->getSalary() + $emp2->getSalary() + $emp3->doubleSalary();
 echo '<br>';
 
 class User
 {
	 public $age;
	 public $name;
	 
	 public function setAge($age){
		 if ($age > 18)
		    $this->age = $age;
	     //else
			 //echo 'Возраст меньше 18 лет!';
	 }
 }
 
 $user1 = new User;
 $user1->age = 25;
 $user1->name = 'Коля';
 $user1->setAge(15);
 echo $user1->age;
 
 class Rectangle 
 {
	 public $width, $height;
	 
	 public function getSquare() {
		   return $this->width * $this->height;  
	 }
	 
	 public function getPerimetr() {
		   return $this->width + $this->height;  
	 }
 }