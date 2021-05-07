<?php
class Tag
{
	private $name;
	
	public function __construct($name) {
		$this->name = $name;
	}
	
	public function open() {
		$name = $this->name;
		return "<$name>";
	}
	
	public function close() {
		$name = $this->name;
		return "</$name>";
	}
	
}

$div = new Tag('header');
	
	echo $div->open() . 'header сайта' . $div->close();
	
	$img = new Tag('img');
	
	echo $img->open();
?>