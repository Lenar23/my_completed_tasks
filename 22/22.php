<?php
error_reporting(E_ALL);
class User
{
	private $name;
	private $surname;
	private $birthday;
	private $age;
	
	public function __construct($name, $surname, $birthday) {
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = $birthday;
		$this->calcAge($birthday);
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getSurname() {
		return $this->surname;
	}
	
	public function getBirthday() {
		return $this->birthday;
	}
	
	public function getAge() {
		return $this->age;
	}
	
	private function calcAge($birthday) {
		$arr_date = explode('-', $birthday);
		//var_dump($arr_date);
		$date = mktime(0, 0, 0, $arr_date[1], $arr_date[2], $arr_date[0]);
		$age = (time() - $date) / 31536000; 
		$this->age = floor(abs($age));
	}
}

class Employee extends User
{
	private $salary;
	
	public function __construct($name, $surname, $birthday, $salary) {
		parent::__construct($name, $surname, $birthday);
		$this->salary = $salary;
	}
	
	public function getSalary() {
		return $this->salary;
	}

}

$empl = new Employee('Lenar', 'Zairov', '1988-02-23', 1500); 
	
	echo $empl->getName(); 
	echo '<br>';
	echo $empl->getAge(); 
	echo '<br>';
	echo $empl->getSalary(); 
?>