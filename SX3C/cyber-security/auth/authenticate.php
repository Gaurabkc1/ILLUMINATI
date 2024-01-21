<?php

	require 'connections.php';

	session_start();


	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "select * from userauth where email='".$email."';";

	$results = $conn->query($sql);

	if($results->num_rows == 1){
		$row = $results->fetch_assoc();
		if(password_verify($password, $row['password'])){
			echo "Logged In";
			$_SESSION['bank_user_id'] = $row['id'];
			$_SESSION['fullName'] = $row['full_name'];
			$_SESSION['role'] = $row['role'];
			header('location: /SX3C/cyber-security/learning-portal/client/index.php');
		}else{echo "Password Didn't Match!";}
	}else{echo "User Not Found";}

	$conn -> close();
?>
