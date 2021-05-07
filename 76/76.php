<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once '../67/67.php';


class Form extends Tag
{
	public function __construct() {
		parent::__construct('form');
	}
}

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

class Submit extends Input
{
	public function __construct() {
		$this->setAttr('type', 'submit');
		parent::__construct();
	}
}

class Password extends Input
{
	public function __construct() {
		$this->setAttr('type', 'password');
		parent::__construct();
	}
}

class Hidden extends Input
{
	public function __construct() {
		$this->setAttr('type', 'hidden');
		parent::__construct();
	}
}

class Textarea extends Tag
{
	public function __construct() {
		parent::__construct('textarea');
	}
	
	public function open() {
		$inputName = $this->getAttr('name');
         if ($inputName) {
            if (isset($_REQUEST[$inputName])) {
				$value = $_REQUEST[$inputName];
				$this->setAttr('value', $value);
			}
		 }			 
	    return parent::open();
	}
}
	
	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
 	echo $form->open();
		echo (new Input)->setAttr('name', 'user');
		echo (new Textarea)->setAttr('name', 'message')->show();
		echo new Submit;
	echo $form->close();
?>