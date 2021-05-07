<?php
session_start();
if(!empty($_SESSION['auth'])){
	$_SESSION['auth'] = null;
}
header("Location: /");

?>