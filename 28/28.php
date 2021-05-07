<?php
class Post
{
	private $name;
	private $salary;
	
	public function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}
	
	public function getNamePost() {
		
		return $this->name;
	}
}

$obj1 = new Post('Programmer', 1000);
$obj2 = new Post('Manager', 1200);
$obj3 = new Post('driver', 700);

class Employee
{
	private $name;
	private $surname;
	private $post;
	public function __construct($name, $surname, Post $post) {
		$this->name = $name;
		$this->surname = $surname;
		$this->post = $post;
	}
	
	public function getName() {
		
		return $this->name;
	}
	
	public function getSurname() {
		
		return $this->surname;
	}
	
	public function getPost() {
		
		return $this->post;
	}
	
	public function setName($name) {
		
		$this->name = $name;
	}
	
	public function setSurname($surname) {
		
		$this->surname = $surname;
	}
	
	public function changePost(Post $post) {
		$this->post = $post;
		
	}
}

$employee = new Employee('Lenar', 'Zairov', $obj1);
echo $employee->getName();
echo '<br>';
echo $employee->getSurname();
echo '<br>';
echo $employee->getPost()->getNamePost();
echo '<br>';
$employee->changePost(new Post('Teacher', 2400));
echo $employee->getName();
echo '<br>';
echo $employee->getSurname();
echo '<br>';
echo $employee->getPost()->getNamePost();
?>