<?php //VERIFIED PHP CODE
require_once("checkpoint_1.php");
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="thapar_connect" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thapar Connect</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Thapar University Social Network"/>
<meta name="keywords" content="Thapar, Connect, University, Social, Network, College, Life, Friends, Hostel, Vipul, Sharma, Login, Sign, Up, Girls, Boys, Teachers, Students, Society, Open, Source"/>
<meta name="author" content="Vipul Sharma"/>
<meta http-equiv="refresh" content=""/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="" target=""/>

<link rel="icon" href="images/logo_1.jpg" type="image/x-icon"/>
<link type="text/css" rel="stylesheet" href="css/main.css"/>

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

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
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
		<a href="index.php"><div class="item1" id="active_menu"><i class="material-icons">&#xE88A;</i></div></a>
		<a href="#"><div class="item1"><i class="material-icons">&#xE7EF;</i></div></a>
		<a href="#"><div class="item1"><i class="material-icons">&#xE0B7;</i></div></a>
		<a href="#"><div class="item1"><i class="material-icons">&#xE7F4;</i></div></a>
		<a href="index.php"><div class="item2" id="active_menu">Home</div></a>
		<a href="#"><div class="item2">Social</div></a>
		<a href="#"><div class="item2">Messages</div></a>
		<a href="#"><div class="item2">Notifications</div></a>
		<a href="users/<?php echo($_SESSION['userId'].'/profile.php');?>" ><div class="item2">Profile</div></a>
		<div style="clear:both"></div>
	</div>
</div>
<div id="maindiv">
	<!--<input type="text" name="search" placeholder="Search.."/>-->
		<a href="users/<?php echo($_SESSION['userId'].'/profile.php');?>"><div class="tile"><i class="material-icons">&#xE853;</i><br><p class="tilename">Profile<p></div></a>
		<!--<div class="tile"><i class="material-icons">&#xE420;</i><br><p class="tilename">Friends<p></div>
		<div class="tile"><i class="material-icons">&#xE859;</i><br><p class="tilename">Teachers<p></div>
		<div class="tile"><i class="material-icons">&#xE416;</i><br><p class="tilename">Others<p></div>-->
		<div class="tile popup" onclick="myFunction()"><i class="material-icons">&#xE1B2;</i><br><p class="tilename">Webkiosk<p><ul class="popuptext" id="myPopup" type="none" ><a href="https://webkioskintra.thapar.edu:8443/?_ga=2.169539105.1277876003.1502565708-768786685.1494798560" target="_blank"><li class="poplink1">Intranet</li></a><a href="https://webkiosk.thapar.edu/index.jsp?_ga=2.88734363.1277876003.1502565708-768786685.1494798560" target="_blank"><li class="poplink2">Internet</li></a></ul></div>
		<a href="routine.html"><div class="tile"><i class="material-icons">&#xE616;</i><br><p class="tilename">Routine<p></div></a>
		<div class="tile"><i class="material-icons">&#xE000;</i><br><p class="tilename">Attendance<p></div>
		<div class="tile"><i class="material-icons">&#xE0E0;</i><br><p class="tilename">Study<p></div>
		<div class="tile"><i class="material-icons">&#xE887;</i><br><p class="tilename">Syllabus<p></div>
		<!--<div class="tile"><i class="material-icons">&#xE54B;</i><br><p class="tilename">Library<p></div>
		<div class="tile"><i class="material-icons">&#xE7EE;</i><br><p class="tilename">Hostel<p></div>
		<div class="tile"><i class="material-icons">&#xE556;</i><br><p class="tilename">Mess<p></div>
		<div class="tile"><i class="fa fa-users"></i><br><p class="tilename">Society<p></div>
		<div class="tile"><i class="material-icons">&#xE921;</i><br><p class="tilename">Sports<p></div>
		<div class="tile"><i class="material-icons">&#xE85A;</i><br><p class="tilename">Notice<p></div>
		<div class="tile"><i class="material-icons">&#xE02F;</i><br><p class="tilename">News<p></div>
		<div class="tile"><i class="material-icons">&#xE913;</i><br><p class="tilename">Admissions<p></div>
		<div class="tile"><i class="material-icons">&#xE263;</i><br><p class="tilename">Scholarship<p></div>
		<div class="tile"><i class="material-icons">&#xE80C;</i><br><p class="tilename">Placements<p></div>
		<div class="tile"><i class="material-icons">&#xE86E;</i><br><p class="tilename">Research<p></div>
		<div class="tile"><i class="material-icons">&#xE407;</i><br><p class="tilename">Campus<p></div>
		<div class="tile"><i class="material-icons">&#xE55F;</i><br><p class="tilename">Patiala<p></div>-->
		<a href="about_us.html"><div class="tile"><i class="material-icons">&#xE80B;</i><br><p class="tilename">AboutUs<p></div></a>
		<!--<div class="tile"><i class="material-icons">&#xE0B0;</i><br><p class="tilename">Help?<p></div>-->
		<a href="logout.php"><div class="tile"><i class="material-icons">&#xE0B0;</i><br><p class="tilename">Logout!<p></div></a>
	</div>
</div>
<!--<footer id="footer_box">
	<div id="copyright_box">&copy;Copyright 2017 <strong>|</strong> All Rights Reserved <strong>|</strong> Designed and Developed by <a id="parent_link" href="https://www.facebook.com/thekrazyguy" target="_blank">Vipul Sharma</a></div>
</footer>-->
<body>
</html>