<?php
session_start();
if(!isset($_SESSION['activity_2']) or $_SESSION['activity_2']!=201){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$_SESSION['activity_2']=0;
$configconnect=1;
require_once("config/connect.php");
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$emailID = $_SESSION['emailID'];
$password = $_SESSION['password'];

$userId=0;
do{
	$userId=mt_rand(100000, 999999);
	$queryUnique = "SELECT UserId FROM user_info WHERE UserId='$userId';";
	$result=mysqli_query($conn, $queryUnique);
	$value=mysqli_num_rows($result);
}while($value!=0);

$queryInsert = "INSERT INTO user_info(UserId, Email_Id, FirstName, LastName, Password)
	VALUES ('$userId', '$emailID', '$firstName', '$lastName', '$password');";
	
$result = mysqli_query($conn, $queryInsert);
if(!$result){
	die("<b>ERROR: </b>Failed to signup!");
}

if (!is_dir("../users/$userId")) {
    mkdir("../users/$userId", 0777, true);
}
$filename="../users/$userId/profile.php";
$file=fopen($filename,'w');
fwrite($file, $profile);
fclose($file);

session_unset();
session_destroy();
session_start();
$_SESSION['userId']=$userId;
$_SESSION['password']=$password;
$_SESSION['loginStatus']=1;
header("Location:../index.php");
?>