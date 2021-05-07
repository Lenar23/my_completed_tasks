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

if(!empty($_POST['submitted'])){
	if(empty($_POST['pass'])){
	      $mespass = 'Вы не ввели пароль!';
	}elseif(strlen($_POST['pass']) >= 6 and strlen($_POST['pass']) <= 12){
	      $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		  
    }else{
		  $mespass = 'Пароль должен быть не менее 6 и не более 12 символов!';
	}	
	  if(($_POST['pass']) == ($_POST['confirm'])){
		 if(empty($_POST['login'])){
	       $meslog = 'Вы не ввели логин!';
	     }elseif(preg_match('#[0-9A-Za-z]#', $_POST['login']) and strlen($_POST['login']) >= 4 and strlen($_POST['login']) <= 10){ 
	        $login = $_POST['login'];
			$user = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE login='$login'"));
		 }else{
			$meslog = 'Логин должен быть в формате [0-9A-Za-z], длиной не менее 4 и не более 10 символов!';
		 }
	        if(empty($user)){
			   if(empty($_POST['birthday'])){
	             $mesbday = 'Вы не ввели дату рождения!';
	          }elseif(preg_match('#[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{4}#', $_POST['birthday'])){
	             $bday = $_POST['birthday'];
			  }else{
				 $mesbday = 'Введите сообщение в формате "день.месяц.год"';
			  }
			     if(empty($_POST['name'])){
	                    $mesname = 'Вы не ввели имя!';
			     }else{
				        $name = $_POST['name'];
			     }
				 if(empty($_POST['midname'])){
	                    $mesmid = 'Вы не ввели отчество!';
			     }else{
				        $midname = $_POST['midname'];
			     }
				 if(empty($_POST['surname'])){
	                    $messur = 'Вы не ввели фамилию!';
			     }else{
				        $surname = $_POST['surname'];
			     }
			      if(empty($_POST['email'])){
	                  $mesemail = 'Вы не ввели электронный адрес!';
	              }elseif(preg_match('#^[0-9A-za-z_.-]+@[a-z]+\.[a-z]{2,3}$#', $_POST['email'])){
	                  $email = $_POST['email'];
					  $city = $_POST['city'];
	                  $date = date('Y-m-d'); 
	                  $query = "INSERT INTO users (login, password, birthday, name, mid_name, surname, email, city, registration_date, status_id) 
					            VALUES('$login', '$pass', '$bday', '$name', '$midname','$surname', '$email', '$city','$date', 2)";
	                  mysqli_query($link, $query) or die(mysqli_error($link));
			      }else{
				      $mesemail = 'Электронный адрес должен быть в формате "^[0-9A-za-z_.-]@[a-z]\.$[a-z]{2,3}"!';
			       }
				    
	                 $_SESSION['auth'] = true;
	                 $id = mysqli_insert_id($link);
	                 $_SESSION['id'] = $id;
	}else{
		echo 'Пользователь с таким логином существует. Введите другой!';
	}
	}else{
		echo 'Ваши пароли не совпадают!';
	}
}
?>
<form method="POST">
<?php if(isset($meslog)) echo $meslog; ?><br>
<label>Введите Ваш логин:<input type="text" name="login" value="<?php if(isset($_POST['login'])) echo $_POST['login']; ?>"></label><br><br>
<?php if(isset($mespass)) echo $mespass; ?><br>
<label>Введите Ваш пароль:<input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>"></label><br><br>
<label>Введите подтвердите Ваш пароль:<input type="password" name="confirm"></label><br><br>
<?php if(isset($mesbday)) echo $mesbday; ?><br>
<label>Введите Вашу дату рождения в формате "день.месяц.год":<input type="text" name="birthday" value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>"></label><br><br>
<?php if(isset($mesname)) echo $mesname; ?><br>
<label>Введите Ваше имя:<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></label><br><br>
<?php if(isset($mesmid)) echo $mesmid; ?><br>
<label>Введите Ваше отчество:<input type="text" name="midname" value="<?php if(isset($_POST['midname'])) echo $_POST['midname']; ?>"></label><br><br>
<?php if(isset($messur)) echo $messur; ?><br>
<label>Введите Вашу фамилию:<input type="text" name="surname" value="<?php if(isset($_POST['surname'])) echo $_POST['surname']; ?>"></label><br><br>
<?php if(isset($mesemail)) echo $mesemail; ?><br>
<label>Введите Ваш электронный адрес:<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></label><br><br>
<label>Выберите Ваш город:
<select name="city" size=1>
<option value="Бугульма">Бугульма</option>
<option value="Казань">Казань</option>
<option value="Самара">Самара</option>
<option value="Лениногорск">Лениногорск</option>
<option value="Краснодар">Краснодар</option>
</select></label><br><br> 
<label><input type="submit" name="submitted" value="Зарегистрироваться"></label>
</form>