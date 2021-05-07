<?php
	class ArrayAvgHelper
	{
		/*
			Находит сумму первых
			степеней элементов массива:
		*/
		public function getAvg1($arr)
		{
		   $num = $this->getSum($arr, 1) / count($arr);
		   return $this->calcSqrt($num,1);
		}
		
		/*
			Находит сумму вторых степеней
			элементов массива и извлекает
			из нее квадратный корень:
		*/
		public function getAvg2($arr)
		{
		    $num = $this->getSum($arr, 2) / count($arr);
			return $this->calcSqrt($num,2);
		}
		
		/*
			Находит сумму третьих степеней
			элементов массива и извлекает
			из нее кубический корень:
		*/
		public function getAvg3($arr)
		{
		    $num = $this->getSum($arr, 3) / count($arr);
			return $this->calcSqrt($num,3);
		}
		
		/*
			Находит сумму четвертых степеней
			элементов массива и извлекает
			из нее корень четвертой степени:
		*/
		public function getAvg4($arr)
		{
		    $num = $this->getSum($arr, 4) / count($arr);
			return $this->calcSqrt($num, 4);
		}
		
		/*
			Вспомогательный метод, который параметром
			принимает массив и степень и возвращает
			сумму степеней элементов массива:
		*/
		private function getSum($arr, $power)
		{
			$sum = 0;
		    foreach($arr as $item){
				$sum += pow($item, $power);
			}
			return $sum;
		}
		
		/*
			Вспомогательный метод, который параметром
			принимает целое число и степень и возвращает
			корень заданной степени из числа:
		*/
		private function calcSqrt($num, $power)
		{
		   return pow($num, 1/$power);
		}
	}
	
	$arrayAvgHelper = new ArrayAvgHelper; // создаем объект
	
	$arr = [1, 2, 3];
	echo $arrayAvgHelper->getAvg1($arr);	// найдем сумму элементов
	echo '<br>';
	echo $arrayAvgHelper->getAvg2($arr); // найдем сумму квадратов элементов
	echo '<br>';
	echo $arrayAvgHelper->getAvg3($arr); // найдем сумму кубов элементов
	echo '<br>';
	echo $arrayAvgHelper->getAvg4($arr);
?>