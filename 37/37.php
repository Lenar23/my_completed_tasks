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

class FiguresCollection
{
	private $figure = [];
	
	public function add(Figure $figure) {
		$this->figure[] = $figure;
	}
	
	public function getTotalPerimeter() {
		$sum = 0;
		foreach ($this->figure as $item) {
			$sum += $item->getPerimeter();
		}
		
		return $sum;
	}
	
	public function getTotalSquare() {
		$sum = 0;
		foreach ($this->figure as $item) {
			$sum += $item->getSquare();
		}
		
		return $sum;
	}
	
}

$figuresCollection = new FiguresCollection;
	
	// Добавим парочку квадратов:
	$figuresCollection->add(new Quadrate(2));
	$figuresCollection->add(new Quadrate(3));
	
	// Добавим парочку прямоугольников:
	$figuresCollection->add(new Rectangle(2, 3));
	$figuresCollection->add(new Rectangle(3, 4));
	
	echo $figuresCollection->getTotalPerimeter();
	echo '<br>';
	echo $figuresCollection->getTotalSquare();
?>