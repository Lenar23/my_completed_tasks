<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
$db = @mysqli_connect('localhost', 'root', '', 'nail') or die('Ошибка соединения с БД');
if(!$db) die(mysqli_connect_error());
$charset = "utf8";
mysqli_set_charset($db, $charset) or die('Кодировка не установлена');
?>
