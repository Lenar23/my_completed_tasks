<?php
interface Figure3d
{
 public function getVolume();
 public function getSurfaceSquare(); 
}

interface Figure
{
	 public function getSquare();
	 public function getPerimeter();
	
}

class Cube implements Figure3d
{
	private $a;
	
	public function __construct($a) {
		$this->a = $a;
	}
	
	public function getVolume() {
		return $this->a * $this->a * $this->a;
	}
	
	public function getSurfaceSquare() {
		return 6 * ($this->a * $this->a);
	}
}

class Quadrate implements Figure
{
	private $a;
	
	public function __construct($a) {
		$this->a = $a;
	}
	
	public function getSquare() {
		return $this->a * $this->a;
	}
	
	public function getPerimeter() {
		return 4 * $this->a;
	}
}

class Rectangle implements Figure
{
	private $a;
	private $b;
	
	public function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}
	
	public function getSquare() {
		return $this->a * $this->b;
	}
	
	public function getPerimeter() {
		return 2 * ($this->a + $this->b);
	}
}

$arr[] = new Cube(4);
$arr[] = new Cube(6);
$arr[] = new Quadrate(8);
$arr[] = new Quadrate(9);
$arr[] = new Rectangle(4, 5);
$arr[] = new Rectangle(8, 2);

foreach ($arr as $item) {
	if ($item instanceof Figure) {
		echo $item->getSquare();
		echo '<br>';
	}
	elseif ($item instanceof Figure3d) {
		echo $item->getSurfaceSquare();
		echo '<br>';
	}
}
?>