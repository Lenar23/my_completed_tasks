<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once '../67/67.php';
class HtmlList extends Tag
{
	private $items = [];
	
	public function __construct() {
		//echo "HtmlList конструктор\n";
		if ($this instanceof Ul)
		parent::__construct('ul');
	    elseif ($this instanceof Ol)
		parent::__construct('ol');
	}
	
	public function addItem(ListItem $li) {
		$this->items[] = $li;
		return $this;
	}
	/*
	public function show() {
		$result = $this->open();
		foreach ($this->items as $item)
		    $result .= $item->show();  
		$result .= $this->close();
		return $result;
	}
	*/
	public function __toString() {
		
		 $res = '';
		 $res = $this->open();
		 foreach ($this->items as $li) {
			 $res .= $li->open() . $li->getText() . $li->close();
		 }
		 $res .= $this->close();
		 
		 return $res;
	}
}
class ListItem extends Tag
{
	public function __construct() {
		
	   parent::__construct('li');	
	}
}

class Ul extends HtmlList
{
	private $items = [];
	
	public function __construct() {
		echo "Ul конструктор\n";
		parent::__construct();
	}
}

class Ol extends HtmlList
{
	private $items = [];
	
	public function __construct() {
		echo "Ol конструктор\n";
		parent::__construct();
	}
}

$ol = new Ol;
echo $ol->setAttr('class', 'zzz')
		->addItem((new ListItem())->setText('item11')->setAttr('class', 'third'))
		->addItem((new ListItem())->setText('item22'))
		->addItem((new ListItem())->setText('item33'))
/*
$list = new HtmlList('ul');
	
	echo $list->setAttr('class', 'eee')
		->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		//->show();
		*/
?>