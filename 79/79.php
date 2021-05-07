<?
class TagHelper
{
	public function open($name, $attrs = []) {
		$attrsStr = $this->getAttrsStr($attrs);
		
		return "<$name$attrsStr>";
	}
	
	public function getAttrsStr($attrs) {
		$result = '';
		if (!empty($attrs)) {
			foreach ($attrs as $k => $v) {
				if ($v === true)
					$result .= " $k";
				else
				    $result .= " $k = \"$v\""; 
			}
			return $result;
		}
	}
	
	public function show($name, $attrs = [],  $text = '') {
		return $this->open($name, $attrs) . $text . $this->close($name);
	}
	
	public function close($name) {
		return "</$name>";
	}
}
	$th = new TagHelper();
	/*
	echo $th->open('form', ['action' => 'test.php', 'method' => 'GET
		']);
		 echo $th->open('input', ['name' => 'year']);
		echo $th->open('input', ['type' => 'submit']);
	echo $th->close('form');
 */
 
