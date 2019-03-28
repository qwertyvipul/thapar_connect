<?php
session_start();
if(!isset($_SESSION['activity_1']) or $_SESSION['activity_1']!=104){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$_SESSION['activity_1']=0;
$configconnect=1;
require_once('config/connect.php');
$emailID=strtolower($_POST['emailID']);
$query="SELECT FirstName FROM user_info WHERE Email_Id='$emailID'";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)!=1){
	die("<b>ERROR: </b>Wrong EmailId!");
}else{
	$row=mysqli_fetch_assoc($result);
	$firstName=$row['FirstName'];
	$otp = mt_rand(100000, 999999);
	$_SESSION['emailID']=$emailID;
	$_SESSION['otp'] = md5($otp);

	$subject='Reset Password';
	$message='Hey '.$firstName.', Your OTP to reset your password for Thapar Connect account is '.$otp.'. Please make sure to not share this password with anyone.';
	mail($emailID, $subject, $message);
	$_SESSION['activity_1']=102;
	$_SESSION['activity_2']=202;
	header("Location:../portal/verify_otp.php");
}
?>