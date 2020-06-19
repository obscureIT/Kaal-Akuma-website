<?php

$error = ''; //variable to store error message

if(isset($_POST['submit'])){
	if(empty($_POST['username'] || empty($_POST['password']))){
		$error = "Username or Password is Invalid";
	}
	else{

		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "kaal_akuma";

		$conn = mysqli_connect($host, $user, $password, $db, "3306");

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn, "SELECT * FROM admin_login WHERE USER_NAME='$username' AND PASSWORD='$password';");

		$rows = mysqli_num_rows($query);

		if($rows == 1){
			header('Location: adminpages.php'); //redirecting to other page
		} else{
			echo $error = "Username or Password is Invalid <a href='http://localhost/kaalakuma/adminlogin.php'>Click Here to return to admin login page</a>";
		}
		mysqli_close($conn); //closing connection
	}
}
?>