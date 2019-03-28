<?php
if(!isset($set_cookie) or $set_cookie!=1){
	die("<b>ERROR: </b>The access to this page is denied!");
}
$userId=$_SESSION['userId'];
$password=$_SESSION['password'];
$cookie_name=md5('cookie');
$cookie_value=$userId;
setcookie($cookie_name, $cookie_value, time()+86400, '/');

$cookie_name=md5($userId);
$cookie_value=$password;
setcookie($cookie_name, $cookie_value, time()+86400, '/');
$set_cookie=0;
?>