<?php
interface iUser
	{
		public function setName($name); // установить имя
		public function getName(); // получить имя
		public function setAge($age); // установить возраст
		public function getAge(); // получить возраст
	}
	
interface iEmployee extends iUser
{
	public function setSalary($salary);
	
	public function getSalary();
}

class Employee implements iEmployee
{
	private $name;
	private $age;
	private $salary;
	
	public function setName($name) {
		  $this->name = $name;
	  }
	  
	  public function setAge($age) {
		  $this->age = $age;
	  }
	  
	  public function getAge() {
		  return $this->age;
	  }
	  
	  public function getName() {
		  return $this->name;
	  }
	  
	  public function setSalary($salary) {
		$this->salary = $salary;
	}
	
	public function getSalary() {
		return $this->salary;
	}
}

$empl = new Employee;
$empl->setAge(33);
$empl->setName('Ленар');
$empl->setSalary(550);
echo $empl->getAge();
echo '<br>';
echo $empl->getName();
echo '<br>';	
echo $empl->getSalary();
?>