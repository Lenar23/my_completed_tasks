<?php
include '../elems/init.php';

if(isset($_POST['pass']) and md5($_POST['pass']) == '202cb962ac59075b964b07152d234b70'){
   $_SESSION['auth'] = true;

   $_SESSION['message'] = ['text' => 'Youe login successfully', 'status' => 'success'];
   header('Location: /admin/'); die();
}elseif(isset($_POST['pass']) and md5($_POST['pass']) !== '202cb962ac59075b964b07152d234b70'){
?>
<form action="" method="POST">
<input type="password" name="pass">
<input type="submit" value="Log in">
</form>
<?php
echo '<p>Вы ввели не правильный пароль!</p>';
}else{  
?>
<form action="" method="POST">
<input type="password" name="pass">
<input type="submit" value="Log in">
</form>
<?php
}
?>