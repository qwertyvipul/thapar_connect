<?php
session_start();
if(!isset($_SESSION['loginStatus']) or !isset($_SESSION['userId']) or !isset($_SESSION['password']) or $_SESSION['loginStatus']!=1){
	$get_cookie=1;
	require_once("../php/get_cookie.php");
	if($cookie==1){
		$configconnect=1;
		require_once("../php/config/connect.php");
		$check_login=1;
		require_once("../php/check_login.php");
		if($loginStatus==1){
			die(header("Location:../index.php"));
		}
	}
}else{
	die(header("Location:../index.php"));
}
?>