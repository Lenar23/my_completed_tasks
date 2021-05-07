<?php
class Data
{
	public $year;
	public $month;
	public $day;
	
	public function __get($property) {
		$arr = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
		if ($property == 'weekDay') {
			echo $arr[date('w', mktime(0, 0, 0, $this->month, $this->day, $this->year))];
		}
	}
}

$data = new Data;

$data->year = 2021; 
$data->day = 20; 
$data->month = 02;
echo $data->weekDay; 

	class User
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function __get($property)
		{
			return $this->$property;
		}
		
	}
	
	$user = new User('Lenar', 32);
	echo $user->name . ' ';
	echo $user->age;
?>