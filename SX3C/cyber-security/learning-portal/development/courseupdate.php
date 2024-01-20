<?php
require 'connections.php';
session_start();
$coursecontent=$_POST['courseContent'];
$id= $_SESSION['currupdate'];
$sql='update coursedata set topic_content = '. $coursecontent. 'where id='. $id .';';
if(mysqli_query($conn, $sql)){
	header('Location: index.php');
}else{
	echo "Failed";
}
?>