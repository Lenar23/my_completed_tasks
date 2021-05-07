<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'site';
$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));
mysqli_query($link, "SET charset 'utf8'");

if($_SESSION['auth']){
	$id = $_SESSION['id'];
	$query = "SELECT * FROM users WHERE id=$id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$user = mysqli_fetch_assoc($result);
   if(!empty($_POST['submitted'])){
        $login = $_POST['login'];
		$bday = $_POST['birthday'];
		$name = $_POST['name'];
		$mid_name = $_POST['mid_name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		
		$query = "UPDATE users SET login='$login', birthday='$bday', name='$name', 
		          mid_name='$mid_name', surname='$surname', email='$email' WHERE id=$id";
		mysqli_query($link, $query) or die(mysqli_error($link));
   }else{
		$login = $user['login'];
		$bday = $user['birthday'];                                      
		$name = $user['name'];
		$mid_name = $user['mid_name'];
		$surname = $user['surname'];
		$email = $user['email'];
		$city = $user['city'];
   }   
}

?>
<form method="POST">
	<label>Введите Ваш логин:<input type="text" name="login" value="<?= $login ?>"></label><br><br>
	<label>Введите Вашу дату рождения в формате "день.месяц.год":<input type="text" name="birthday" value="<?= $user['birthday'] ?>"></label><br><br>
	<label>Введите Ваше имя:<input type="text" name="name" value="<?= $name?>"></label><br><br>
	<label>Введите Ваше отчество:<input type="text" name="mid_name" value="<?= $mid_name?>"></label><br><br>
	<label>Введите Вашу фамилию:<input type="text" name="surname" value="<?= $surname?>"></label><br><br>
	<label>Введите Ваш электронный адрес:<input type="email" name="email" value="<?= $email?>"></label><br><br>
	<label>Выберите Ваш город:
	<select name="city" size=1>
	<option value="Бугульма">Бугульма</option>
	<option value="Казань">Казань</option>
	<option value="Самара">Самара</option>
	<option value="Лениногорск">Лениногорск</option>
	<option value="Краснодар">Краснодар</option>
	</select></label><br><br> 
	<label><input type="submit" name="submitted" value="Редактировать"></label>
</form>