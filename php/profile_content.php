<?php
session_start();
if(!isset($profile_content) or $profile_content!=1){
	die("<b>ERROR: </b>The access to this page is denied<br>");
}
$configconnect=1;
require_once("../../php/config/connect.php");
$userId=$_SESSION['userId'];
$query="SELECT*FROM user_info WHERE UserId='$userId';";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)!=1){
	die("<b>ERROR: </b>Some unexpected error occured!<br>");
}
$row=mysqli_fetch_assoc($result);
$firstName=$row['FirstName'];
$lastName=$row['LastName'];
$name=$firstName." ".$lastName;
$emailId=$row['Email_Id'];


echo('<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="thapar_connect" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>'.$name.'</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Thapar University Social Network"/>
<meta name="keywords" content="Thapar, Connect, Profile, '.$userId.', '.$firstName.', '.$lastName.'"/>
<meta name="author" content="Vipul Sharma"/>
<meta http-equiv="refresh" content=""/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="" target=""/>

<link rel="icon" href="../../images/logo_1.jpg" type="image/x-icon"/>
<link type="text/css" rel="stylesheet" href="../../css/main.css"/>
<link type="text/css" rel="stylesheet" href="../../css/profile.css"/>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<!--FONTAWESOME ICONS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE ICONS-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
#active_menu{ color:#007799; background:#00ccff;}
</style>

</head>
<body>
<!--<header>
	<div id="bannerbox">
		<div id="sitename">Thapar Connect</div>
		<!-- <div id="sitelogo">TC</div> --
		<div style="clear:both"></div>
	</div>
</header><hr style="border:0px solid #999999;">-->
<div id="sticky-anchor"></div>
<div id="menubox">
	<div id="menu">
		<a href="../../index.php"><div class="item1" ><i class="material-icons">&#xE88A;</i></div></a>
		<a href="#"><div class="item1"><i class="material-icons">&#xE7EF;</i></div></a>
		<a href="#"><div class="item1"><i class="material-icons">&#xE0B7;</i></div></a>
		<a href="#"><div class="item1"><i class="material-icons">&#xE7F4;</i></div></a>
		<a href="../../index.php"><div class="item2">Home</div></a>
		<a href="#"><div class="item2">Social</div></a>
		<a href="#"><div class="item2">Messages</div></a>
		<a href="#"><div class="item2">Notifications</div></a>
		<a href="users/'.$_SESSION['userId'].'/profile.php"><div class="item2" id="active_menu" id="active_menu">Profile</div></a>
		<div style="clear:both"></div>
	</div>
</div>

<!--<footer id="footer_box">
	<div id="copyright_box">&copy;Copyright 2017 <strong>|</strong> All Rights Reserved <strong>|</strong> Designed and Developed by <a id="parent_link" href="https://www.facebook.com/thekrazyguy" target="_blank">Vipul Sharma</a></div>
</footer>-->
<body>
</html>');
?>