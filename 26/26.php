<?php
class Compare
{
	private $name;
	private $surname;
	
	public function __construct($name, $surnmae) {
		$this->name = $name;
		$this->surname = $surname;
	}
	
	public function getName() {
		
		return $this->name;
	}
	
	public function getSurname() {
		
		return $this->surname;
	}
}

function compare($obj1, $obj2) {
	if ($obj1 === $obj2)
	   return 1;
   if ($obj1 == $obj2)
	   return 0;
}
/*
$compare1 = new Compare('Коля', 'Заиров');
$compare2 = new Compare('Коля', 'Заиров');
//$compare = $compare1;
//echo $compare == $compare1;

echo compare($compare1, $compare2);
*/
class Employee
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

class EmployeesCollection
{
	private $employees = [];
	
	public function get() {
		return $this->employees;
	}
	
	public function add($newEmployee) {
		if (!in_array($newEmployee, $this->employees, true))//exists($newEmployee))
			$this->employees[] = $newEmployee;
	}
	
	/*private function exists($empl) {
		foreach ($this->employees as $employee) {
		    if ($employee === $empl)
				return true;
			
			return false;
		}
	}
	*/
}

	$employeesCollection = new EmployeesCollection;
	
	$employeesCollection->add(new Employee('Коля', 100));
	$employeesCollection->add(new Employee('Коля', 100)); // второго такого же не добавит
	
 	var_dump($employeesCollection->get()); // убедимся в этом
	
		$employeesCollection = new EmployeesCollection;
	
	$employee = new Employee('Коля', 100);
	
	$employeesCollection->add($employee);
	$employeesCollection->add($employee); // не добавит, тк тот же объект
	
	var_dump($employeesCollection->get());
?>