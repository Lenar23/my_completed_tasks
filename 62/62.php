<?php
class Tag
{
	private $name;
	private $attrs = [];
	
	public function __construct($name) {
		$this->name = $name;
	}
	
	public function open() {
		$name = $this->name;
		$attrsStr = $this->getAttrsStr($this->attrs);
		return "<$name$attrsStr>";
	}
	
	public function close() {
		$name = $this->name;
		return "</$name>";
	}
	
	private function getAttrsStr($attrs){
	   if (!empty($attrs)) {
          $result = '';
		  foreach ($attrs as $name => $value){
		      $result .= " $name = \"$value\""; 
		  }
		      return $result; 	
	   }else
              return ''; 
	   
	}
	
	public function setAttr($name, $value) {
		$this->attrs[$name] = $value;
		return $this;
	}
	
	public function setAttrs($attrs = []) {
		foreach ($attrs as $k => $v){
			$this->SetAttr($k, $v);
			//$this->attrs[$k] = $v;
		}
		
		return $this;
	}
	
	public function removeAttr($name) {
		foreach ($this->attrs as $key => $value) {
			if ($key == $name) {
				continue;
			}
			    $arr[$key] = $value; 
		}
		$this->attrs = $arr;
		return $this;
	}
}
	$tag = new Tag('input');
	
	echo $tag
		->setAttrs(['id' => 'test', 'class' => 'eee'])
		->setAttr('type', 'text')
		->open(); // выведет <input id="test" class="eee" type="text">
?>