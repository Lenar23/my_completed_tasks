<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once '../67/67.php';

class Image extends Tag
{
	public function __construct() {
		$this->setAttr('src', '')->setAttr('alt', '');
		parent::__construct('img');
	}
	
	public function __toString() {
		return parent::open();
	}
}

$image = (new Image())->setAttr('src', 'cake.jpg')->setAttr('width', 200)->setAttr('height', 300);
echo $image;

?>