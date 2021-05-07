<?php
ini_set('display', 'errors');
error_reporting(E_ALL);
/*class Circle
{
	const PI = 3.14;
	private $radius;
	
	public function __construct($radius) {
		$this->radius = $radius;
	}
	
	public function getSquare() {
		return self::PI * $this->radius * $this->radius;
	}
	
	public function getCircuit() {
		return 2 * self::PI * $this->radius;
	}
	
	public function name() {
		echo 'Имя класса: ' . get_class($this);
	}
}
    $circle = new Circle(10);
	//echo get_class($circle);
	$circle->name();
	
class Test1
{
	private $name;
	
	public function __construct($name) {
		$this->name = $name;
		echo '$this: '; 
		var_dump(get_class_methods($this));
		echo '<br>';
		echo 'Test1(inside class methods): ';
		var_dump(get_class_methods('Test1'));
		echo '<br>';
	}
	
	public function method1() {
		return $this->name;
	}
	
	public function method2() {
		return(true);
	}
	
	public function method3() {
		return(true);
	}
}

class Test2
{
	public $name;
	
	public function __construct($name) {
		$this->name = $name;
	}
}

$arr[] = new Test1('test1');
$arr[] = new Test2('test2');

foreach ($arr as $item) {
	echo $item->name;
	echo  '<br>';
	echo get_class($item);
	echo  '<br>';
}

$test1 = new Test1('test1');

$arr = get_class_methods($test1);
var_dump($arr);
$arr = get_class_methods('Test1');
foreach ($arr as $item) {
	echo $item;
	echo  '<br>';
}
        $test1 = new Test1('петя');
        echo '$test1: '; 
		var_dump(get_class_methods($test1));
		echo '<br>';
		echo 'Test1(outside class methods): ';
		var_dump(get_class_methods('Test1'));
		echo  '<br>';
		
		for ($i = 1; $i < count($arr); $i++) {
		  echo $test1->{$arr[$i]}();
		  echo '<br>';
}

echo class_exists('Test1');
echo class_exists('Test3');
class Test
{
public $prop1;
public $prop2;
private $prop3;
private $prop4;



public function __construct() {
	$this->prop1 = 1;
	$this->prop2 = 2;
	$this->prop3 = 3;
	$this->prop4 = 4;
	var_dump(get_class_vars('Test'));
	var_dump(get_object_vars($this));
}
}	
var_dump(get_object_vars(new Test));
var_dump(get_class_vars(get_class(new Test)));
new Test;

if (class_exists($_GET['class'])) {
	echo 'Такой класс существует.';
}
	else echo 'Такой класс не существует';

echo method_exists('Test1','method2');
echo method_exists('Test1','method4');

if (class_exists($_GET['class'])) {
	if(method_exists($_GET['class'], $_GET['method'])) {
		$test1 = new Test1('Test1');
		echo $test1->{$_GET['method']}();
	}
}


echo property_exists('Test', 'prop1');
echo property_exists('Test', 'prop3');
echo property_exists('Test', 'prop5');
$arr = ['prop1', 'prop2', 'prop3', 'prop4'];
$test = new Test;
var_dump($test);
foreach ($arr as $item) {
	if (property_exists('Test', $item))
		echo $test->$item;
}


class ParentClass
{
	
}

class ChildClass extends ParentClass
{
	public function __construct() {
		echo 'I am ' . get_parent_class() . ' son`s';
	}
}

$child = new ChildClass;

echo get_parent_class('ChildClass');

/* is_subclass_of() */
/*
class GrandParentClass
{
	
}

class ParentClass extends GrandParentClass
{
	
}

class ChildClass extends ParentClass
{
	public function __construct() {
		
	}
}
if (is_subclass_of('ChildClass', 'GrandParentClass'))
	  echo "Да класс ChildClass, является потомком GrandParentClass.\n";
else  echo "Да класс ChildClass, не является потомком GrandParentClass.\n";  

if (is_subclass_of('ChildClass', 'ParentClass'))
	  echo "Да класс ChildClass, является потомком ParentClass.\n";
else  echo "Да класс ChildClass, не является потомком ParentClass.\n";  

if (is_subclass_of('ParentClass', 'GrandParentClass'))
	  echo "Да класс ParentClass, является потомком GrandParentClass.\n";
else  echo "Да класс ParentClass, не является потомком GrandParentClass.\n"; 
*/
/* is_a() */ 

class ParentClass
{
	
}

class ChildClass extends ParentClass
{
	public function __construct() {
		//echo 'I am ' . get_parent_class() . ' son`s';
	}
}

$child = new ChildClass;
/*
if (is_a($child, 'ChildClass'))
	  echo 'Да класс $child, принадлежит классу ChildClass.';
else  echo 'Да класс $child, не принадлежит классу ChildClass.';
  
if (is_a($child, 'ParentClass'))
	  echo 'Да класс $child, является потомком ParentClass.';
else  echo 'Да класс $child, является потомком ParentClass.';
*/

/* get_declared_classes() */

var_dump(get_declared_classes());
?>