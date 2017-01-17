<?php /*Template Name: News and Insights
*/?>
<!doctype html>

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
  background: #96A81E;
  width: 100%;
  z-index: 20;
  }
  
  .footer{
  margin:0;
  padding:0;
  background: #96A81E;
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
background: #96A81E;
width: 100%;
padding-left:45px;
padding-top: 20px;
height: 5em;

<!-- position:fixed; -->
}
#center{
position: relative;
left: 450px;
}

#left{
position: relative;
left: 865px;
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
		
		
		<div class="content">
		    
			
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



$(function(){
        var stickyHeaderTop = $('.header').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.header').css({position: 'fixed', top: '0px'});
                        $('#sticky').css('display', 'block');
                } else {
                        $('.header').css({position: 'static', top: '0px'});
                        $('#sticky').css('display', 'none');
                }
        });
  });
  

 


</script>
</body>
</html>