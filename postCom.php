<?php
session_start();
if($_SESSION['username']==""){
  echo '<script language="javascript">
    alert("請先登入會員"); 
    window.location.replace("login.php"); 
    </script>'; 
}
?>


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
    <div class="navbar-header >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left ">
     <a class="navbar-brand" href="home.php";style="top: 0px;position: relative"><img src="https://imgur.com/3QeKjYh.jpg" width="150" height="30"></a>
      <&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp><&nbsp>


    <ul class="nav navbar-nav navbar-right">  
    
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="" ><span style="color:#000000">全站商品
          <span class="caret" style="color:#000000"></span></a>
          <ul class="dropdown-menu" >
            <li><a href="shirt.php"><span style="color:#000000">上衣</a></li>
            <li><a href=""><span style="color:#000000">帽T</a></li>
            <li><a href=""><span style="color:#000000">褲子</a></li> 
            <li><a href="skirt.php"><span style="color:#000000">裙子</a></li>
            <li><a href=""><span style="color:#000000">帽子</a></li>  
          </ul>
        </li>    
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="" ><span style="color:#000000">會員功能
          <span class="caret" style="color:#000000"></span></a>
          <ul class="dropdown-menu" >
            <li><a href="shoppingBag.php"><span style="color:#000000">購物車</a></li>
            <li><a href="postCom.php"><span style="color:#000000">上傳商品</a></li>
            <li><a href="chatroom.php"><span style="color:#000000">訊息中心</a></li> 
            <li><a href="member.php"><span style="color:#000000">帳戶資訊</a></li>
          </ul>
        </li>
                        
            
            <!--/會員中心下拉-->
              <li class="head_mem">
              
              <?php if($_SESSION['username']==""){ ?>
              <ul class="mem_list"><li class="mem_item-right-align"><a class="mem_btn" title="會員登入" href="login.php">會員登入</a></li>
              <li class="mem_item"><a class="mem_btn" title="新會員註冊" href="register.php">新會員註冊</a></li>
              </ul>
              <?php }else{ ?>
              <ul class="mem_list"><li class="mem_item"><a class="mem_btn" title="登出" href="logout.php">登出</a></li>
              <li class="mem_item"><a class="mem_btn" title="刪除帳號" href="delete.php" onclick="return confirm ('刪除帳號就不能重來了哦><');">刪除帳號</a></li>
              <?php } ?>
              </div>
            <div style="clear:both"></div> 
                    </li>

    
    
  </div>
</nav>

<br><br><br><br><br><br>


<div class="text-center">
  <h2>商品上傳</h2>
  <h4>填妥資訊就可以將商品上架了喔!</h4>
  <form action="upgradeCom.php" method="post" enctype="multipart/form-data" onSubmit="return InputCheck(this)">
    <select name="classification">
    <option value="1">上衣</option>
　	  <option value="2">帽T</option>
　  <option value="3">褲子</option>
　  <option value="4">裙子</option>　
    <option value="5">帽子</option>
    </select><br><p></p>
    品名: <input type="text" name="name"><br><p></p>	
    價格: <input type="number" name="price"><br><p></p>
    數量: <input type="number" name="quantity"><br><p></p>
    地點: <input type="text" name="location"><br><p></p>
    資訊: <input type="text" name="information"><br><p></p>
    圖片：<label><input type="file" name="file" id="file"></label><br>
    <button class="btn pull-center" type="submit" style="color:#FFB7DD">送出</button>
    <p></p> 
	</form>	
</div>



</body>
</html>