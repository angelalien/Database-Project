<?php
	include ("connMySQL.php");
	$usn1 = $_POST['username1'];
	$usn2 = $_POST['username2'];
	$sub = $_POST['subject'];	
	$text = $_POST['content'];	
	$sql = "INSERT INTO chatroom(username1,username2,subject,content) VALUES ('$usn1','$usn2','$sub','$text') ";
	$result = $conn->query($sql);
		echo "信件已成功送出";
		$url = "http://localhost/chatroom.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";

	/*if(isset($name) && isset($pw)){
		$sql = "SELECT username,password FROM user WHERE username='$name'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				if($row["username"]==$name && $row["password"]==$pw){
					echo "登入成功!歡迎使用本系統";
					$sql = "INSERT INTO user VALUES ('$name','$pw','$gen') ";
						$result = $conn->query($sql);
						echo "信件已成功送出";
					$url = "http://localhost/project/chatroom.html";
					echo "<script type='text/javascript'>";
					echo "window.location.href='$url'";
					echo "</script>"; 
				}else{
					echo "登入失敗";
				}
			}
		}else{
			echo "資料庫連接失敗";
		}
	}else{
		echo "未輸入帳號密碼";
	}*/
