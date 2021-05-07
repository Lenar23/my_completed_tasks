<?php
error_reporting(E_ALL);
ini_set('display errors', 'on');
session_start();
$host = 'localhost';
$user = 'root';
$pass ='';
$db = 'test';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));
mysqli_query($link,"SET NAMES 'utf8'");