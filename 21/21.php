<?php
error_reporting(E_ALL);
class User
{
	private $name;
	private $age;
	
	public function setName($name) {
		if (strlen($name) >= 3)
		   $this->name = $name;
	}
	
	public function setAge($age) {
		$this->age = $age;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getAge() {
		return $this->age;
	}
}

class Student extends User
{
	private $course;
	
	public function setName($name) {
		if (strlen($name) <= 10)
		   parent::setName($name);
	}
	
	public function setCourse($course) {
		$this->course = $course;
	}
	
	public function getCourse() {
		return $this->course;
	}
	
	public function addNewYear() {
		$this->age++;
	}
}

$student = new Student;
$student->setAge(20);
$student->setName('Julia');
var_dump($student->getName());
?>