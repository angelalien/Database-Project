<?php
	session_start();	
	include("connMySQL.php");
	$username = $_SESSION['username'];
	
	$sql ="DELETE FROM user WHERE username = '$username'";                    
    $result = $conn->query($sql);

	header("Location:register.php");
			
?>
