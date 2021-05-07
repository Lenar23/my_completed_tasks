<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta charset="utf-8">
  </head>
  <body>
  <header>
  <?php if(!empty($_SESSION['status'] and !empty($_SESSION['login']))){
  echo "<p>{$_SESSION['login']} {$_SESSION['status']}</p> ";
  if ($_SESSION['status'] == 'admin')
  echo "<a href=\"admin.php\">Админка</a>";
  }
  ?>
  </header>
  <main>
  <p> а это неавторизованных  </p> 
 <?php if(!empty($_SESSION['auth'])){
  echo '<p>
  Только для авторизованного index.php 
  </p>';
 }else{
	echo "Вы не авторизовались <a href=\"login.php\">Назад</a>"; 
 }
  ?>
  </main>
  <footer>
  footer
  </footer>
  </body>
</html>