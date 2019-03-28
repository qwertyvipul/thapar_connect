<?php
session_start();
session_unset();
session_destroy();

$cookie_name=md5("cookie");
$userId=$_COOKIE[$cookie_name];
unset($_COOKIE[$cookie_name]);
setcookie($cookie_name, '', time()-3600, '/');
$cookie_name=md5($userId);
unset($_COOKIE[$cookie_name]);
setcookie($cookie_name, '', time()-3600, '/');
die(header("Location:welcome.php"));
?>