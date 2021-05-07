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

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
	echo $form->open();
		echo (new Input)->setAttr('name', '1');
		echo (new Input)->setAttr('name', '2');
		echo (new Input)->setAttr('name', '3');
		echo (new Input)->setAttr('name', '4');
		echo (new Input)->setAttr('name', '5');
		echo (new Input)->setAttr('type', 'submit');
	echo $form->close();
	if ($_REQUEST) {
	echo $_REQUEST['1'] + $_REQUEST['2'] + $_REQUEST['3'] + $_REQUEST['4'] + $_REQUEST['5'];
	}
?>