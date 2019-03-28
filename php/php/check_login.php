<?php
if(!isset($check_login) or $check_login!=1){
	die("<b>ERROR: </b>The access to this page is denied!");
}else{
	$query="SELECT UserId FROM user_info WHERE UserId='$userId' AND Password='$password'";
	$result=mysqli_query($conn, $query);
	if(mysqli_num_rows($result)==1){
		$loginStatus=1;
	}else{
		$loginStatus=0;
	}
}
$check_login=0;
?>