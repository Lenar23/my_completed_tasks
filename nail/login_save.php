<?php
session_start();
require_once 'bd.php';
if(!empty($_POST)){
 $users_login = $_POST['users_login'];
 $users_password = $_POST['users_password'];
 $users_login = mysqli_real_escape_string($db,trim(strip_tags($users_login)));
 $users_password = mysqli_real_escape_string($db,trim(strip_tags($users_password)));
} 
$sql_user = "SELECT count(*) FROM users WHERE users_login = '$users_login' 
        AND users_password = '$users_password'";
$query_up = mysqli_query($db, $sql_user);
$num = mysqli_fetch_row($query_up);
if($num[0] == 0) header ('Location: login.php');
else {
    $_SESSION['users_login'] = $users_login;
    header('Location: index.php');
}
