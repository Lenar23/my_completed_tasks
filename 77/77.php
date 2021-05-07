<?
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

class Hidden extends Input
{
	public function __construct() {
		$this->setAttr('type', 'hidden');
		parent::__construct();
	}
}


class Submit extends Input
{
	public function __construct() {
		$this->setAttr('type', 'submit');
		parent::__construct();
	}
}
class Checkbox extends Tag
{
	public function __construct() {
		$this->setAttr('type', 'checkbox')->setAttr('value', 1);
		parent::__construct('input');
	}
	
	public function open() {
		$name = $this->getAttr('name');
		if ($name) {
			$hidden = (new Hidden)->setAttr('name', $name)->setAttr('value', 0);
			if (isset($_REQUEST[$name])) {
				$value = $_REQUEST[$name];
				if ($value == 1) {
					$this->setAttr('checked');
				}else{
					$this->removeAttr('checked');
				}
			}
			return $hidden->open() . parent::open();
		}else{
			return parent::open();
		}
	}
	
	public function __toString() {
		return $this->open();
	}
}

class Radio extends Tag
{
   public function __construct() {
       $this->setAttr('type', 'radio')->setAttr('value', 1);
	   parent::__construct('input');
   }

	public function open() {
		$name = $this->getAttr('name');
		if ($name) {
			$hidden = (new Hidden)->setAttr('name', $name)->setAttr('value', 0);
			if (isset($_REQUEST[$name])) {
				$value = $_REQUEST[$name];
				if ($value == 1) {
					$this->setAttr('checked');
				}else{
					$this->removeAttr('checked');
				}
			}
			return $hidden->open() . parent::open();
		}else{
			return parent::open();
		}
	}
	
	public function __toString() {
		return $this->open();
	}   
}
$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
	echo $form->open();
		echo (new Radio)->setAttr('name', 'checkbox');
		echo (new Input)->setAttr('name', 'user');
		echo new Submit;
	echo $form->close();
?>