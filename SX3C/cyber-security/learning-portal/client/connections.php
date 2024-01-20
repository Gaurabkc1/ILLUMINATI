<?php

	$host='localhost';
	$username= 'root';
	$password= '';
	$database= 'sx3ccsi';

	$conn = mysqli_connect($host, $username, $password, $database);

	if($conn->connect_error){
		die('connection failed'.connect_error);
	}else{
		// echo "Connection Successful";
	}