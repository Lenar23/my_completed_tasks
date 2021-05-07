<?php
interface iProgrammer
{   
    public function __construct($name, $salary);
	public function getName();
	public function getSalary();
	public function getLangs();
	public function add($lang);
}

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

class Programmer extends Employee implements iProgrammer
{
	private $langs = [];
	
	public function add($lang) {
		$this->langs[]  = $lang;
	}
	
	public function getLangs() {
		return $this->langs;
	}
}

$prog = new Programmer('Ленар', 120000);
$prog->add('PHP');
$prog->add('HTML');
$prog->add('htaccess');
echo $prog->getName();
echo '<br>';
echo $prog->getSalary();
echo '<br>';
foreach ($prog->getLangs() as $item) {
	echo $item;
	echo '<br>';
}
?>