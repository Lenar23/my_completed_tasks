<?php
class Arr
{
	public $numbers = [];
	public function add($num) {
		$this->numbers[] = $num;
		return $this;
	}
	public function getSum() {
		return array_sum($this->numbers);
	}
	
	public function append($arr) {
		foreach($arr as $item) {
			$this->numbers[] = $item;
		}
		return $this;
	}
}

	echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();
	echo '<br>';
	 
	class User
	{
		private $surname; // фамилия
		private $name; // имя
		private $patronymic; // отчество
		
		public function setSurname($surname) {
			$this->surname = $surname;
			return $this;
		}
		
		public function setName($name) {
			$this->name = $name;
			return $this;
		}
		
		public function setPatronymic($patronymic) {
			$this->patronymic = $patronymic;
			return $this;
		}
		
		public function getFullName() {
			return $this->surname[0] . $this->name[0] . $this->patronymic[0];
		}
	}
	
	echo (new User)->setName('Nиколай')->setPatronymic('Iванович')
		->setSurname('Pетров')->getFullName(); // выведет 'ПНИ'
?>