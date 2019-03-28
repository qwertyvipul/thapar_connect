<?php
session_start();
if(!isset($_SESSION['loginStatus']) or !isset($_SESSION['userId']) or !isset($_SESSION['password']) or $_SESSION['loginStatus']!=1){
	$get_cookie=1;
	require_once("php/get_cookie.php");
	if($cookie==1){
		$configconnect=1;
		require_once("php/config/connect.php");
		$check_login=1;
		require_once("php/check_login.php");
		if($loginStatus==1){
			die(header("Location:index.php"));
		}
	}
}else{
	die(header("Location:index.php"));
}
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="thapar_connect" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thapar Connect</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Welcome To Thapar University Social Network"/>
<meta name="keywords" content="Thapar, Connect, University, Social, Network, College, Life, Friends, Hostel, Vipul, Sharma, Login, Sign, Up, Girls, Boys, Teachers, Students, Society, Open, Source"/>
<meta name="author" content="Vipul Sharma"/>
<meta http-equiv="refresh" content=""/>

<base href="" target=""/>

<link rel="icon" href="images/logo_1.jpg" type="image/x-icon"/>
<link type="text/css" rel="stylesheet" href="css/portal.css"/>

<!-- For use of HTML5 styling elements in older versions of internet explorer -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

</head>
<body>
<header id="header_box">
	<div id="banner_box">
		<div id="sitename">Thapar Connect</div>
		<!-- <div id="sitelogo">TC</div> -->
		<div style="clear:both"></div>
	</div>
</header>
<div id="infobox">
	<div id="info">Welcome to the Thapar University Social Network.</div>
</div>
<div class="bigbox" id="bigbox1"><a class="bigbox_link" href="portal/login.php"><div class="bigbox_content">Login</div></a></div>
<div class="bigbox" id="bigbox2"><a class="bigbox_link" href="portal/signup.php"><div class="bigbox_content">Sign Up</div></a></div>
<footer id="footer_box">
	<div id="copyright_box">&copy;Copyright 2017 <strong>|</strong> All Rights Reserved <strong>|</strong> Designed and Developed by <a id="parent_link" href="https://www.facebook.com/thekrazyguy" target="_blank">Vipul Sharma</a></div>
</footer>
<body>
</html>