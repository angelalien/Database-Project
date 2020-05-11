<?php
	session_start();	

	session_destroy();
	//導到登入頁面

	header("Location:login.php");
?>