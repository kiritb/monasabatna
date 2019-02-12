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

    <nav class="header-secondary">
        <div class="float-right">
            <a href class="btn btn-outline-success"><img src={{ url('svg/images/photohead') }}><span class="badge"></span></a>
            <a href class="btn btn-sm btn-outline-secondary">SIGN UP</a>
        </div>
    </nav>
    <header>
       
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
