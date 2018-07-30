<?php
	$host = 'tcp:pegawaialmanacdb.database.windows.net,1433';
	$user = 'almanac';
	$pass = 'Tugasatol9';
	$db = 'pegawaialmanacdb';
	// create connection
	$conn = mysqli_connect($host,$user,$pass,$db);
	// check connection
	if(!$conn){
		die("Connection Failed :".mysqli_connect_error());
	}
?>
