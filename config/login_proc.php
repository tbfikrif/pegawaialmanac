<?php
	require_once"conn_db.php";
	
		if(isset($_POST['btn_login'])){
			$username = $_POST['user'];
			$pass = $_POST['pass'];

			$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$pass' ";
			$res = mysqli_query($conn,$sql);
			$check = mysqli_num_rows($res);

			if ($check==1){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['status'] = "login";
			header("location:../view/dashboard.php");
			}else{
				//echo "GAGAL LOGIN !";
				echo "<script type='text/javascript'>
						alert('Username atau password tidak ditemukan !');
					  </script>";
				echo "$username,$pass";
			}
		}
		

?>
