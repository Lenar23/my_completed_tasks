<?php
 class User
 {
	 public $age;
	 public $name;
	 
	 public function show($str){
		 return $str . '!!!';
	 }
 }
 
 $user1 = new User;
 $user1->age = 26;
 $user1->name = 'Ленар';
 echo $user1->show('Hello');