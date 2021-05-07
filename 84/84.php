<?php
	class Validator
	{
		public function isEmail($str)
		{
			if (preg_match('#^[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$#', $str))
				return true;
			else return false;// проверяет строку на то, что она корректный email
		}
		
		public function isDomain($str)
		{
			if (preg_match('#^http|s://#', $str))
				return true;
			else return false;// проверяет строку на то, что она корректное имя домена
		}
		
		public function inRange($num, $from, $to)
		{
			if ($num > $from AND $num < $to)
				return true;
			else return false;// проверяет число на то, что оно входит в диапазон
		}
		
		public function inLength($str, $from, $to)
		{
			if (strlen($str) > $from AND strlen($str) < $to)
				return true;
			else return false;// проверяет строку на то, что ее длина входит в диапазон
		}
	}
	
	$val = new Validator;
	
	echo $val->isEmail('jordan-lenar.vip@mail.ru');
	echo '<br>';
	echo $val->isDomain('htt://tatneft.ru');
	echo '<br>';
	
?>