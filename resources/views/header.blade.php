<!DOCTYPE html>
<html lang="en">
<head>
   <title>Monasabatna</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <!------ <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> ---->
<!------ <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> ----->
 <!---- <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script> ---->



   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap3.3.7.min.css">

 	<link rel="stylesheet" type="text/css" href="css/font4.7.0-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap3.3.7.min.css">
	  
  	<script src="js/jquery3.3.1.min.js"></script>
    <script src="js/bootstrap3.3.7.min.js"></script>
    <script src="js/popper1.14.3.min.min.js"></script>
   
   	<script src="js/jquery3.3.1.min.js"></script>
   	<script src="js/bootstrap3.3.7.min.js"></script>

   <link rel="stylesheet" type="text/css" href="css/main.css"

</head>
<body>
      <!------- Header start-------->
	  
      <nav class="navbar twobutton">
         <div class="container-fluid">
           
  <div class="navbar right">
  
    <a href class="btn btn-outline-success">LOGIN</a>
    <a href class="btn btn-sm btn-outline-secondary">SIGN UP</a>
	
  </div>

         </div>
      </nav>
	  <header>
<nav class="navbar bg-white">
	<a class="navbar-brand" href="#"> <img src="images/munasabatna_new.png" height="50"></a>

							<navbar>
								<ul> 
							<li>
								<a href="#" class="active">HOME </a>
							</li>
							<li><a href="#"> EXPRESS </a></li>
							<li><a href="#"> VENUES </a></li>
							<li><a href="#"> SUPPLIERS </a></li>
							<li><a href="#"> EVENT ORGANISERS </a></li>
							<li class="submenu">
								<a href="#">ABOUT US</a>
								<ul id="browse"> 
								<li class="abovedrop"><a href="#">About us</a></li>
								<li class="abovedrop"><a href="#">Why Munasabatna</a></li>
								<li class="abovedrop"><a href="#">Blogs</a></li>
								<li class="abovedrop"><a href="#">Contact us</a></li>
								</ul>
							</li>
							<li><a href="#"> CUSTOMER SERVICE </a></li>
							<li><a href="#"> SHORTLIST</a></li>
							<li>
							<a class="btn btn-default booknow-header" href="#">Book Now</a>
							</li>
								</ul>
							 
							</nav>
							<!---<div class="menu-toggle"><i class="fa fa-bars" arial-hidden="true"></i></div> -->
							</navbar>
</header>
  
     <!------- Header end-------->
           <!----  <hr class="line_hr"> ---->
            <br>
			<br>
			<br>
			<br>
			
            <div class="content-wrapper">
                    <!-- Main content -->
                    <?php
                       if (isset($main_content)) {
                           echo $main_content;
                       }
                       ?> 
                    <!-- /.content -->
                    <div id="google_translate_element"></div>
                 </div>

	<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('nav').toggleClass('active');
		});
		$('ul li').click(function(){
			$(this).siblings().removeClass('active');
			$(this).toggleClass('active');
		});
	});
	
</script>	
				 