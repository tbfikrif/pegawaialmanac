<?php
	// PHP Data Objects(PDO) Sample Code:
	try {
	    $conn = new PDO("sqlsrv:server = tcp:pegawaialmanacdb.database.windows.net,1433; Database = pegawaialmanacdb", "almanac", "Tugasatol9");
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
	    print("Error connecting to SQL Server.");
	    die(print_r($e));
	}

	// SQL Server Extension Sample Code:
	$connectionInfo = array("UID" => "almanac@pegawaialmanacdb", "pwd" => "Tugasatol9", "Database" => "pegawaialmanacdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:pegawaialmanacdb.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	/*
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
		*/
?>
