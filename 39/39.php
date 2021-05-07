<?php
interface iCube
{
	public function __construct($a);
	public function getVolume();
	public function getSquareSurface();
}

class Cube implements iCube
{
	private $a;
	
	public function __construct($a) {
		$this->a = $a;
	}
	
	public function getVolume() {
		return $this->a * $this->a * $this->a;
	}
	
	public function getSquareSurface() {
		return 6 * ($this->a * $this->a);
	}
}

interface iUser
	{
		public function __construct($age ,$name);
		public function getName(); // получить имя
		public function getAge(); // получить возраст
	}
	
	class User implements iUser
	{
      private $name;
	  private $age;
 
      public function __construct($age, $name) {
		  $this->age = $age;
		  $this->name = $name;
	  }
	  
	  public function getAge() {
		  return $this->age;
	  }
	  
	  public function getName() {
		  return $this->name;
	  }
	}		
?>