<?php //ACTIVITY = 101
session_start();
if(!isset($_SESSION['activity_1']) or $_SESSION['activity_1']!=101){
	die("<b>ERROR: </b>The access to this page is denied!<br>");
}
$_SESSION['activity_1']=0;
$emailID = strtolower($_POST['emailID']);
if(!filter_var($emailID, FILTER_VALIDATE_EMAIL)) {
	die("<b>ERROR: </b>Invalid email format!");
}else{
	$domain = substr($emailID, strpos($emailID, '@') + 1);
	if(!checkdnsrr($domain)) {
		die("<b>ERROR: </b>Email domain cannot be found!");
	}else{
		$configconnect=1;
		require_once("config/connect.php");
		$query="SELECT Email_Id FROM user_info WHERE Email_Id = '$emailID'";
		$result=mysqli_query($conn, $query);
		if(mysqli_num_rows($result)!=0){
			die("<b>ERROR: </b>This email id is already registered!<br>");
		}else{
			$firstName = ucfirst(strtolower($_POST['firstName']));
			if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
				die("<b>ERROR: </b>Only letters and whitespaces allowed in Firstname!");
				
			}else{
				$lastName = ucfirst(strtolower($_POST['lastName']));
				if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
					die("<b>ERROR: </b>Only letters and whitespaces allowed in Lastname!");
				}else{
					$passLen=strlen($_POST['newPassword']);
					if($passLen<8){
						die("<b>ERROR: </b>Password too small. It must be between 8 and 16 characters!");
						
					}else if($passLen>16){
						die("<b>ERROR: </b>Password too long. It must be between 8 and 16 characters!");
						
					}else{
						$newPassword=md5($_POST['newPassword']);
						$rePassword=md5($_POST['rePassword']);
						if($rePassword!==$newPassword){
							die("<b>ERROR: </b>Passwords do not match!");
							
						}else{
							$otp = mt_rand(100000, 999999);
							$_SESSION['firstName']=$firstName;
							$_SESSION['lastName']=$lastName;
							$_SESSION['emailID']=$emailID;
							$_SESSION['password']=$newPassword;
							$_SESSION['otp']=md5($otp);
							$_SESSION['activity_1']=102;
							$_SESSION['activity_2']=201;

							$subject = 'OTP Verification';
							$message = 'Heyy '.$firstName.', Your OTP for verfication of Thapar Connect account is '.$otp.'. Make sure not share this OTP with anyone.';
							mail($emailID, $subject, $message);
							header("Location:../portal/verify_otp.php");
						}
					}
				}
			}
		}
	}
}
?>