<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once '../79/79.php';

class FormHelper extends TagHelper
{
	public function openForm($attrs = []) {
		return $this->open('form', $attrs);
	}
	
	public function closeForm() {
		$this->close('form');
	}
	
	public function input($attrs = []) {
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			if (isset($_REQUEST[$name])) {
				$value = $_REQUEST[$name];
				$attrs['value'] = $value;
			}
		}
			return $this->open('input', $attrs);
	}
	
	public function password($attrs = []) {
		$attrs['type'] = 'password'; 
		return $this->open('input', $attrs);
	}

    public function hidden($attrs = []) {
		$attrs['type'] = 'hidden'; 
		return $this->open('input', $attrs);
	}
  
    public function submit($attrs = []) {
		$attrs['type'] = 'submit'; 
		return $this->open('input', $attrs);
	}
  
    public function checkbox($attrs = []) {
       $attrs['type'] = 'checkbox';
       $attrs['value']	= 1;
	   if (isset($attrs['name'])){
	   $name = $attrs['name'];
       if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
          $attrs['checked'] = true;
	   }
	      $hidden = $this->hidden(['name' => $name, 'value' => 0]);
	   }else{
		   $hidden = '';
	   }
	   
	    return $hidden . $this->open('input', $attrs);
	} 
	

    public function radio($attrs) {
       $attrs['type'] = 'radio';
       $attrs['value']	= 1;
	   if (isset($attrs['name'])){
	   $name = $attrs['name'];
       if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
          $attrs['checked'] = true;
	   }
	      $hidden = $this->hidden(['name' => $name, 'value' => 0]);
	   }else{
		  $hidden = '';
	   }
	   
	    return $hidden . $this->open('input', $attrs);
	}

	public function textarea($attrs) {
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			if (isset($_REQUEST[$name])) {
				$attrs['value'] = $_REQUEST[$name];
				return $this->show('textarea', $attrs, $attrs['value']);
			}
		}
		return $this->show('textarea', $attrs);
	}
	
	public function select($attrsSel, $attrsOpt) {
		$res = '';
		if (isset($attrsSel['name'])){
			$name = $attrsSel['name'];
			if(isset($_REQUEST[$name])){
				$value = $_REQUEST[$name];
				$res = $this->open('select', $attrsSel);
				foreach ($attrsOpt as $item) {
					if  ($value == $item['attrs']['value']) {
						$item['attrs']['value'] = 'selected';
                        $res .= $this->show('option', $item['attrs'], $item['text']);
					}
		        }
			   $res .= $this->close('select');
		   }else{
		
			   $res = $this->open('select', $attrsSel);
			   foreach ($attrsOpt as $item) {
			   $res .= $this->show('option', $item['attrs'], $item['text']);
		}			
		
		$res .= $this->close('select');
		   }	
	}
	return $res;
  }
}

$fh = new FormHelper();
	
	echo $fh->openForm(['action' => '', 'method' => 'GET']);
	echo $fh->select(
		['name' => 'list', 'class' => 'eee'],
		[
			['text' => 'item1', 'attrs' => ['value' => '1']],
			['text' => 'item2', 'attrs' => ['value' => '2']],
		 	['text' => 'item3', 'attrs' => ['value' => '3', 'class' => 'last']],
		 ]
		
	);
		//echo $fh->input(['name' => 'year']);
		//echo $fh->checkbox(['name' => 'check']);
		//echo $fh->textarea(['name' => 'message']);
		echo $fh->submit();
	echo $fh->closeForm();

	
	
	
