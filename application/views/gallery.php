<?php $this->view('inc/header'); ?>

<?php foreach ($photos as $b_data): ?>
<!--insta-full-gallery  -->
<section class="insta-full-gallery clearfix">

    <div class="slide-insta">
        <div class="insta-item">
            <a href="#"><img src="<?= UP . $b_data->Image ?>"<span>Travel</span></a>
        </div>
    </div>

</section>
<!--insta-full-gallery end  -->
<?php endforeach; ?>

<?php $this->view('inc/footer'); ?>