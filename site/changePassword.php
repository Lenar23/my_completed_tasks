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
 if (!empty($_POST['submitted'])){	
	if($_SESSION['auth']){
		$id = $_SESSION['id'];
		$query = "SELECT * FROM users WHERE id=$id";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$user = mysqli_fetch_assoc($result);
		$hash = $user['password'];
		if(password_verify($_POST['old_password'], $hash)){
			if ($_POST['new_password'] == $_POST['confirm']){
				$pass = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
				mysqli_query($link, "UPDATE users SET password='$pass' WHERE id=$id");
				$info = 'Ваш пароль успешно изменен!';
			}else{
				$info = 'Ваши пароли не совпадают';
			}
		}else{
			$info = 'Вы неверно ввели старый пароль';
		}
	
	}else{
     $info = 'Вы не авторизовались';			
  }
}
?>
<?if (isset($info)) echo $info;?> 
<form method="POST">
<label>Введите старый пароль:<input type="password" name='old_password'></label><br><br>
<label>Введите новый пароль:<input type="password" name ="new_password"></label><br><br> 
<label>Подтвердите новый пароль:<input type="password" name="confirm"></label><br><br> 
<label><input type="submit" name="submitted" value="Изменить"></label>
</form>