<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Monasabatna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="vendors/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendors/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="vendors/notify/notify.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/upcoming_event_userclick.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">

</head>

<body>
    <!------- Header start-------->

    <nav class="twobutton">
        <div class="float-right">

            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a class="" href="{{ url('/profile') }}">Profile</a>
                @else
                <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif
        </div>
    </nav>
    <header>
        <nav class="navbar bg-white">
            <a class="navbar-brand" href="/"> <img src="svg/images/monasabatna_final_logo.png" height="50"></a>
            <navbar>
                <ul>
                    <li>
                        <b> <a href="#" class="active">HOME </a></b>
                    </li>
                    <b>
                        <li><a href="#"> EXPRESS </a></li>
                    </b>
                    <b>
                        <li><a href="#"> VENUES</a></li>
                    </b>
                    <b>
                        <li><a href="#">SUPPLIERS </a></li>
                    </b>
                    <b>
                        <li><a href="#"> EVENT ORGANISERS </a></li>
                    </b>
                    <li class="submenu">
                        <b><a href="#">ABOUT US</a></b>
                        <ul id="browse">
                            <b>
                                <li class="abovedrop"><a href="#">About us</a></li>
                            </b>
                            <b>
                                <li class="abovedrop"><a href="#">Why Munasabatna</a></li>
                            </b>
                            <b>
                                <li class="abovedrop"><a href="#">Blogs</a></li>
                            </b>
                            <b>
                                <li class="abovedrop"><a href="#">Contact us</a></li>
                            </b>
                        </ul>
                    </li>
                    <b>
                        <li><a href="#">CUSTOMER SERVICE </a></li>
                    </b>
                    <b>
                        <li><a href="#"> WISHLIST</a></li>
                    </b>
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
