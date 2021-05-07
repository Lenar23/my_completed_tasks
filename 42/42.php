<?php
interface Figure
{
	 public function getSquare();
	 public function getPerimeter();
	
}

interface Tetragon
{
	public function getA();
	public function getB();
	public function getC();
	public function getD();
}

interface Circle
{
	public function getRadius();
	publiс function getDiameter();
}

class Rectangle implements Figure, Tetragon
{
	private $a;
	private $b;
	
	public function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}
	
	public function getA() {
		return $this->a;
	public function getB() {
		return $this->b;
	}
	public function getC() {
		return $this->a;
	}
	public function getD() {
		return $this->b;
	}
	
	public function getSquare() {
		return $this->getA() * $this->getB();
	}
	
	public function getPerimeter() {
		return $this->getA() + $this->getB() + $this->getC() + $this->getD();
	}
}

class Disc implements Circle, Figure
{
  private $radius;
  const PI = 3.14;
  public function __construct($radius) {
	  $this->radius = $radius;
  }
  
  public function getRadius() {
	  return $this->radius;
  }
  public function getDiameter() {
	  return $this->radius * 2;
  }  
  
  public function getSquare() {
	return self::PI * $this->radius * $this->radius;
  }
  
 public function getPerimeter() {
		return 2 * self::PI * $this->radius;
	} 
}	
?>