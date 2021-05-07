<?php
require_once 'Employee.php';

 $emp1 = new Employee(25000, 'Петров', 'Вася');
 $emp2 = new Employee(30000, 'Васов', 'Петя');
 echo $emp1->getSalary() + $emp2->getSalary() . '$';
?>