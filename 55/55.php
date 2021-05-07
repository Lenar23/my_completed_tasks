<?php	
class User
	{
		private $name;
		private $age;
		
		public function __get($property)
		{
			return $this->$property;
		}
		
		public function __set($property, $value)
		{
			
			switch($property){
				case 'name': if ($value != '') $this->$property = $value; break;
				case 'age': if ($value >= 0 and $value <= 70) $this->$property = $value; break;
				default: echo 'Такого свойства нет'; break;
			}
		  }
		}
				
	}
?>