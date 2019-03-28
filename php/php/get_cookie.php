<?php
if(!isset($get_cookie) or $get_cookie!=1){
	die("<b>ERROR: </b>The access to this page is denied!");
}
$loginStatus=0;
$cookie=0;
$cookie_name=md5('cookie');

if(isset($_COOKIE[$cookie_name])){
	$cookie_value=$_COOKIE[$cookie_name];
	$userId=$cookie_value;
	$cookie_name=md5($cookie_value);

	if(isset($_COOKIE[$cookie_name])){
		$password=$_COOKIE[$cookie_name];
		$cookie=1;
	}
}
$get_cookie=0;
?>