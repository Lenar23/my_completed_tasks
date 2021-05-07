<?php
class User
{
private static $count = 0;
private $name;

public function __construct($name) {
	$this->name = $name;
	self::$count++;
}

public static function getCount() {
	
	return self::$count;
}

}
$user1 = new User('Коля');
echo User::getCount();
$user2 = new User('вася');
echo '<br>';
echo $user2::getCount();
?>