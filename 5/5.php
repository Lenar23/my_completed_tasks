<?php

class User
{
	public $age;
	public $name;
	
	public function isCorreсtAge($age) {
		return $age >= 18 AND $age <= 60;
	}
	
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
	
}
 $newUser = new User;
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
?>