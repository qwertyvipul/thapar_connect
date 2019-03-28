<?php //ACTIVITY 107
session_start();
if(!isset($_SESSION['activity_1']) or $_SESSION['activity_1']!=107){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$_SESSION['activity_1']=0;

//TESTED CODE
$configconnect=1;
require_once('config/connect.php');
$emailID=strtolower($_POST['emailID']);
$password=md5($_POST['password']);
$query="SELECT Email_Id FROM user_info WHERE Email_Id='$emailID';";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)!==1){
	die("<b>ERROR: </b>Wrong Email Id!<br>");
}else{
	$query="SELECT UserId, Password FROM user_info WHERE Email_Id='$emailID' AND Password='$password';";
	$result=mysqli_query($conn, $query);
	if(mysqli_num_rows($result)!=1){
		die("<b>ERROR: </b>Wrong password!<br>");
	}
	$row=mysqli_fetch_assoc($result);
	$userId=$row['UserId'];
	
	session_unset();
	session_destroy();
	session_start();
	$_SESSION['userId']=$userId;
	$_SESSION['password']=$password;
	$_SESSION['loginStatus']=1;
	$set_cookie=1;
	require_once("set_cookie.php");
	header("Location:../index.php");
}
?>