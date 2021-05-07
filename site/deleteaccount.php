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
if (isset($_POST['submitted'])){ 
	 if ($_SESSION['auth']){
		$id = $_SESSION['id'];
		$query = "SELECT * FROM users WHERE id=$id";	
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$user = mysqli_fetch_assoc($result);
		//var_dump($user);
		$hash = $user['password'];
		if (password_verify($_POST['pass'], $hash)){
			$query = "DELETE FROM users WHERE id=$id";
			mysqli_query($link, $query) or die(mysqli_error($link));
			$info = 'Ваш аккаунт удален!';
		}else{
	       $info = 'Вы неверно ввели пароль!';
		}
	}else{
	   $info = 'Вы неавторизованы!';
	}
}	
?>
<?if (isset($info)) echo $info;?> 
<form method="POST">
<label>Для удаления аккаунта введите пароль:<input type="password" name="pass"></label><br><br>
<input type="submit" name="submitted" value="Удалить аккаунт">
</form>