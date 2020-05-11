<?php 
  session_start();
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




<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>特色</h2><br>
  <h4>主要三元素</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://mart.ibon.com.tw/mdz_file/item/05/01/01/1605/16050021006G_intr_l_1_160526134730.jpg" alt="Paris" width="400" height="300">
        <p><strong>簡約</strong></p>
        <p>simple</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://img.biggo.com.tw/s-dtcf_1r1N5ShfJOQe9rkQI6ISTGvmYQh3_rNj0iNKY/http://cf.shopee.tw/file/fc7d662fecce1dbfc9117b62d083f294" alt="New York" width="400" height="300">
        <p><strong>舒適</strong></p>
        <p>comfortable</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://i.screenshot.net/erwona2" alt="San Francisco" width="400" height="300">
        <p><strong>時尚</strong></p>
        <p>fasion</p>
      </div>
    </div>
  </div><br>
  
  <h2>評價</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"個人超喜歡!!發貨超好!!"<br><span>b****6</span></h4>
      </div>
      <div class="item">
        <h4>"賣家態度不錯!!"<br><span>y****3</span></h4>
      </div>
      <div class="item">
        <h4>"材質讚爆!!!CP值很高!!"<br><span>f****2</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>熱門商品</h2>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>上衣</h1>
        </div>
        <div class="panel-body">
          <img src="https://imgur.com/zxehXcT.jpg"  alt="韓版素T" width="300" height="300">
        </div>
        <div class="panel-footer">
          <h3>$200</h3>
          <h4>澳門</h4>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>裙子</h1>
        </div>
        <div class="panel-body">
          <img src="https://imgur.com/LIeQCer.jpg"  alt="牛仔裙" width="300" height="300">
        </div>
        <div class="panel-footer">
          <h3>$200</h3>
          <h4>台北</h4>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>襯衫</h1>
        </div>
        <div class="panel-body">
          <img src="https://imgur.com/VejZnRQ.jpg"  alt="格子襯衫" width="300" height="300">
        </div>
        <div class="panel-footer">
          <h3>$250</h3>
          <h4>新竹</h4>

        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">聯絡資訊</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Hsinchu, Taiwan</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

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
