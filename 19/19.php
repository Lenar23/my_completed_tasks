<?php
class User
{
	private $name;
	private $age;
	
	public function setName($name) {
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

class Employee extends User
{
	private $salary;
	
	public function setSalary($salary) {
		$this->salary = $salary;
	}
	
	public function getSalary() {
		return $this->salary;
	}
}

/*class Student extends User
{
	private $course;
	
	public function setCourse($course) {
		$this->course = $course;
	}
	
	public function getCourse() {
		return $this->course;
	}
}
$employee = new Employee;
	
	$employee->setSalary(1000); // метод класса Employee
	$employee->setName('Коля'); // метод унаследован от родителя
	$employee->setAge(25); // метод унаследован от родителя
	
	echo $employee->getSalary(); // метод класса Employee
	echo $employee->getName(); // метод унаследован от родителя
	echo $employee->getAge(); // метод унаследован от родителя
	echo '<br>';
	
	$student = new Student;
	
	$student->setCourse(3); // метод класса Student
	$student->setName('Коля'); // метод унаследован от родителя
	$student->setAge(25); // метод унаследован от родителя
	
	echo $student->getCourse(); // метод класса Student
	echo $student->getName(); // метод унаследован от родителя
	echo $student->getAge(); // метод унаследован от родителя
	*/
	
	class Programmer extends Employee
	{
        private $langs = [];
        
        public function getLangs() {
               foreach($this->langs as $lang){
			      $str .= $lang . '<br>';;
			   }  
				  return $str;
		}
		
		public function setLangs($lang) {
			$this->langs[] = $lang;
		}
	}
	
	$programmer = new Programmer;
	$programmer->setSalary(89000);
	$programmer->setName('Коля');
	$programmer->setLangs('php');
	$programmer->setLangs('html');
	$programmer->setLangs('css3');
	echo $programmer->getLangs();
	echo $programmer->getName();
	echo $programmer->getSalary();
	
	class Driver extends Employee
	{
		private $categories = [];
		private $experience;
		
		public function getLangs() {
               foreach($this->categories as $category){
			      $str .= $category . '<br>';;
			   }  
				  return $str;
		}
		
		public function setCat($category) {
			$this->categories[] = $category;
		}
		
		public function setExp($experience) {
		$this->experience = $experience;
	}
	
		public function getExp() {
			return $this->experience;
		}
	}

?>