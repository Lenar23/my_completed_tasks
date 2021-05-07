<?php

class Employee
{
	public $age;
	public $salary;
    public $name;
}

$emplr1 = new Employee;
$emplr1->age = 25;
$emplr1->salary = 1000;
$emplr1->name = 'Иван';

$emplr2 = new Employee;
$emplr2->age = 26;
$emplr2->salary = 2000;
$emplr2->name = 'Вася';

echo $emplr1->salary + $emplr2->salary; 
echo '<br>';
echo $emplr1->age + $emplr2->age;