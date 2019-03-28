<?php //PERFECTION
require_once("checkpoint_2.php");
$_SESSION['activity_1']=101;
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="thapar_connect" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thapar Connect | SignUp</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Thapar University Social Network"/>
<meta name="keywords" content="Thapar, Connect, Social, Network, College, Login, Sign, Up"/>
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
	<div id="info">Thapar Connect is free and without ads and will always be.</div>
</div>
<div id="formbox">
	<form action="../php/_validate.php" method="post">
		<fieldset>
		<legend><strong>Sign Up Now To Get Connected!</strong></legend>
		<table>
			<p id="message">Please fill in the details</p>
			<tr class="row"><td class="column"><input name="firstName" class="info" class="name" id="first_name" type="text" placeholder="First Name" required></td></tr>
			<tr class="row"><td class="column"><input name="lastName" class="info" class="name" type="text" placeholder="Last Name" required></td></tr>
			<tr class="row"><td class="column"><input name="emailID" class="info" type="email" placeholder="Email ID" required></td></tr>
			<tr class="row"><td class="column"><input name="newPassword" class="info" type="password" placeholder="Enter your new password" required></td></tr>
			<tr class="row"><td class="column"><input name="rePassword" class="info" type="password" placeholder="Re-enter your password" required></td></tr>
			<tr class="row"><td class="column"><input class="info" class="button" id="submit_button" type="submit" value="Sign Up"></td></tr>
			<tr class="row"><td class="column"><a href="login.php"><input class="info" class="button" id="forgot_button" type="button" value="Already have an account login!"/></a></td></tr>
		</table>	
		</fieldset>
	</form>
</div>
<footer id="footer_box">
	<div id="copyright_box">&copy;Copyright 2017<strong>|</strong> All Rights Reserved <strong>|</strong> Designed and Developed by <a id="parent_link" href="https://www.facebook.com/thekrazyguy" target="_blank">Vipul Sharma</a></div>
</footer>
<body>
</html>