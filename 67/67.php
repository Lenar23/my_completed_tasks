<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

	interface iTag
	{
		// Геттер имени:
		public function getName();
		
		// Геттер текста:
		public function getText();
		
		// Геттер всех атрибутов:
		public function getAttrs();
		
		// Геттер одного атрибута по имени:
		public function getAttr($name);
		
		// Открывающий тег, текст и закрывающий тег:
		public function show();
		
		// Открывающий тег:
		public function open();
		
		// Закрывающий тег:
		public function close();
		
		// Установка текста:
		public function setText($text);
		
		// Установка атрибута:
		public function setAttr($name, $value = true);
		
		// Установка атрибутов:
		public function setAttrs($attrs);
		
		// Удаление атрибута:
		public function removeAttr($name);
		
		// Установка класса:
		public function addClass($className);
		
		// Удаление класса:
		public function removeClass($className);
	}

class Tag implements iTag
{
	private $name;
	private $text = '';
	private $attrs = [];
	
	public function __construct($name) {
		//echo "Tag конструктор\n";
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
		   if ($value === true) {
			   $result .= " $name";
		   }else
		      $result .= " $name = \"$value\""; 
		  }
		      return $result; 	
	   }else
              return ''; 
	   
	}
	
	public function setText($text) {
		$this->text = $text;
		return $this;
	}
	
	public function show() {
		return $this->open() . $this->getText() . $this->close();
	}
	
	public function setAttr($name, $value = true) {
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
	
	public function addClass($className) {
		if (isset($this->attrs['class'])) {
            $classNames = explode(' ', $this->attrs['class']); 
            if (!in_array($className, $classNames)) {
               $classNames[] = $className;
			   $this->attrs['class'] = implode(' ', $classNames);
			}				
	}else{
		$this->attrs['class'] = $className;
	}
	return $this;
}
	
	public function removeAttr($name) {
		$arr = [];
		foreach ($this->attrs as $key => $value) {
			if ($key == $name) {
				continue;
			}
			    $arr[$key] = $value; 
		}
		$this->attrs = $arr;
		return $this;
	}
	
	private function removeElem($elem, $arr) {
		$key = array_search($elem, $arr);
		array_splice($arr, $key, 1);
		return $arr;
	}
	
	public function removeClass($className) {
		if (isset($this->attrs['class'])) {
	       $classNames = explode(' ', $this->attrs['class']);
		   if (in_array($className, $classNames))
	          $this->attrs['class'] = implode(' ', $this->removeElem($className, $classNames));
		}
		return $this;
     }
	 
	 public function getName() {
		 return $this->name;
	 }
	 
	 public function getText() {
		return $this->text; 
	 }
	 
	 public function getAttrs() {
		 $this->attrs;
	 }
	 
	 public function getAttr($name) {
		 if (isset($this->attrs[$name])) 
			 return $this->attrs[$name];
		 else return null;
	 }
}

?>