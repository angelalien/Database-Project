<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .row.content {
	height: 450px;
    color: #FFB7DD;}
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #FFB7DD;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #FFB7DD;
    color: #fff;
    padding: 120px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #FFB7DD;
    font-size: 50px;
  }
  .logo {
    color: #FFB7DD;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #FFB7DD;
  }
  .carousel-indicators li {
    border-color: #FFB7DD;
  }
  .carousel-indicators li.active {
    background-color: #FFB7DD;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #FFB7DD; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #FFB7DD;
    background-color: #fff !important;
    color: #FFB7DD;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #FFB7DD !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #FFB7DD;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #FFB7DD;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #FFB7DD !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #FFB7DD;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
      @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
	   <a class="navbar-brand" href="home.php";style="top: 45px;position: relative"><img src="https://imgur.com/aXmsIap.jpg" width="150" height="100"></a>
	   </div>
	  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">	
		<li class="text_a">
 		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><a style="top: 0px;position: relative"><input size="60" id="autocompletebar" class="wid290 ui-autocomplete-input" type="text" name="keyword" placeholder="搜尋" onfocus="this.value=(this.value==&#39;搜尋&#39;)? &#39;&#39; : this.value;" value="" autocomplete="off">
	<button type="button" class="btn btn-danger" href="javascript:doSearch()">搜尋</button></a>
	</li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="" ><span style="color:#000000">全站商品
          <span class="caret" style="color:#000000"></span></a>
          <ul class="dropdown-menu" >
            <li><a href="shirt.php"><span style="color:#000000">上衣</a></li>
            <li><a href=""><span style="color:#000000">帽T</a></li>
            <li><a href=""><span style="color:#000000">褲子</a></li> 
            <li><a href=""><span style="color:#000000">裙子</a></li>
            <li><a href=""><span style="color:#000000">帽子</a></li>  
          </ul>
        </li>
        <li><a href="postCom.php"><span style="color:#000000;margin-left:10px;">上傳商品</span></a></li>
        <li><a href="購物車.html"><span style="color:#000000;margin-left:10px;">購物車</span></a></li>
		<li class="head_mem">
                        <!--/HEAD 會員中心-->
                        <a class="head_mem_icon" href="member.php">
                            <!--/HEAD 會員中心icon-->
                            
                            <p class="little_menber" style="display: block;"> <span style="color:#000000;margin-left: 10px;">會員中心/帳戶</span></p>
                            <!--<div class="digit_O_bg notfixed">3</div>-->
                        </a>
                        
						
						<!--/會員中心下拉-->
                <div class="head_mem_drop">
              <div class="tri_mem"></div>
              <?php if($_SESSION['username']==""){ ?>
              <ul class="mem_list"><li class="mem_item"><a class="mem_btn" title="會員登入" href="login.php">會員登入</a></li><li class="mem_item"><a class="mem_btn" title="新會員註冊" href="register.php">新會員註冊</a></li>
              <?php }else{ ?>
              <ul class="mem_list"><li class="mem_item"><a class="mem_btn" title="登出" href="logout.php">登出</a></li>
              <li class="mem_item"><a class="mem_btn" title="刪除帳號" href="delete.php" onclick="return confirm ('刪除帳號就不能重來了哦><');">刪除帳號</a></li>
              <?php } ?>
              </div>
            <div style="clear:both"></div> 
                    </li>

      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br><br>

<!--login form-->
<style>

input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #FFB7DD;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ff7ac0;
}

</style>
<body>
<div style="text-align:center;margin:0px auto;">
 <h4>請輸入您登入使用的電子郵件，以利您重新設置密碼</h4>
 <form action="forget_reset.php" method="post">
 <input type="text" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;" name="username" required="TRUE" placeholder="電子信箱"/><br/>
 <input type="submit" value="提交"/>
 </form>

</div>
</body>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

<?php
	include("connMySQL.php");
	$username = $_POST['username'];
	
	if(isset($username)){
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/","$username")) {
			echo "電子信箱格式錯誤!";
				echo "<script>setTimeout(function(){window.location.href='forget_reset.php';},1500);</script>";
		}else{
        $sql ="SELECT Username,Password FROM user WHERE Username='$username'";                    
        $result = $conn->query($sql);
            if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                   if($row["Username"]==$username){
						session_start();
						$_SESSION['username']=$username;
						
						header('Location: forget_reset_finish.php');
                   }else{ 
						echo "此帳號不存在";
						echo "<script>setTimeout(function(){window.location.href='login.php';},1500);</script>";
                   }
               }
           }else{
               echo "此帳號不存在";
			   echo "<script>setTimeout(function(){window.location.href='login.php';},1500);</script>";
           }
		}
	}else{

   }
?>