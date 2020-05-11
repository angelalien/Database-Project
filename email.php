<?php
  $to =$_POST['receiver']; //收件者
  $subject = $_POST['subject']; //信件標題
  $msg = $_POST['content'];//信件內容
  $headers = "From: ".$_POST['sender']; //寄件者
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
   $url = "http://localhost/chatroom.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";

  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;
?>