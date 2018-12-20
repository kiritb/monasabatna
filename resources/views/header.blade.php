<!DOCTYPE html>
<html lang="en">
<head>
   <title>Monasabatna</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="vendors/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendors/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">

</head>
<body>
      <!------- Header start-------->

<nav class="twobutton">
    <div class="float-right">
        <a href class="btn btn-outline-success">LOGIN</a>
        <a href class="btn btn-sm btn-outline-secondary">SIGN UP</a>
    </div>
</nav>
<header>
<nav class="navbar bg-white">
	<a class="navbar-brand" href="#"> <img src="svg/images/monasabatna_final_logo.png" height="50"></a>
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
