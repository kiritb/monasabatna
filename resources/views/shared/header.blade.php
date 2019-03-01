<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Monasabatna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{ url('vendors/bootstrap/bootstrap.min.css') }}" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/datepicker/datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/notify/notify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/loader/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
</head>

<!-- This id is used for many purposes, please do not remove or modify it -->

<body id="bodyContainer">
    <!------- Header start-------->
    <nav class="header-secondary">
        <div class="float-right">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <!-- Example split danger button -->
                <div class="btn-group">
                    <div class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Profile
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">User info</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Privacy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="logout()">Logout</a>
                    </div>
                </div>
                @else
                <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif
        </div>
    </nav>
    <header>
        <nav class="navbar navbar-expand justify-content-between bg-white">
            <a class="navbar-brand" href="{{ url('/') }}"> <img src={{ url('svg/images/monasabatna_final_logo.png') }}
                    height="50"></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/expressdeals') }}">EXPRESS</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/upcoming-events') }}">UPCOMINGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listing?pageis=venues') }}">VENUES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listing?pageis=suppliers') }}">SUPPLIERS </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listing?pageis=events') }}">EVENT ORGANISERS</a>
                </li>
                <li class="nav-item submenu">
                    <a class="nav-link" href="{{ url('/aboutus') }}">ABOUT US</a>
                    <ul>
                        <li class="submenu-item">
                            <a class="nav-link" href="{{ url('/aboutus') }}">About us</a>
                        </li>
                        <li class="submenu-item">
                            <a class="nav-link" href="{{ url('/#whyus') }}">Why Munasabatna</a>
                        </li>
                        <li class="submenu-item">
                            <a class="nav-link" href="{{ url('/blogs') }}">Blogs</a>
                        </li>
                        <li class="submenu-item">
                            <a class="nav-link" href="{{ url('/contactus') }}">Contact us</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#facilitate-form') }}">CUSTOMER SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/wishlist') }}"> WISHLIST</a>
                </li>
            </ul>
            <a class="btn btn-default booknow-header" href="#">Book Now</a>
            <!-- <div class="menu-toggle"><i class="fa fa-bars" arial-hidden="true"></i></div> -->
        </nav>
    </header>
    <!------- Header end-------->
    <div class="content-wrapper">
        <!-- Main content -->
        @if(isset($main_content))
        {{ $main_content }}
        @endif
        <!-- /.content -->
        <div id="google_translate_element"></div>
    </div>
