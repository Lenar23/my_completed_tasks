<?php
ini_set('display', 'errors');
error_reporting(E_ALL);
	class Data
	{
		private $data = [];
		public function __construct($data = null)
		{
			if ($data == null) {
				$this->data = explode('-',date('Y-n-d'));
			} else {
				$this->data = explode('-', $data);
			}// если дата не передана - пусть берется текущая
		}
		
		public function getDay()
		{
			//$arr_data = explode('-', $this->data);// возвращает день
			return date('j', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]));
		}
		
		public function getMonth($lang = null)
		{
			//$arr_data = explode('-', $this->data);
			if ($lang == null) {
			   return date('n', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]));// возвращает месяц
			} else if ($lang == 'ru') {
				$arr_month_ru = ['декабрь', 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь'];
				return $arr_month_ru[date('n', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]))];
			}
			  else if ($lang == 'en') {
				$arr_month_en = ['december', 'january', 'february','march','april','may','june','july','august','september','october','november'];
                return $arr_month_en[date('n', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]))];				
			  }
			}
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть месяц будет словом на заданном языке
		
		
		public function getYear()
		{
			//$arr_data = explode('-', $this->data);
			return date('Y', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]));// возвращает год
		}
		
		public function getWeekDay($lang = null)
		{
			//$arr_data = explode('-', $this->data);// возвращает день недели									
			if ($lang == null) {
			   return date('w', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]));
			} else if ($lang == 'ru') {// переменная $lang может принимать значение ru или en
		 											   // если эта не пуста - пусть месяц будет словом на заданном языке
				$arr_month_ru = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
				return $arr_month_ru[date('w', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]))];
			}
			  else if ($lang == 'en') {
				$arr_month_en = ['sunday', 'monday', 'tuersday','wednesday','thursday','friday','saturday'];
                return $arr_month_en[date('w', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0]))];				
			  }  
		}
		
		public function addDay($value)
		{
			//$arr_data = explode('-', $this->data);                               
			 $this->data[2] += $value; // добавляет значение $value к дню
			 $this->data = explode('-', date('Y-n-d', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0])));
			 return $this;
			
		}
		
		public function subDay($value)
		{
			//$arr_data = explode('-', $this->data);
			 $this->data[2] -= $value; // отнимает значение $value от дня
			 $this->data = explode('-', date('Y-n-d', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0])));
			 return $this;
		}
		
		public function addMonth($value)
		{
			//$arr_data = explode('-', $this->data);
			$this->data[1] += $value; // добавляет значение $value к месяцу
			$this->data = explode('-', date('Y-n-d', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0])));
			return $this;
		}
		
		public function subMonth($value)
		{
			//$arr_data = explode('-', $this->data);
			$this->data[1] -= $value; // отнимает значение $value от месяца
			$this->data = explode('-', date('Y-n-d', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0])));
			return $this;
		}
		
		public function addYear($value)
		{
			//$arr_data = explode('-', $this->data);
			$this->data[0] += $value; // добавляет значение $value к году
			$this->data = explode('-', date('Y-n-d', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0])));
			return $this;
		}
		
		public function subYear($value)
		{
			//$arr_data = explode('-', $this->data);
			$this->data[0] -= $value; // отнимает значение $value от года
			$this->data = explode('-', date('Y-n-d', mktime(0, 0, 0, $this->data[1], $this->data[2], $this->data[0])));
			return $this;
		}
		
		public function format($format)
		{
			echo implode('-',$this->data);
		}
		
		public function __toString()
		{
			//$arr_data = explode('-', $this->data);
			//implode('-', $arr_data);
			return $this->data[0] . '-' . $this->data[1] . '-' . $this->data[2]; // выведет дату в формате 'год-месяц-день'
			
			
		}
	}
	
	$date = new Data('2025-12-31');
	
	echo $date->getYear();  // выведет '2025'
	echo '<br>';
	echo $date->getMonth(); // выведет '12'
	echo '<br>';
	echo $date->getDay();   // выведет '31'
	echo '<br>';
	echo $date->getWeekDay();     // выведет '3'
	echo '<br>';
	echo $date->getWeekDay('ru'); // выведет 'среда'
	echo '<br>';
	echo $date->getWeekDay('en'); // выведет 'wednesday'
	echo '<br>';
	echo (new Data('2025-12-31'))->addYear(1); // '2026-12-31'
	echo '<br>';
	echo (new Data('2025-12-31'))->addDay(1);  // '2026-01-01'
	echo '<br>';
	echo (new Data('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'
?>