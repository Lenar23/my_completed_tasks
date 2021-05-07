<?php
	class SessionShell
	{
		// Удобно стартуем сессию в конструкторе класса:
		public function __construct()
		{
			if (!isset($_SESSION)) {
				session_start();
			}
		}
		
		public function set($name, $value)
		{
			$_SESSION[$name] = $value;// устанавливает переменную сессии
		}
		
		public function get($name)
		{
			return $_SESSION[$name];// получает переменную сессии
		}
		
		public function del($name)
		{
			 unset($_SESSION[$name]);// удаляет переменную сессии
		}
		
		public function exists($name)
		{
			if (isset($_SESSION[$name]))
				 return true;
			else return false;              // проверяет переменную сессии
		}
		
		public function destroy($name)
		{
			session_destroy();// разрушает сессию
		}
	}
	
	$session = new SessionShell;
	$session->set('test', 234);
	echo $session->get('test');
?>