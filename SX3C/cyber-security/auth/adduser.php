<?php

	require 'connections.php';
	
	$full_name = $_POST['fullName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO userauth(full_name, email, password)
			VALUES ('{$full_name}', '{$email}', '{$hashed_password}');";

	if($conn->query($sql)){
		echo "User Added Successfully!";
		header('Location: login.php');
	}
		else{echo "Process Failed!";
	}



?>