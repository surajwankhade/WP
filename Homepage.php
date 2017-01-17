<?php /*Template Name: Home Page
*/?>

<html>
<head>
  <meta charset="utf-8">

  <title>Bailard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style>
  *, html {
    margin:0;
    padding:0;  
}
  body{
  padding: 0;
  margin: 0;
  }
  .container{
  margin:0;
  padding:0;
  height:100%;
  width:100%;
  
  }
  
  .header{
  margin:0;
  padding:0;
  background: #268AAC;
  width: 100%;
  
  }
  
  .footer{
  margin:0;
  padding:0;
  background: #268AAC;
  width: 100%;
  position: relative;
  bottom: -10px;
  top: 0px;
  height: 2em;
  
  }
  .left a,.white, .white a, .footer{
  color: #fff;
}
.top-header{
margin:0;
overflow: hidden;
width: 100%;
}

.top-header ul{
	list-style-type: none;
	
}


li {
       display:inline-block;
	   padding: 5px;
};
.left{
width: 40%;
}

.right{
width: 30%;
float: right;
}
.left, .right, #right, #center, #left{
display:inline-block;
}

.bottom-header{
background: #268AAC;
width: 100%;
padding-left:45px;
padding-top: 20px;
height: 5em;
z-index: 20;
<!-- position:fixed; -->
}
#center{
position: relative;
left: 450px;
}

#left{
position: relative;
left: 835px;
}

.content{

height: 600px;
background: #F8F7F5;
}

#one, #two {
    border-radius: 50%;
}
#slider{
margin-top: 30px;
}
#f1_container {
  position: relative;
  margin: 10px auto;
  width: 450px;
  height: 281px;
  z-index: 1;
}
#f1_container {
  perspective: 1000;
}
#f1_card {
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: all 1.0s linear;
}
#f1_container:hover #f1_card {
  transform: rotateY(180deg);
  box-shadow: -5px 5px 5px #aaa;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.face.back {
  display: block;
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 10px;
  color: white;
  text-align: center;
  background-color:;
}
#copyright{
display: inline-block;
}
.footer ul{
float: right;
display: inline-block;

}
.content p{

width: 800px;
  margin: 0 auto; 

}
.widget-inner loadable{
border-radius:50%;
}

#draggable {
  position: relative;
  margin: 10px auto;
  width: 450px;
  height: 281px;
  z-index: 1;
}

#dashboard {
  -webkit-perspective: 1000;
  perspective: 1000;
}

#dashboard {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;  
  -webkit-transition: all 1.0s linear;
  transition: all 1.0s linear;
}

.loadable {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

#a{
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  -webkit-animation: mymoveback 20s infinite;  
  animation: mymoveback 20s infinite; 
 
}
#b {
  display: block;
  box-sizing: border-box;
  padding: 10px;
  color: white;
  text-align: center;
  
  -webkit-animation: mymove 20s infinite;
  animation: mymove 20s infinite;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
  40% {
    -webkit-transform: rotateY(0deg);
  }
  50% {
    -webkit-transform: rotateY(180deg);
  }
  90% {
    -webkit-transform: rotateY(180deg);
  }
  100% {
    -webkit-transform: rotateY(0deg);
  }
}
@-webkit-keyframes mymoveback {
  40% {
    -webkit-transform: rotateY(-180deg);
  }
  50% {
    -webkit-transform: rotateY(0deg);
  }
  90% {
    -webkit-transform: rotateY(0deg);
  }
  100% {
    -webkit-transform: rotateY(-180deg);
  }
}

@keyframes mymove {
  40% {
    transform: rotateY(0deg);
  }
  50% {
    transform: rotateY(180deg);
  }
  90% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(0deg);
  }
}
@keyframes mymoveback {
  40% {
    transform: rotateY(-180deg);
  }
  50% {
    transform: rotateY(0deg);
  }
  90% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(-180deg);
  }
}
/*
for top slider
*/
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      
  }



  </style>

 
</head>

<body>
	<div class="container">
		<div class ="header">
			<div class="top-header">
				<div class="left">
							<ul>
							<li><a class="glyphicon glyphicon-home white" href="#"> </a></li>
							<li><a href="#">ABOUT BAILARD</a></li>
							<li><a href="#">OUR STORY</a></li>
							<li><a href="#">CONTACT US</a></li>
							</ul>				
				</div>
				
				<div class="right">
							<ul>
							<li><a class="glyphicon glyphicon-earphone white" > 650-571-5800</a></li>
							<li><a class="glyphicon glyphicon-user white" href="#"> CLIENT LOGIN</a></li>
							<li><a class="glyphicon glyphicon-search white" href="#"></a></li>
							</ul>				
				</div>
			</div>
			<div class="bottom-header">	
				<div id="right"><a class="glyphicon glyphicon-menu-hamburger white" href="#"> INSTITUTIONAL </a> </div>
				<div id="center"><a href=""><img border="0"  src="" alt="Bailard" width="100" height="50"></a></div>
				<div id="left"><a class="glyphicon glyphicon-menu-hamburger white" href="#"> WEALTH MANAGEMENT </a> </div>
			</div>
			<div id="sticky"></div>
		</div>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg" alt="1" >
      </div>

      <div class="item">
        <img src="2.jpg" alt="2" >
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="3" >
      </div>

      
    </div>

   
    
  </div>
		<div class="content">
		    <br><br><br><br>
			<p>We are defined by our culture—transparent, caring, thoughtful, and accessible, grounded in accountability and independence—that extends to our approach to advising our clients and managing their assets.</p>
			<br><br>
			<p>Many companies manage money. Few have inspired the same degree of loyalty and dedication that Bailard embodies. Our hallmark is doing what is best for our clients.

With a rich history of over 45 years, Bailard has developed expertise in serving institutional investors, from pension funds and endowments to foundations and family offices, and wealth management clients, from entrepreneurs and corporate executives to individuals planning for, or enjoying, retirement. More about Bailard...</p>
			<!-- <center>
			<img class="img-circle" src="1-1.jpg">
			</center> -->
			<center>
			<div id="draggable">
			<div id="dashboard" class="shadow">
			<div class="widget-inner loadable" id="a">
			<img id="one" src="1-1.jpg"/>
			</div>
			<div  class="widget-inner loadable" id="b">
			<img id ="two" src="2-1.jpg">
  </div>
</div>
</div>
			</center>
		</div>
		
		<div id="slider">
		<div class="w3-content w3-display-container">
		<center>
  <img class="mySlides" src="2and3.jpg" >
  <img class="mySlides" src="2point5.jpg" >
  <img class="mySlides" src="16.jpg" >
  <img class="mySlides" src="40to50.jpg" >
  <img class="mySlides" src="52-1.jpg">
  </center>

  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
</div>
	</div>
	
	
	<div class="footer">
	
		<div id="copyright">© 2016 Bailard. All rights reserved </div>
							<ul>
							<li><a href="#">>Privacy Notices </a></li>
							<li><a href="#">>Legal Notice</a></li>
							<li><a href="#">>Terms of Use</a></li>
							<li><a href="#">>Careers</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
							</ul>	
		     
	
	</div>
		
	</div>
	
	<script>

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


$(function(){
        var stickyHeaderTop = $('.bottom-header').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.bottom-header').css({position: 'fixed', top: '0px'});
                        $('#sticky').css('display', 'block');
                } else {
                        $('.bottom-header').css({position: 'static', top: '0px'});
                        $('#sticky').css('display', 'none');
                }
        });
  });
  

 


</script>
</body>
</html>