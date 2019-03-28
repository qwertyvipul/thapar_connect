<?php
session_start();
if(!isset($_SESSION['activity_2']) or $_SESSION['activity_2']!=202){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$_SESSION['activity_1']=105;
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="thapar_connect" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Reset Password</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Thapar University Social Network"/>
<meta name="keywords" content="Thapar, Connect, Reset, password"/>
<meta name="author" content="Vipul Sharma"/>
<meta http-equiv="refresh" content=""/>

<base href="" target=""/>

<link rel="icon" href="../images/logo_1.jpg" type="image/x-icon"/>
<link type="text/css" rel="stylesheet" href="../css/portal.css"/>

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
	<div id="info">Enter your new password and you are up and ready.</div>
</div>
<div id="formbox">
	<form id="login_form" action="../php/_reset.php" method="post">
		<fieldset>
			<legend><strong>Reset Password</strong></legend>
			<table>
				<p id="message">Enter a strong and secure password.</p>
				<tr class="row"><td class="column"><input class="info" name="newPassword" type="password" placeholder="Enter New Password" required></td></tr>
				<tr class="row"><td class="column"><input class="info" name="rePassword" type="password" placeholder="Re-Enter New Password" required></td></tr>
				<tr class="row"><td class="column"><a href="#"><input id="submit_button" class="info" type="submit" value="Reset"></a></td></tr>
			</table>
		</fieldset>
	</form>
</div>
<footer id="footer_box">
	<div id="copyright_box">&copy;Copyright 2017 <strong>|</strong> All Rights Reserved <strong>|</strong> Designed and Developed by <a id="parent_link" href="https://www.facebook.com/thekrazyguy" target="_blank">Vipul Sharma</a></div>
</footer>
<body>
</html>