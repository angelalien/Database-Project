<?php
	include ("connMySQL.php");
	$name = $_POST['name'];
	$pw = $_POST['pw'];
	$gen = $_POST['gen'];	
	$sql = "INSERT INTO user(username,password,gender) VALUES ('$name','$pw','$gen') ";
	$result = $conn->query($sql);
	if(isset($name) && isset($pw)){
		$sql = "SELECT username,password FROM user WHERE username='$name'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				if($row["username"]==$name && $row["password"]==$pw){
					echo "登入成功!歡迎使用本系統";
					$sql = "INSERT INTO user VALUES ('$name','$pw','$gen') ";
						$result = $conn->query($sql);
						echo "成功新增使用者";
					$url = "http://localhost/homework/home.html";
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
	}
