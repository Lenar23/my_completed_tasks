<?php

class User
{
	public $age;
	public $name;
	
	public function setAge($age) {
		if ($this->isCorreсtAge($age)){
			$this->age = $age;
		}
	}
	
	public function addAge($years) {
		$newAge = $this->age + $years;
		if ($this->isCorreсtAge($newAge))
			$this->age = $newAge;
	}
	
	public function subAge($years) {
		$newAge = $this->age - $years;
		if ($this->isCorreсtAge($newAge))
			$this->age = $newAge;
	}
	
	private function isCorreсtAge($age) {
		return $age >= 18 AND $age <= 60;
	}
	
}
 /*$newUser = new User;
 $newUser->age = 30;
 echo $newUser->age;
 echo '<br>';
 $newUser->setAge(59);
 echo $newUser->age;
 echo '<br>';
 $newUser->addAge(2);
 echo $newUser->age;
 $newUser->subAge(23);
 echo '<br>';
 echo $newUser->age;
 $newUser->isCorreсtAge(90);
 */
 class Student 
 {
	 public $name;
	 public $course;
	 
	 public function transferToNextCourse() {
		 if ($this->isCourseCorrect())
			 $this->course++;
	 }
	 
     private function isCourseCorrect() {
          return $this->course < 5;
	 }		 
 }
 
 $std1 = new Student();
 $std1->name = 'Leo';
 $std1->course = 3;
 echo $std1->name;
 echo '<br>';
 echo $std1->course;
 $std1->transferToNextCourse();
 echo '<br>';
 echo $std1->course;
?>