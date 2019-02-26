<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Monasabatna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{ url('vendors/bootstrap/bootstrap.min.css') }}" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/fontawesome/css/fontawesome.min.css') }}">
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
    
    <header>
        <nav class="navbar bg-white">
            <a class="navbar-brand" href="{{ url('/') }}"> <img src={{ url('svg/images/monasabatna_final_logo.png') }}
                    height="50"></a>
                    <div class="picimage"> <img class="circlepic" src="svg/images/passportimg.jpg">
                    <span id="vendorbadge" class="badge badge-light">2</span>
                    </div>
                    <div class="vendorpanelheader">
                    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    John Deo
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{ url('vendorprofile') }}">Profile</a>
    <a class="dropdown-item" href="#">Log Out</a>
  </div>
</div>
</div>
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

    