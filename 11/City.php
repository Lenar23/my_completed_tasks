<?php

class City
{
	public function __construct($var1, $var2) {
		$this->name = $var1;
		$this->population = $var2;
	}
	
	public function getName() {
		return $this->name;
	} 
	
	public function getPopulation() {
		return $this->population;
	}
	
private $name;
private $population;	
}