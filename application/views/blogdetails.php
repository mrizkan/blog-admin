
<?php $this->view('inc/header'); ?>
<!--Breadcrumbs -->
<section class="page-info">
    <div class="container clearfix">
        <div class="pull-left">
            <h3>Single Blog</h3>
        </div>
        <div class="pull-right">
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Single Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--Breadcrumbs   end-->

<!--page contents-->
<section class="contents">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-9">
<div class="post-detail  padd-right-30">
<div class="postdetail-img">



    <a href="#"><img src="<?= UP . $one_blog->Image ?>" alt="Post"></a>
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
<div class="postdtl-info">
    <p class="post-category"><a href="#">Travel</a></p>
    <h3 class="post-title"><a href="#"><?= $one_blog->BlogTitle ?></a></h3>
    <p class="post-category"><a href="#"><?= $one_blog->ShortDescription ?></a></p>

    <p class="post-category"><a href="#"><?= $one_blog->Description ?></a></p>


</div>




</div>
</div>
<div class="col-sm-12 col-md-3">
    <div class="sidebar">
        <div class="widget aboutme">
            <h4 class="widget-title">About me</h4>
            <div class="widget-box">
                <div class="aboutmeimg"><img src="images/widget/about1.jpg"  alt="image" /></div>
                <h5>Photographer & Blogger</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <span class="sign"><img src="images/widget/signature.png"  alt="image" /></span>
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
                        <a href="#"><img src="images/widget/insta1.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta2.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta3.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta4.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta5.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta6.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta7.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta8.jpg" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/widget/insta9.jpg" alt="image" /></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget w-insta">
            <h4 class="widget-title">Latest Posts</h4>
            <div class="widget-box">
                <div class="side-letest">
                    <div class="sidelist-img">
                        <a href="#"><img src="images/widget/thumb1.jpg" alt="image"></a>
                    </div>
                    <div class="sidelist-info">
                        <h4><a href="#">The journey is my home</a></h4>
                        <span class="post-date">May 9, 2017</span>
                    </div>
                </div>
                <div class="side-letest">
                    <div class="sidelist-img">
                        <a href="#"><img src="images/widget/thumb2.jpg" alt="image"></a>
                    </div>
                    <div class="sidelist-info">
                        <h4><a href="#">Best Mountaineering</a></h4>
                        <span class="post-date">May 9, 2017</span>
                    </div>
                </div>
                <div class="side-letest">
                    <div class="sidelist-img">
                        <a href="#"><img src="images/widget/thumb3.jpg" alt="image"></a>
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
                <img src="images/widget/ad-sample.jpg" alt="image" />
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
            <a href="#"><img src="images/insta/1.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/2.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/3.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/4.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/5.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/6.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/7.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/8.jpg" alt="image" /><span>Travel</span></a>
        </div>
        <div class="insta-item">
            <a href="#"><img src="images/insta/9.jpg" alt="image" /><span>Travel</span></a>
        </div>
    </div>
</section>
<!--insta-full-gallery end  -->


<?php $this->view('inc/footer'); ?>