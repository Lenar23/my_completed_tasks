<?php  
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter']:0;
$counter++;
setcookie('counter', $counter, time() + 3600 * 24);
 echo "Вы посещали этот сайт $counter раз";
?>