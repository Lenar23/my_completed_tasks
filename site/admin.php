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

if (isset($_SESSION['auth']) and $_SESSION['status'] == 'admin'){
	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	
	
	for($data = [];$row = mysqli_fetch_assoc($result);$data[] = $row);
	
	$content = "<table border='1' cellpadding='3'><tr>
	            <th>Логин</th><th>Статус</th><th>Удаление</th><th>Смена статуса</th><th>Забанить</th>
				</tr>";
	foreach($data as $user){
		if ($user['status'] == 'user'){
		   $atribut = 'bgcolor="red"';
	       $change = 'сделать админом';
		}else{
		   $atribut = 'bgcolor="green"';
	       $change = 'сделать юзером';
		}
		
		if ($user['banned'] == 1){
			$ban = 'Разбанить';
		}else{
            $ban = 'Забанить'; 
		}			
           $content .= "<tr $atribut><td>{$user['login']}</td><td>{$user['status']}</td>
		   <td><a href=\"?id={$user['id']}\">Удалить</a></td>
		   <td><a href=\"?change={$user['id']}&status={$user['status']}\">$change</a></td><td><a href=\"?ban_id={$user['id']}&ban_val={$user['banned']}\">$ban</a></td></tr>";			
	}
	$content .= "</table>";
	
	if(!empty($_GET['ban_id'])){
		$id = $_GET['ban_id'];
	   if ($_GET['ban_val'] == 0){
		   $ban_val = 1;
	   }else{ 
		   $ban_val = 0;
	   }
		$query = "UPDATE users SET banned='$ban_val' WHERE id=$id";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
	
	if (!empty($_GET['change'])){
		$id = $_GET['change'];
		if ($_GET['status'] == 'user'){
			$status = 'admin';
		}else{
			$status = 'user';
		}
		$query  = "UPDATE users SET status='$status' WHERE id=$id";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
	
	if (!empty($_GET['id'])){
		$id = $_GET['id'];
		$query  = "DELETE FROM users WHERE id=$id";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
	
   echo $content;
   
}

?>