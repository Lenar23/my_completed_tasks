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
if(!empty($_POST['login']) and !empty($_POST['pass'])){
	$login = $_POST['login'];
	$_SESSION['login'] = $login;
	$query = "SELECT *, statuses.name AS status FROM users LEFT JOIN statuses ON users.status_id=statuses.id WHERE login='$login'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$user = mysqli_fetch_assoc($result);
	if(!empty($user)){
		  $hash = $user['password'];
        if(password_verify($_POST['pass'], $hash)){
			if ($user['banned'] != 1) {
			   $_SESSION['auth'] = true;
			   $_SESSION['id'] = $user['id'];
               $_SESSION['status'] = $user['status'];			
		       header("Location: index.php");
			} else {
				echo "$login временно забанен!";
			}
	   }else{
		echo 'Вы неверно ввели логин или пароль!';
		echo '<form method="POST">
        Введите логин:<input type="text" name="login"><br><br>
        Введите пароль:<input type="password" name="pass"><br><br>
        <input type="submit" value="Войти"> 
        </form>';
	   }
	}else{
		
		echo 'Вы неверно ввели логин или пароль!';
		echo '<form method="POST">
        Введите логин:<input type="text" name="login"><br><br>
        Введите пароль:<input type="password" name="pass"><br><br>
        <input type="submit" value="Войти"> 
        </form>';
   }		
}else{
?>
<form method="POST">
Введите логин:<input type="text" name="login"><br><br>
Введите пароль:<input type="password" name="pass"><br><br>
<input type="submit" value="Войти"> 
</form>
<?php
}
?>