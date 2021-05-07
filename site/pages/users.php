<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'site';
$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));
mysqli_query($link, "SET charset 'utf8'");
function getLink($href, $text){
	
	echo "<a href=\"profile.php?id=$href\">$text</a> ";
}
$query = "SELECT id, name FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for($data = [];$row = mysqli_fetch_assoc($result);$data[] = $row);
//var_dump($data);
foreach($data as $elem)
  getLink($elem['id'], $elem['name']);
  include 'layout.php';
?>