<?php
	include("connMySQL.php");
	session_start();
	$uid=$_SESSION['id'];
	$cid=$_GET['value'];
	$sql= " SELECT cid FROM shoppingbag WHERE uid= '$uid' AND cid='$cid' ";
	$result=$conn->query($sql);
	if($result->num_rows >0){
		echo '<script language="javascript">
		alert("此商品已加入購物車"); 
		window.location.replace("shirt.php"); 
		</script>'; 
	}
	else{
		if(isset($cid)){	
			$sql ="INSERT INTO shoppingbag (uid,cid,quantity)  VALUES ('$uid','$cid','1')";
			$result=$conn->query($sql);
			echo '<script language="javascript">
			alert("成功加入購物車"); 
			window.location.replace("shirt.php"); 
			</script>'; 
		}
	}
?>