<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
	class CookieShell
	{
		public function set($name, $value, $time)
		{
			setcookie($name, $value, time() + $time);
		}
		public function get($name)
		{
			if ($this->exists($name)){
				return $_COOKIE[$name];    
			}
            else return 'Такой куки нет!';		// получает куки
		}
		
		public function del($name)
		{
	        unset($_COOKIE[$name]);
		}
			
		public function exists($name)
		{
			if (isset($_COOKIE[$name]))
			    return true;
            else return false;// проверяет наличие куки
		}
		
	}
	
	
	$counter = isset($_COOKIE['test']) ? $_COOKIE['test'] : 0; 
    $csh = new CookieShell;
	$counter++;
	$csh->set('test', $counter, 3600 * 24);
	echo $csh->get('test');
	
    
	
?>