<?php
namespace Core;

class Track
{
	private $action;
	private $controller;
	private $params;
	
	public function __construct($controller, $action, $params = []) {
		$this->params = $params;
		$this->controller = $controller;
		$this->action = $action;
	}
	
	public function __get($property) {
	    return $this->$property;		
	}
}