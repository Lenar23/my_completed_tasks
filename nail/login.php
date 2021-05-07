<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <title>Вход в административную зону</title>  
    </head>
    <body>
        <div style="background: #ccccff; width: 350px; margin: 0 auto; 
             margin-top: 40px; border: #ccccff thick outset; padding: 5px" >
            <form action="login_save.php" method="POST">
                <label>Введите логин:</label><br>
                <input type="text" name="users_login" size="30" /><br>
                 <label>Введите пароль:</label><br>
                <input type="password" name="users_password" size="30" />
                <input type="submit" value="Вход в администартивную зону" name="submit" />
            </form>
        </div>
    </body> 
</html>