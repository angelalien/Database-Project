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
  height: 200px;
    color: #FFB7DD;}
  body {
    font: 100 20px Lato, sans-serif;
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
    line-height: 2 !important;
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
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif;}
.w3-bar-block .w3-bar-item{padding:16px}
iframe{
  width: 100%;
}
</style>
<body>
<br><br>
<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar">
 
  <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
  class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding fa fa-pencil"></i></a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id02').style.display='block'">New Mail <i class="w3-padding fa fa-pencil"></i></a>

  <?php require 'main.php';
 
  $emailstruct = '<a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail(\'%s\');w3_close();">
      <div class="w3-container">
        <img class="w3-round w3-margin-right"  style="width:15%%;"><span class="w3-opacity w3-large">%s</span>
      </div>
    </a>';

        while (($rs=$data->fetch_assoc())!=false) {
          echo(sprintf($emailstruct,$rs['username2'],$rs['subject']));
        }
       
?>  
<!--<a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id06').style.display='block'">Sent <i class="fa fa-paper-plane w3-margin-right"></i></a>-->


</nav>
<!-- Modal that pops up when you click on "New Message" -->
<div id="id01" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
      <h2>Send Message</h2>
    </div>
    <div class="w3-panel">
    <form action="send.php" method="POST">
      <label>From</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"required name="username1">
      <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"
      required name="username2">
      <label>Subject</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"
       required name="subject">
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?" required name="content"type="text">
      <div class="w3-section">
         <input class="w3-button w3-red" type="submit">
        <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
    </form> 
      </div>    
    </div>
  </div>
</div>
<!-- Modal that pops up when you click on "New Mail" -->
<div id="id02" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
      <h2>Send Mail</h2>
    </div>
    <div class="w3-panel">
    <form action="email.php" method="POST">
      <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"required name="receiver">
      <label>From</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"
      required name="sender">
      <label>Subject</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"
       required name="subject">
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?" required name="content"type="text">
      <div class="w3-section">
         <input class="w3-button w3-red" type="submit">
        <a class="w3-button w3-red" onclick="document.getElementById('id02').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
    </form> 
      </div>    
    </div>
  </div>
</div>
<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<!-- Page content -->
<div class="w3-main" style="margin-left:320px;">
<i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-top" onclick="w3_open()"></i>
<a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

<?php require 'main.php';
  $mailstruct = '<div id="%s" class="w3-container person">
  
  <br>
  <img class="w3-round  w3-animate-top" style="width:20%%;">
  <h5 class="w3-opacity">Subject: %s</h5>
  <h5 class="w3-opacity">From: %s</h5>
  <hr>
    %s
  </div>';

        while (($rs=$data->fetch_assoc())!=false) {
          echo(sprintf($mailstruct,$rs['username2'],$rs['subject'],$rs['username1'],$rs['content']));
        }
       
?>


<a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id04').style.display='block'">Reply<i class="w3-padding fa fa-pencil"></i></a>
  <div id="id04" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
      <h2>Reply Mail</h2>
    </div>
  <div class="w3-panel">
<form action="send.php" method="POST">   
    <label>Form</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="username1" id="reply_username1">
    <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="username2" id="reply_username2">
    <label>Subject/label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"required name="subject">
       <label>Content</label>
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?" required name="content"type="text">
      <div class="w3-section">
         <input class="w3-button w3-red" type="submit">
        <a class="w3-button w3-red" onclick="document.getElementById('id04').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
    </form> 
      </div>    
    </div>
  </div>
</div>

<a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id05').style.display='block'">Delete<i class="w3-padding fa fa-trash"></i></a>
  <div id="id05" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
     <h2>Delete Mail</h2>
    </div>
  <div class="w3-panel">
<form action="deletemail.php" method="POST">   
    <label>Delete the mail from?</label>
     <input class="w3-input w3-border w3-margin-bottom" type="text" name="username1" id="delete">
       <div class="w3-section">
         <input class="w3-button w3-red" type="submit">
        <a class="w3-button w3-red" onclick="document.getElementById('id05').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
    </form> 
      </div>    
    </div>
  </div>
</div>


<a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id06').style.display='block'">Forword<i class="w3-padding fa fa-pencil"></i></a>
  <div id="id06" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id06').style.display='none'" class="w3-button w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
     <h2>Forword Mail</h2>
    </div>
  <div class="w3-panel">
<form action="send.php" method="POST">   
    <label>Form</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="username2" id="forward_username2">
    <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text">
    <label>Subject</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text"required name="subject">
       <label>Content</label>
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?" required name="content"type="text">
      <div class="w3-section">
         <input class="w3-button w3-red" type="submit">
        <a class="w3-button w3-red" onclick="document.getElementById('id06').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
    </form> 
      </div>    
    </div>
  </div>
</div>


<script>
//var openInbox = document.getElementById("myBtn");
//openInbox.click();

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

function myFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show"; 
    x.previousElementSibling.className += " w3-red";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-red", "");
  }
}

function openMail(personName) {
  var i;
  var x = document.getElementsByClassName("person");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" w3-light-grey", "");
  }
  if(personName!=""){
  document.getElementById(personName).style.display = "block";
  event.currentTarget.className += " w3-light-grey";
  document.getElementById('reply_username2').value = personName;
  let toName = document.getElementById(personName).getElementsByTagName('h5')[1].innerText.substring(6);
  document.getElementById('reply_username1').value = toName;
  document.getElementById('forward_username2').value = personName;
  document.getElementById('delete').value = personName;


}}
  
openMail("");
</script>

<script>
//var openTab = document.getElementById("firstTab");
//  openTab.click();
</script>

</body>
</html> 
