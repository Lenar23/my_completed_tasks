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
  if(isset($_GET['id'])){
	  $id = $_GET['id'];
	
	  $query = "SELECT login, name, mid_name, surname, city, (YEAR(CURRENT_DATE())-YEAR(birthday)) AS age FROM users WHERE id=$id";
	  $result = mysqli_query($link, $query) or die(mysqli_error($link));
	  for($data = [];$row = mysqli_fetch_assoc($result); $data[] = $row);
	  $content = '<table border="1" cellpadding="5"><tr>
	              <th>Логин</th><th>Имя</th><th>Отчество</th><th>Фамилия</th><th>Город</th><th>Возраст</th>
                  </tr>';
      foreach($data as $elem)
	    $content .= '<tr align="center"><td>' . $elem['login'] . '</td><td>' . $elem['name'] . '</td><td>' . $elem['mid_name'] . '</td>
		<td>' . $elem['surname'] . '</td><td>' . $elem['city'] . '</td>
		<td>' . $elem['age'] . '</td></tr>';  
		$content .= '</table>';
		
		echo $content;
}
?>
