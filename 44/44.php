<?php
	interface iSphere
	{
		const PI = 3.14; // число ПИ как константа
		
		// Конструктор шара:
		public function __construct($radius);
		
		// Метод для нахождения объема шара:
		public function getVolume();
		
		// Метод для нахождения площади поверхности шара:
		public function getSquare();
	}
	
	class Sphere implements iSphere
	{
		public function __construct($radius) {
			$this->radius = $radius;
		}
		
		public function getVolume() {
			return 4 / 3 * self::PI * $this->radius * $this->radius;
		}
		
		public function getSquare() {
			return 4 * self::PI * $this->radius * $this->radius;
		}
	}
	
	$sphere = new Sphere(5);
	echo $sphere->getVolume();
	echo '<br>';
	echo $sphere->getSquare();
?>