<?php
interface Figure
{
	 public function getSquare();
	 public function getPerimeter();
	
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

class Disc implements Figure
{
	private $radius;
	const PI = 3.14;
	public function __construct($radius) {
		$this->radius = $radius;
	}
	
	public function getSquare() {
		return self::PI * $this->radius * $this->radius;
	}
	
	public function getPerimeter() {
		return 2 * self::PI * $this->radius;
	}
}
$disc = new Disc(10);
echo $disc->getSquare();
echo '<br>';
echo $disc->getPerimeter();
?>