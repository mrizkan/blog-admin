<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Blog - A Responsive Blog HTML Template</title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="<?= base_url('media/css/') ?>bootstrap.css" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="<?= base_url('media/css/') ?>font-awesome.css" rel="stylesheet">
    <!-- flaticon css -->
    <link href="<?= base_url('media/css/') ?>flaticon.css" rel="stylesheet">
    <!-- animate css -->
    <link href="<?= base_url('media/css/') ?>animate.css" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="<?= base_url('media/css/') ?>owl.css" rel="stylesheet">
    <!-- fancybox css -->
    <link href="<?= base_url('media/css/') ?>jquery.fancybox.css" rel="stylesheet">
    <link href="<?= base_url('media/css/') ?>hover.css" rel="stylesheet">
    <!-- style css -->
    <link href="<?= base_url('media/css/') ?>style.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>settings.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>layers.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>navigation.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?= base_url('media/images/') ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url('media/images/') ?>favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('media/css/') ?>responsive.css" rel="stylesheet">

</head>

<body>
<div class="page-wrapper">

<!-- Preloader -->
<div class="preloader"></div>

<div class="topborder"></div>
<!--Logo-Header-->
<div class="logoheader logo-top">
    <div class="logo">
        <a href="/"><img src="<?= base_url('media/images/') ?>logo.png"  alt="image" /></a>
    </div>
</div>
<!--Logo-Header end-->

<!-- Main Header -->
<header class="site-header header-second">

<div class="header-main">
    <div class="container">
        <div class="nav-outer clearfix">

            <!--social-links-->
            <ul class="social-links">
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
            </ul>

            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li ><a href="/">Home </a>
                            
                        </li>
                        <li ><a href="<?= base_url('Photogallery/')?>">Gallery</a>
                            
                        </li>
                        <li ><a href="#">Categories</a>
                            
                        </li>
                        <li ><a href="#">Portfolio</a>
                            
                        </li>
                        <li><a href=>About me</a></li>
                        <li><a href=>Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->

            <!--Searchbox-->
            <div class="srchbox1">
                <ul class="menusearch">
                    <li>
                        <div class="bz_search_bar " >
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <div  class="bz_search_box">
                            <input placeholder="Search here" type="text">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!--Header-Main end-->

<!--Sticky Header-->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="index.html" class="img-responsive"><img src="<?= base_url('media/images/') ?>logo-small.png" alt="Logo" title="Logo"></a>
        </div>

        <!--Right Col-->
        <div class="right-col pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li ><a href="#">Home </a>

                        </li>
                        <li ><a href="#">Features</a>

                        </li>
                        <li ><a href="#">Categories</a>

                        </li>
                        <li ><a href="#">Portfolio</a>

                        </li>
                        <li><a href="">About me</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->

            <!--Searchbox-->
            <div class="srchbox1">
                <ul class="menusearch">
                    <li>
                        <div class="bz_search_bar " >
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <div  class="bz_search_box">
                            <input placeholder="Search here" type="text">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>

            <!--social-links-->
            <ul class="social-links">
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--End Sticky Header-->

</header>
<!-- Main Header end -->