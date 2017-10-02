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

        <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    <li data-index='rs-1' data-transition='curtain-1' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='../../assets/<?= base_url('media/images/') ?>photography3-280x43.jpg' data-rotate='0' data-saveperformance='off' data-title='Curtain from Left' data-description=''>
                        <img src="<?= base_url('media/images/') ?>6.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-398-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="10" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: normal; font-size: 16px; line-height: 24px;margin-bottom:40px;font-weight:normal;text-align:center;">
                            <div class="smooth-textbox">
                                <div class="smoothwrp">
                                    <p class="sldcat">Nature</p>
                                    <h1>Nature is The Art <br>of God</h1>
                                    <p>To sit in the shade on a fine day, and look upon verdure, is the most perfect refreshment</p>
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-498-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="140" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 50px;font-weight:500;text-align:center;">
                            <div class="slidebtns">
                                <a href="#" class="slidebtn1">Know More</a>
                            </div>

                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index='rs-2' data-transition='curtain-1' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='../../assets/<?= base_url('media/images/') ?>photography3-280x43.jpg' data-rotate='0' data-saveperformance='off' data-title='Curtain from Left' data-description=''>
                        <img src="<?= base_url('media/images/') ?>5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-598-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="10" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: normal; font-size: 16px; line-height: 24px;margin-bottom:40px;font-weight:normal;text-align:center;">
                            <div class="smooth-textbox">
                                <div class="smoothwrp">
                                    <p class="sldcat">Lifestyle</p>
                                    <h1>Be Happy for This Moment</h1>
                                    <p>When you rise in the morning, give thanks for the light, for your life, for your strength</p>
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-698-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="140" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 50px;font-weight:500;text-align:center;">
                            <div class="slidebtns">
                                <a href="#" class="slidebtn1">Know More</a>
                            </div>

                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index='rs-3' data-transition='curtain-1' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='../../assets/<?= base_url('media/images/') ?>photography3-280x43.jpg' data-rotate='0' data-saveperformance='off' data-title='Curtain from Left' data-description=''>
                        <img src="<?= base_url('media/images/') ?>1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-798-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="10" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: normal; font-size: 16px; line-height: 24px;margin-bottom:40px;font-weight:normal;text-align:center;">
                            <div class="smooth-textbox">
                                <div class="smoothwrp">
                                    <p class="sldcat">Travel</p>
                                    <h1>All Travel has its Advantages</h1>
                                    <p>One’s destination is never a place, but a new way of seeing things.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-898-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="140" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 50px;font-weight:500;text-align:center;">
                            <div class="slidebtns">
                                <a href="#" class="slidebtn1">Know More</a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Main Slider  end-->

        <!--page contents-->
        <section class="contents">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="blog-list-single  padd-right-30">

                            <!-- blog-item Post -->
                            <div class="blog-item">
                                <div class="blog-post">
                                    <div class="blogpost-img"> <?php foreach ($blogs as $b_data): ?>
                                        <a href="#"><img src="<?= UP . $b_data->Image ?>" alt=""/></a>
                                    </div>
                                    <div class="post-share"> <?php endforeach; ?>
                                        <div class="social-share">
                                            <span class="title-share">Share:</span>
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <div class="coment-share">
                                            <a href="#"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>
                                    <div class="blogpost-info">
                                        <p class="post-category"><a href="#" title="Posts by category Travel">Lifestyle</a></p>
                                        <h3 class="post-title"><a href="#">Because of your smile, you make life more beautiful.</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#"><i class="fa fa-user"></i> By Dylan Wilson</a></span>
                                            <span><a href="#"><i class="fa fa-clock-o"></i> March 20, 2017</a></span>
                                        </div>
                                        <p>I enjoy my life. I think I have a very good life. And I think I'm very satisfied with the direction of my career and just my lifestyle and everything like that. So I wouldn't change a single thing.</p>
                                        <div class="read-more">
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item Post end -->

                            <!-- blog-item Post -->
                            <div class="blog-item">
                                <div class="blog-post">
                                    <div class="blogpost-img blog-slider">
                                        <a href="#"><img src="<?= base_url('media/images/') ?>blog-post-4.jpg" alt="Post"></a>
                                        <a href="#"><img src="<?= base_url('media/images/') ?>blog-post-3.jpg" alt="Post"></a>
                                    </div>
                                    <div class="post-share">
                                        <div class="social-share">
                                            <span class="title-share">Share:</span>
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <div class="coment-share">
                                            <a href="#"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>
                                    <div class="blogpost-info">
                                        <p class="post-category"><a href="#" title="Posts by category Travel">Nature</a></p>
                                        <h3 class="post-title"><a href="#">Never does nature say one thing and wisdom another. </a></h3>
                                        <div class="post-meta">
                                            <span><a href="#"><i class="fa fa-user"></i> By Dylan Wilson</a></span>
                                            <span><a href="#"><i class="fa fa-clock-o"></i> March 20, 2017</a></span>
                                        </div>
                                        <p>There is new life in the soil for every man. There is healing in the trees for tired minds and for our overburdened spirits, there is strength in the hills, if only we will lift up our eyes. </p>
                                        <div class="read-more">
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item Post end -->

                            <!-- blog-item Post -->
                            <div class="blog-item">
                                <div class="blog-post">
                                    <div class="blogpost-img">
                                        <a href="#"><img src="<?= base_url('media/images/') ?>blog-post-5.jpg" alt="Post"></a>
                                    </div>
                                    <div class="post-share">
                                        <div class="social-share">
                                            <span class="title-share">Share:</span>
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <div class="coment-share">
                                            <a href="#"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>
                                    <div class="blogpost-info">
                                        <p class="post-category"><a href="#" title="Posts by category Travel">Travel</a></p>
                                        <h3 class="post-title"><a href="#">You either know fashion or you don’t.</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#"><i class="fa fa-user"></i> By Dylan Wilson</a></span>
                                            <span><a href="#"><i class="fa fa-clock-o"></i> March 20, 2017</a></span>
                                        </div>
                                        <p>People say, ‘What do you mean you want to help the world, but you’re so concerned about fashion?’ It’s illegal to be naked. It is something that is extremely important.</p>
                                        <div class="read-more">
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item Post end -->

                            <!-- blog-item Post -->
                            <div class="blog-item">
                                <div class="blog-post">
                                    <div class="blogpost-img">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7dilTLvbHxc" allowfullscreen></iframe>
                                    </div>
                                    <div class="post-share">
                                        <div class="social-share">
                                            <span class="title-share">Share:</span>
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        <div class="coment-share">
                                            <a href="#"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>
                                    <div class="blogpost-info">
                                        <p class="post-category"><a href="#" title="Posts by category Travel">Travel</a></p>
                                        <h3 class="post-title"><a href="#">A traveler without observation is a bird without wings</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#"><i class="fa fa-user"></i> By Dylan Wilson</a></span>
                                            <span><a href="#"><i class="fa fa-clock-o"></i> March 20, 2017</a></span>
                                        </div>
                                        <p>All travel has its advantages. If the passenger visits better countries, he may learn to improve his own. And if fortune carries him to worse, he may learn to enjoy it.</p>
                                        <div class="read-more">
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item Post end -->

                        </div>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="sidebar">
                            <div class="widget aboutme">
                                <h4 class="widget-title">About me</h4>
                                <div class="widget-box">
                                    <div class="aboutmeimg"><img src="<?= base_url('media/images/') ?>about1.jpg"  alt="image" /></div>
                                    <h5>Photographer & Blogger</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <span class="sign"><img src="<?= base_url('media/images/') ?>signature.png"  alt="image" /></span>
                                </div>
                            </div>
                            <div class="widget w-subscribe">
                                <h4 class="widget-title">Subscribe & Follow</h4>
                                <div class="widget-box">
                                    <div class="social-widget">
                                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-heart"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget w-insta">
                                <h4 class="widget-title">Follow On Instagram</h4>
                                <div class="widget-box">
                                    <ul class="instapic">
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta1.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta2.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta3.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta4.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta5.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta6.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta7.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta8.jpg" alt="image" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>insta9.jpg" alt="image" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget w-insta">
                                <h4 class="widget-title">Latest Posts</h4>
                                <div class="widget-box">
                                    <div class="side-letest">
                                        <div class="sidelist-img">
                                            <a href="#"><img src="<?= base_url('media/images/') ?>thumb1.jpg" alt="image"></a>
                                        </div>
                                        <div class="sidelist-info">
                                            <h4><a href="#">The journey is my home</a></h4>
                                            <span class="post-date">May 9, 2017</span>
                                        </div>
                                    </div>
                                    <div class="side-letest">
                                        <div class="sidelist-img">
                                            <a href="#"><img src="<?= base_url('media/images/') ?>thumb2.jpg" alt="image"></a>
                                        </div>
                                        <div class="sidelist-info">
                                            <h4><a href="#">Best Mountaineering</a></h4>
                                            <span class="post-date">May 9, 2017</span>
                                        </div>
                                    </div>
                                    <div class="side-letest">
                                        <div class="sidelist-img">
                                            <a href="#"><img src="<?= base_url('media/images/') ?>thumb3.jpg" alt="image"></a>
                                        </div>
                                        <div class="sidelist-info">
                                            <h4><a href="#">Everything happens for a reason</a></h4>
                                            <span class="post-date">May 9, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget w-tags">
                                <h4 class="widget-title">Categories</h4>
                                <div class="widget-box">
                                    <ul class="srch_catagory">
                                        <li><a href="#">About us<span class="post_count">(1)</span></a></li>
                                        <li><a href="#">Checkerboard<span class="post_count">(7)</span> </a></li>
                                        <li><a href="#">Fashion<span class="post_count">(13)</span> </a></li>
                                        <li><a href="#">Lifestyle<span class="post_count">(11)</span> </a></li>
                                        <li><a href="#">Nature<span class="post_count">(9)</span> </a></li>
                                        <li><a href="#">Travel<span class="post_count">(7)</span> </a></li>
                                        <li><a href="#">Types<span class="post_count">(12)</span> </a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget w-tags">
                                <h4 class="widget-title">Search by Tags</h4>
                                <div class="widget-box">
                                    <ul class="srchtags">
                                        <li><a href="#">Fashion </a></li>
                                        <li><a href="#">Feelings </a></li>
                                        <li><a href="#">Guide </a></li>
                                        <li><a href="#">Music </a></li>
                                        <li><a href="#">Nature </a></li>
                                        <li><a href="#">Shopping </a></li>
                                        <li><a href="#">Style </a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Family </a></li>
                                        <li><a href="#">City </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget w-newleter">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="widget-box">
                                    <div class="subscribe-form">
                                        <div class="input-holder">
                                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                        </div>
                                        <div class="btn-holder">
                                            <input value="Subscribe" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget ads-widget">
                                <div class="widget-box">
                                    <img src="<?= base_url('media/images/') ?>ad-sample.jpg" alt="image" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--page contents end  -->

        <!--insta-full-gallery  -->
        <section class="insta-full-gallery clearfix">
            <h2 class="instahd"><span>Follow @ Instagram</span></h2>
            <div class="slide-insta">
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>1.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>2.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>3.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>4.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>5.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>6.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>7.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>8.jpg" alt="image" /><span>Travel</span></a>
                </div>
                <div class="insta-item">
                    <a href="#"><img src="<?= base_url('media/images/') ?>9.jpg" alt="image" /><span>Travel</span></a>
                </div>
            </div>
        </section>
        <!--insta-full-gallery end  -->

        <!--footer  -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-img">
                                        <a href="#">
                                            <img src="<?= base_url('media/images/') ?>logo.png" alt="">
                                        </a>
                                    </div>
                                    <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore, facere adipisci tenetur.</p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Feature Links</h4>
                                    <div class="footer-twits">
                                        <ul>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <div class="t-content">
                                                    <a href="#">Lorem ipsum dolor sit amet, consect adipiscing elit</a>
                                                    <span>June 12, 2017</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <div class="t-content">
                                                    <a href="#">Lorem ipsum dolor sit amet, consect adipiscing elit</a>
                                                    <span>June 12, 2017</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <div class="t-content">
                                                    <a href="#">Lorem ipsum dolor sit amet, consect adipiscing elit</a>
                                                    <span>June 12, 2017</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>information</h4>
                                    <p>
                                        You can contact us our consectetur adipisicing elit.inventore, facere adipisci tenetur.
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Tel:</span> +123 564 543</p>
                                        <p><span>Email:</span> admin@minn.com</p>
                                        <p><span>Working Hours:</span> 10am-5pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Gallery</h4>
                                    <div class="gallery-img">
										<ul>
											<li>
												<a href="#"><img src="<?= base_url('media/images/') ?>1.jpg" alt=""></a>
											</li>
											<li>
												<a href="#"><img src="<?= base_url('media/images/') ?>2.jpg" alt=""></a>
											</li>
											<li>
												<a href="#"><img src="<?= base_url('media/images/') ?>3.jpg" alt=""></a>
											</li>
											<li>
												<a href="#"><img src="<?= base_url('media/images/') ?>4.jpg" alt=""></a>
											</li>
											<li>
												<a href="#"><img src="<?= base_url('media/images/') ?>5.jpg" alt=""></a>
											</li>
											<li>
												<a href="#"><img src="<?= base_url('media/images/') ?>6.jpg" alt=""></a>
											</li>
										</ul>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright text-center">
                                <p>
                                    Copyright © 2017
                                    <a href="#"> Creative Template</a>. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--footer end  -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span class="icon fa fa-long-arrow-up"></span></div>

    <!-- jquery Liabrary -->
    <script src="<?= base_url('media/js/') ?>jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="<?= base_url('media/js/') ?>bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="<?= base_url('media/js/') ?>jquery.fancybox.pack.js"></script>
    <script src="<?= base_url('media/js/') ?>jquery.fancybox-media.js"></script>
    <!-- owl.carousel js -->
    <script src="<?= base_url('media/js/') ?>owl.js"></script>
    <!-- counter js -->
    <script src="<?= base_url('media/js/') ?>jquery.appear.js"></script>
    <script src="<?= base_url('media/js/') ?>jquery.countTo.js"></script>
    <!-- isotop js -->
    <script src="<?= base_url('media/js/') ?>isotope.pkgd.min.js"></script>
    <!-- validate js -->
    <script src="<?= base_url('media/js/') ?>validate.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="<?= base_url('media/js/') ?>jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?= base_url('media/js/') ?>revolution.extension.video.min.js"></script>

    <!-- script JS  -->
    <script src="<?= base_url('media/js/') ?>script.js"></script>
</body>

</html>