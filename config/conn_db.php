<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'dbkepegawaian';
	// create connection
	$conn = mysqli_connect($host,$user,$pass,$db);
	// check connection
	if(!$conn){
		die("Connection Failed :".mysqli_connect_error());
	}
?>