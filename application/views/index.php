
<?php $this->view('inc/header'); ?>
        <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <!-- SLIDE  -->
                    <!-- SLIDE  --><?php foreach ($sliders as $s_data): ?>
                    <li data-index='rs-1' data-transition='curtain-1' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='../../assets/<?= base_url('media/images/') ?>photography3-280x43.jpg' data-rotate='0' data-saveperformance='off' data-title='Curtain from Left' data-description=''>
                        <img src="<?= UP . $s_data->Image ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

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

          <?php endforeach; ?>
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
                            <?php foreach ($blogs as $b_data): ?>
                            <!-- blog-item Post -->
                            <div class="blog-item">
                                <div class="blog-post">
                                    <div class="blogpost-img">
                                        <a href="<?= base_url('Blog-Detail/') . url_title($b_data->BlogTitle) . '/' . $b_data->BlogId ?>"><img src="<?= UP . $b_data->Image ?>" alt=""/></a>
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
                                        <p class="post-category"><a href="#" title="Posts by category Travel">Lifestyle</a></p>
                                        <h3 class="post-title"><a href=""><?= $b_data->BlogTitle ?></a></h3>

                                        <p><?= $b_data->ShortDescription ?></p>
                                        <div class="read-more">
                                            <a href="#" title="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- blog-item Post end -->


                        </div>

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

        <?php $this->view('inc/footer'); ?>