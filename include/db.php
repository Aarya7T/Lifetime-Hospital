<?php

$serverName ="localhost";
$userName = "itdrivenn_lifetimehospital";
$password =" Maharashtra@12345";
$dbName ="itdrivenn_lifetimehospital"; 


$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
	
	echo "Failed to connect!";
		
		exit();
		
}

echo "Connection Success!";
	
	?>