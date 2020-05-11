<?php
	include ("connMySQL.php");
	$usn1 = $_POST['username1'];
	$sql = "SELECT * FROM chatroom ";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
						$sql = "DELETE FROM chatroom WHERE username1='$usn1'";
						$result = $conn->query($sql);
						echo "成功刪除";
						$url = "http://localhost/chatroom.php";
						echo "<script type='text/javascript'>";
						echo "window.location.href='$url'";
						echo "</script>";
					}
	else{
		echo "刪除失敗";
	}