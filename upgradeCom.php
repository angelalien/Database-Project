<?php
	session_start();
  	$uid=$_SESSION['id'];

	//限制圖片型別格式，大小
    if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg"))
            || ($_FILES["file"]["type"] == "image/png")
            && ($_FILES["file"]["size"] < 500000)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        } else {
            echo "檔名: " . $_FILES["file"]["name"] . "<br />";
            echo "檔案型別: " . $_FILES["file"]["type"] . "<br />";
            echo "檔案大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "快取檔案: " . $_FILES["file"]["tmp_name"] . "<br />";

        	//設定檔案上傳路徑，選擇指定資料夾
            if (file_exists("picture/" . $_FILES["file"]["name"])) {
                echo '<script language="javascript">
					alert("圖片已經存在"); 
					window.location.replace("postCom.php"); 
					</script>';	
            } else {
                move_uploaded_file( $_FILES["file"]["tmp_name"],"picture/" . $_FILES["file"]["name"]);
                echo "儲存於: " . "picture/" . $_FILES["file"]["name"];//上傳成功後提示上傳資訊
            }
        }
    } else {
        echo '<script language="javascript">
			alert("圖片上傳失敗"); 
			window.location.replace("postCom.php"); 
			</script>';	//上傳失敗後顯示錯誤資訊
    }   


	include("connMySQL.php");
	$class=$_POST['classification'];
	$nm=$_POST['name'];//輸入的
	$pc=$_POST['price'];
	$q=$_POST['quantity'];
	$loc=$_POST['location'];
	$infor=$_POST['information'];
	$file = $_FILES["file"]["name"];

	if(empty($class) || empty($nm) || empty($pc)|| empty($q)|| empty($loc)|| empty($infor)){	
		echo '<script language="javascript">
			alert("未輸入完整"); 
			window.location.replace("postCom.php"); 
			</script>';		
	}else{
		$sql= " SELECT comid FROM commodity WHERE classification='$class' AND name='$nm' AND price='$pc'AND userid='$uid'";//還沒結合登入功能 先設userid=1
		$result=$conn->query($sql);
		if($result->num_rows >0){
			echo '<script language="javascript">
			alert("此商品已存在"); 
			window.location.replace("postCom.php"); 
			</script>';	
		}else{
			$sql ="INSERT INTO commodity (classification,name,price,quantity,userid,location,information,picture)  VALUES ('$class','$nm','$pc','$q','$uid','$loc','$infor','$file')";
			$result=$conn->query($sql);
			echo '<script language="javascript">
			alert("上架成功"); 
			window.location.replace("postCom.php"); 
			</script>';	
		}
	}


?>