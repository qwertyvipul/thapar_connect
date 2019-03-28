<?php
session_start();
if(!isset($_SESSION['activity_1']) or $_SESSION['activity_1']!=105){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$configconnect=1;
require_once('config/connect.php');

$emailID=$_SESSION['emailID'];
$newPassword=md5($_POST['newPassword']);
$rePassword=md5($_POST['rePassword']);
if($rePassword!==$newPassword){
	die("<b>ERROR: </b>Passwords do not match!");
}
$passLen=strlen($_POST['newPassword']);
if($passLen<8){
	die("<b>ERROR: </b>Password too small. It must be between 8 and 16 characters!");
	
}else if($passLen>16){
	die("<b>ERROR: </b>Password too long. It must be between 8 and 16 characters!");
	
}

$query="UPDATE user_info SET Password='$newPassword' WHERE Email_Id='$emailID'";
$result=mysqli_query($conn, $query);
if(!$result){
	die("<b>ERROR: </b>Cannot reset password!");
}
$_SESSION['activity_1']=0;
$_SESSION['activity_2']=0;
die(header("Location:../portal/login.php"));
?>