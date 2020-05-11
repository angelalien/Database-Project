<?php
	require_once("connMySQL.php");
	$sql="SELECT * FROM chatroom ";
	$data=$conn->query($sql);
	if($data->num_rows==0)
		echo "don not have user";
	/*$number=3;
	$total=$data->num_rows;
	$page=ceil($total/$number); 
	$p=$_GET['p'];
	if($p == ''){
 		$p=1;
	}
	$start=($p-1)*$number;
	$sql ="SELECT * FROM chatroom limit $start, $number";
	$data=$conn->query($sql);*/
?>