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
	
	class Interval
	{
		private $date1;
		private $date2;
		
		public function __construct(Data $date1, Data $date2)
		{
			$this->date1 = $date1;
			$this->date2 = $date2;
		}
		
		public function toDays()
		{
			return abs($this->date1->getDay() - $this->date2->getDay());// вернет разницу в днях
		}
		
		public function toMonths()
		{
			return abs($this->date1->getMonth() - $this->date2->getMonth());// вернет разницу в месяцах
		}
		
		public function toYears()
		{
			return abs($this->date1->getYear() - $this->date2->getYear());// вернет разницу в годах
		}
		
		public function __toString()
		{
			// выведет результат в виде массива
			return ['years' => $this->getYear(), 'months' => $this->getMonth(), 'days' => $this->getDay()];// ['years' => '', 'months' => '', 'days' => '']
		}
	}
	
	$date1 = new Data('2025-12-31');
	$date2 = new Data('2026-11-28');
	
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays();   // выведет разницу в днях
	echo '<br>';
	echo $interval->toMonths(); // выведет разницу в месяцах
	echo '<br>';
	echo $interval->toYears();  // выведет разницу в годах
	echo '<br>';
	print_r($interval); // массив вида ['years' => '', 'months' => '', 'days' => '']
		
?>