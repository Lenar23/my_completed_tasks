<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once '../67/67.php';

	class Link extends Tag
	{
		const ACTIVE = 'active';
		public function __construct() {
			$this->setAttr('href', '');
			parent::__construct('a');
		}
		
		private function activeSelf() {
			if (('/php_oop_oldcode/69/' . $this->getAttr('href')) == $_SERVER['REQUEST_URI']) // /php_oop_oldcode/69/draft.php
				$this->addClass(self::ACTIVE);
		}
		
		public function open() {
			$this->activeSelf();
			return parent::open();
		}
	}


$link1 = (new Link())->setAttr('href', '1.php')->setText('1');
$link2 = (new Link())->setAttr('href', '2.php')->setText('2');
$link3 = (new Link())->setAttr('href', '3.php')->setText('3');
$link4 = (new Link())->setAttr('href', '4.php')->setText('4');
$link5 = (new Link())->setAttr('href', '5.php')->setText('5');

?>