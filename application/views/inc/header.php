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
        <a href="index.html"><img src="<?= base_url('media/images/') ?>logo.png"  alt="image" /></a>
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
                        <li class="dropdown"><a href="#">Home </a>
                            <ul>
                                <li><a href="<?= base_url('Blog') ?>">Home 1</a></li>
                                <li><a href="home-2.html">Home 2</a></li>
                                <li class="dropdown"><a href="#">Header Layout</a>
                                    <ul>
                                        <li><a href="header-1.html">Header Style 1</a></li>
                                        <li><a href="header-2.html">Header Style 2</a></li>
                                        <li><a href="header-3.html">Header Style 3</a></li>
                                        <li><a href="header-dark.html">Header Dark</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Slider</a>
                                    <ul>
                                        <li><a href="box-slider.html">Slider Boxed </a></li>
                                        <li><a href="full-width-slider.html">Slider Full-Width</a></li>
                                        <li><a href="carousel-3-column.html">Carousel 3 Blocks</a></li>
                                        <li><a href="carousel-4-column.html">Carousel 4 Blocks</a></li>
                                        <li><a href="carousel-box.html">Carousel Boxed</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Standard Layout</a>
                                    <ul>
                                        <li><a href="post-standerd-sidebar.html">Right-Sidebar Version</a></li>
                                        <li><a href="post-standerd-sidebar-left.html">Left-Sidebar Version</a></li>
                                        <li><a href="post-standerd-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="post-grid-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-grid-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">1st Full Post then Grid</a>
                                    <ul>
                                        <li><a href="post-fullwidth-grid-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-fullwidth-grid-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="post-listing-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-listing-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Masonry Layout</a>
                                    <ul>
                                        <li><a href="post-masonry-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-masonry-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">1st Full Post then Masonry</a>
                                    <ul>
                                        <li><a href="post-fullwidth-masonry-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-fullwidth-masonry-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Features</a>
                            <ul>
                                <li class="dropdown"><a href="#">Post Layouts</a>
                                    <ul>
                                        <li><a href="post-detail-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-detail-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Post Formats</a>
                                    <ul>
                                        <li><a href="post-detail-gallery.html">Gallery Post Format</a></li>
                                        <li><a href="post-detail-video.html">Video  Post Format</a></li>
                                        <li><a href="post-detail-music.html">Music Post Format</a></li>
                                    </ul>
                                </li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="404-page.html">Page 404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Categories</a>
                            <ul>
                                <li><a href="travel.html">Travel</a></li>
                                <li><a href="nature.html">Nature</a></li>
                                <li><a href="lifestyle.html">Lifestyle</a></li>
                                <li><a href="fashion.html">Fashion</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Portfolio</a>
                            <ul>
                                <li class="dropdown"><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="porfolio-grid-2column.html">Grid 2 columns</a></li>
                                        <li><a href="porfolio-grid-3column.html">Grid 3 columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Masonry Layout</a>
                                    <ul>
                                        <li><a href="porfolio-masonry-2column.html">Masonry 2 columns</a></li>
                                        <li><a href="porfolio-masonry-3column.html">Masonry 3 columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-single-page.html">single Page</a></li>
                            </ul>
                        </li>
                        <li><a href="about-me.html">About me</a></li>
                        <li><a href="contact.html">Contact</a></li>
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
                        <li class="dropdown"><a href="#">Home </a>
                            <ul>
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="home-2.html">Home 2</a></li>
                                <li class="dropdown"><a href="#">Header Layout</a>
                                    <ul>
                                        <li><a href="header-1.html">Header Style 1</a></li>
                                        <li><a href="header-2.html">Header Style 2</a></li>
                                        <li><a href="header-3.html">Header Style 3</a></li>
                                        <li><a href="header-dark.html">Header Dark</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Slider</a>
                                    <ul>
                                        <li><a href="box-slider.html">Slider Boxed </a></li>
                                        <li><a href="full-width-slider.html">Slider Full-Width</a></li>
                                        <li><a href="carousel-3-column.html">Carousel 3 Blocks</a></li>
                                        <li><a href="carousel-4-column.html">Carousel 4 Blocks</a></li>
                                        <li><a href="carousel-box.html">Carousel Boxed</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Standard Layout</a>
                                    <ul>
                                        <li><a href="post-standerd-sidebar.html">Right-Sidebar Version</a></li>
                                        <li><a href="post-standerd-sidebar-left.html">Left-Sidebar Version</a></li>
                                        <li><a href="post-standerd-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="post-grid-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-grid-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">1st Full Post then Grid</a>
                                    <ul>
                                        <li><a href="post-fullwidth-grid-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-fullwidth-grid-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="post-listing-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-listing-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Masonry Layout</a>
                                    <ul>
                                        <li><a href="post-masonry-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-masonry-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">1st Full Post then Masonry</a>
                                    <ul>
                                        <li><a href="post-fullwidth-masonry-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-fullwidth-masonry-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Features</a>
                            <ul>
                                <li class="dropdown"><a href="#">Post Layouts</a>
                                    <ul>
                                        <li><a href="post-detail-sidebar.html">Sidebar Version</a></li>
                                        <li><a href="post-detail-fullwidth.html">Full Width Version</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Post Formats</a>
                                    <ul>
                                        <li><a href="post-detail-gallery.html">Gallery Post Format</a></li>
                                        <li><a href="post-detail-video.html">Video  Post Format</a></li>
                                        <li><a href="post-detail-music.html">Music Post Format</a></li>
                                    </ul>
                                </li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="404-page.html">Page 404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Categories</a>
                            <ul>
                                <li><a href="travel.html">Travel</a></li>
                                <li><a href="nature.html">Nature</a></li>
                                <li><a href="lifestyle.html">Lifestyle</a></li>
                                <li><a href="fashion.html">Fashion</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Portfolio</a>
                            <ul>
                                <li class="dropdown"><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="porfolio-grid-2column.html">Grid 2 columns</a></li>
                                        <li><a href="porfolio-grid-3column.html">Grid 3 columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Masonry Layout</a>
                                    <ul>
                                        <li><a href="porfolio-masonry-2column.html">Masonry 2 columns</a></li>
                                        <li><a href="porfolio-masonry-3column.html">Masonry 3 columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-single-page.html">single Page</a></li>
                            </ul>
                        </li>
                        <li><a href="about-me.html">About me</a></li>
                        <li><a href="contact.html">Contact</a></li>
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