<?php
session_start();
if(!isset($_SESSION['activity_1']) or $_SESSION['activity_1']!=103){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$_SESSION['activity_1']=0;

$otp=md5($_POST['otp']);
if($_SESSION['otp']!=$otp){
	die("<b>ERROR: </b>Wrong OTP!<br>");
}else{
	$activity_2=$_SESSION['activity_2'];
	Switch($activity_2){
		case 201:
			die(header("Location:_signup.php"));
			break;
		case 202:
			die(header("Location:../portal/reset.php"));
			break;
		default:
			die("<b>ERROR: </b>Some unknown error occured!<br>");
	}
}
?>