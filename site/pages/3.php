<?php
session_start();
if(!empty($_SESSION['auth'])){
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta charset="utf-8">
  </head>
  <body>
  <div>
  <p>
  Только для авторизованного 3.php 
  </p>
  </div>
  </body>
</html>
<?php
}else{
 echo "Вы не авторизовались <a href=\"../login.php\">Назад</a>";
}
?>