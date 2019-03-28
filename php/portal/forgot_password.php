<?php
require_once("checkpoint_2.php");
$_SESSION['activity_1']=104;
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="thapar_connect" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Forgot Password</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Thapar University Social Network"/>
<meta name="keywords" content="Thapar, Connect, Forgot, Reset, Password"/>
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
	<div id="info">Forgot your password? Do not worry we will help you reset it.</div>
</div>
<div id="formbox">
	<form action="../php/_forgot_password.php" method="post">
		<fieldset>
		<legend><strong>Reset Password</strong></legend>
		<table>
			<p id="message">Please Enter Your Email ID</p>
			<tr class="row"><td class="column"><input class="info" name="emailID" type="text" placeholder="Email ID"></td></tr>
			<tr class="row"><td class="column"><a href="#"><input class="info" class="button" id="submit_button" type="submit" value="Submit"></a></td></tr>
		</table>	
		</fieldset>
	</form>
</div>
<footer id="footer_box">
	<div id="copyright_box">&copy;Copyright 2017 <strong>|</strong> All Rights Reserved <strong>|</strong> Designed and Developed by <a id="parent_link" href="https://www.facebook.com/thekrazyguy" target="_blank">Vipul Sharma</a></div>
</footer>
<body>
</html>