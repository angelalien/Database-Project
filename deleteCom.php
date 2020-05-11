<?php
	include("connMySQL.php");
	session_start();
	$uid=$_SESSION['id'];
	$a=$_GET['value'];
	if(isset($a)){	
    $sql ="DELETE FROM shoppingbag WHERE uid='$uid' AND cid='$a'";
	$result=$conn->query($sql);
	echo '<script language="javascript">
		alert("刪除成功"); 
		window.location.replace("shoppingBag.php"); 
		</script>'; 
	}

?>