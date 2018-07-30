<?php
	$host = 'pegawaialmanacdb.database.windows.net';
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
