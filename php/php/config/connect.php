<?php
if($configconnect==1){
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '12345678');

	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
	if(!$conn){
		die('ERROR: Connection to the server failed!');
	}

	$query="CREATE DATABASE IF NOT EXISTS tcdatabase;";
	mysqli_query($conn, $query);
	define('DB_DATABASE', 'tcdatabase');

	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if(!$conn){
		die('ERROR: Connection to the database failed!');
	}
}else{
	die("<b>ERROR: </b>The access to this page is denied!");
}

?>