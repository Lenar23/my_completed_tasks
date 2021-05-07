<?php
error_reporting(E_ALL);
ini_set('display errors', 'on');

$host = 'localhost';
$user = 'root';
$pass ='';
$db = 'test';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));
mysqli_query($link,"SET NAMES 'utf8'");

var_dump($_SERVER['REQUEST_URI']);
$uri = trim(preg_replace('#(\?.*)?#', '', $_SERVER['REQUEST_URI']), '/');
var_dump($uri);
if(empty($uri)){
   $uri = '/';
}	
	
$query = "SELECT * FROM pages WHERE url='$uri'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);
if(!$page){
	$query = "SELECT * FROM pages WHERE url='404'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc($result);
    header("HTTP/1.0 404 Not found");	
}
    $title = $page['title'];
	$content = $page['text'];
		  
include 'elems/layout.php';