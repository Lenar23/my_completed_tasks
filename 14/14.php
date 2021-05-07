<?php
class City
{
	public $name, $foundation, $population;
}

$props = ['name', 'foundation', 'population'];

$city = new City;

$city->name = 'Бугульма';
$city->foundation = '1882г.';
$city->population = 89000;

foreach($props as $prop)
  echo $city->$prop . '<br>';
  
 
	class User
	{
		public $surname; // фамилия
		public $name; // имя
		public $patronymic; // отчество
		
		public function __construct($surname, $name, $patronymic)
		{
			$this->surname = $surname;
			$this->name = $name;
			$this->patronymic = $patronymic;
		}
	}
	 
    $props = ['surname', 'name', 'patronymic'];
	$user = new User('Иванов', 'Иван', 'Иванович');
	echo $user->{$props[0]} . ' ' . $user->{$props[1]} . ' ' . $user->{$props[2]};
?>