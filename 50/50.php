<?php
	trait TestTrait
	{
		public function method1()
		{
			return 1;
		}
		
		// Абстрактный метод:
		abstract public function method2();
	}
	
	class Test
	{
		use TestTrait; // используем трейт
		
		// Реализуем абстрактный метод:
		/*public function method2()
		{
			return 2;
		}*/
	}
	
	new Test;
?>