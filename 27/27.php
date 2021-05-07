<?php
/*class Employee
{
	private $name;
	private $salary;
	
	public function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getSalary() {
		return $this->salary;
	}
}

class Student
{
	private $name;
	private $scholarship;
	
	public function __construct($name, $scholarship) {
		$this->name = $name;
		$this->scholarship = $scholarship;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getScholarship() {
		return $this->scholarship;
	}
}

function getEmployee($arr) {
	foreach ($arr as $item) {
	if ($item instanceof Employee)
		echo $item->getName();
	    echo '<br>';
	}
}

function getStudent($arr) {
	foreach ($arr as $item) {
	if ($item instanceof Student)
		echo $item->getName();
	    echo '<br>';
	}
}

function getMoneySum($arr) {
	$sum = 0;
	$sum1 = 0;
	foreach ($arr as $item) {
	if ($item instanceof Employee) {
		$sum += $item->getSalary();
	   }
	else if ($item instanceof Student) {
		$sum1 += $item->getScholarship();
	  }
	}
	
	echo $sum . '<br>' . $sum1;
}

$arr[] = new Employee('Таня', 1200);
$arr[] = new Employee('Вася', 1000);
$arr[] = new Employee('Лена', 1800);
$arr[] = new Student('Вера', 400);
$arr[] = new Student('Света', 600);
$arr[] = new Student('Дима', 500);

//getEmployee($arr);
//getStudent($arr);
getMoneySum($arr);

class User
{
	public $name;
	public $surname;
	
	public function __construct($name, $surname) {
		$this->name = $name;
		$this->surname = $surname;
	}
}

class Employee extends User
{
	private $salary;
	
	public function __construct($name, $surname, $salary) {
		parent::__construct($name, $surname);
		$this->salary = $salary;
	}
}

class City
{
	public $name;
	public $population;
	
	public function __construct($name, $population) {
		$this->name = $name;
		$this->population = $population;
	}
}

function getUser($arr) {
	foreach ($arr as $item){
	    if ($item instanceof Employee)
			continue;
		else if($item instanceof City)
			continue;
		else echo $item->name . '<br>';
	}
}

$arr[] = new User('Lenar', 'Zairov');
$arr[] = new Employee('Федя', 'Петров', 4589);
$arr[] = new Employee('Гадя', 'Петрова', 4909);
$arr[] = new User('Julia', 'Zairov');
$arr[] = new City('Бугульма', 89000);
$arr[] = new City('Лениногорск', 87000);
$arr[] = new Employee('Надя', 'Федорова', 54909);
$arr[] = new City('Альметьевск', 187000);
$arr[] = new User('Karim', 'Zairov');

getUser($arr);
*/
class Employee
{
	private $salary;
	private $name;
	
	public function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getSalary() {
		return $this->salary;
	}
}

class Student
{
	private $name;
	private $scholarship;
	
	public function __construct($name, $scholarship) {
		$this->name = $name;
		$this->scholarship = $scholarship;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getScholarship() {
		return $this->scholarship;
	}
}

class UsersCollection
{
	private $employees = [];
	private $students = [];
	
	public function add($obj) {
		if ($obj instanceof Employee)
			$this->employees[] = $obj;
		if ($obj instanceof Student)
			$this->students[] = $obj;
	}
	
	public function getTotalScholarship() {
		$sum = 0;
		foreach ($this->students as $item)
		        $sum += $item->getScholarship();
				
				return $sum;
	}
	
	public function getTotalSalary() {
		$sum = 0;
		foreach ($this->employees as $item)
		        $sum += $item->getSalary();
				
				return $sum;
	}
	
	public function getTotalPayment() {
		return $this->getTotalSalary() + $this->getTotalScholarship();
	}
}
$usersCollection = new UsersCollection;
	
	$usersCollection->add(new Student('Петя', 100));
	$usersCollection->add(new Student('Ваня', 200));
	
	$usersCollection->add(new Employee('Коля', 300));
	$usersCollection->add(new Employee('Вася', 400));
	
	// Получим полную сумму стипендий:
	echo $usersCollection->getTotalScholarship(); // выведет 300
	echo '<br>';
	// Получим полную сумму зарплат:
	echo $usersCollection->getTotalSalary(); // выведет 700
	echo '<br>';
	// Получим полную сумму платежей:
	echo $usersCollection->getTotalPayment(); // выведет 1000
?>