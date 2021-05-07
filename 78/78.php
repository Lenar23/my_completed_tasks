<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once '../67/67.php';
class Input extends Tag
{
	public function __construct() {
	 	    parent::__construct('input');
	}	
	
	public function open() {
		$inputName = $this->getAttr('name');
	if ($inputName)	{
		if (isset($_REQUEST[$inputName])){
		$value = $_REQUEST[$inputName];
		$this->setAttr('value', $value);
		}
	  }
		return parent::open();
	}
	
	public function __toString() {
		return $this->open();
	}
}
class Select extends Tag
{
	private $options = [];
	public function __construct() {
		parent::__construct('select');
	}
	
	public function add(Option $option) {
		$this->options[] = $option;
		return $this;
	}
	
	public function __toString() {
		$name = $this->getAttr('name');
		$res = '';
		if ($name) {
			if (isset($_REQUEST[$name])){
		       $value = $_REQUEST[$name];
		       foreach ($this->options as $option) {
				   if ($value == $option->getText()) {
					   $option->setAttr('selected');
					   $res = $this->open();
					   foreach ($this->options as $option) {
						   $res .= $option->show();
					   }
					   $res .= $this->close();
				   }else{
					   $option->removeAttr('selected');
				   }
			   }	
                return $res;			   
		   }else{
			   $res = $this->open();
			 foreach ($this->options as $option) {
				      $res .= $option->show();
			 }
			   $res .= $this->close();
			   return $res;
		}
		
		
	}else{
	return parent::show();
	}
  }
}
class Submit extends Input
{
	public function __construct() {
		$this->setAttr('type', 'submit');
		parent::__construct();
	}
}
class Form extends Tag
{
	public function __construct() {
		parent::__construct('form');
	}
}

class Option extends Tag
{
	public function __construct() {
		parent::__construct('option');
	}
	/*
	public function setSelected() {
		
		$this->setAttr('selected');
		
		return $this;	
	}
	*/
}
$form = (new Form)->setAttrs(['action' => '78.php', 'method' => 'GET
		']);
	
 	echo $form->open();
		echo (new Input)->setAttr('name', 'test');
		
		echo (new Select)->setAttr('name', 'list')
			->add( (new Option())->setText('item1') )
			->add( (new Option())->setText('item2') )
			->add( (new Option())->setText('item3') );
			//->show();
		
		echo new Submit;
	echo $form->close();
?>