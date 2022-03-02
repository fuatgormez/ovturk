<!--==============================
    page-header
============================== -->
<div class="page-header" style="background-image: url(<?php echo base_url('public/uploads/'. $setting['banner_about']); ?>)">
    <h1 class="page-title font-weight-bold text-capitalize ls-l"><?php echo $page_about['about_heading']; ?></h1>
</div>
<!--==============================
page-header end
============================== -->

<main class="main">
    <div class="page-content mt-10 pt-10">
        <section class="about-section pb-10 appear-animate">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <figure>
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/about/about-3-1.jpg" width="580" height="507" class="banner-radius" style="background-color: #BDD0DE;">
                        </figure>

                        <div class="mt-5 align-items-center justify-content-center">
                            <video src="<?php echo base_url('public/layout/iris/img/shop/irisbox_video.mp4'); ?>" controls autoplay="true" muted="muted" width="580" height="507"></video>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <?php echo $page_about['about_content']; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->


        <!-- End Team Section -->
    </div>
</main>
<!-- End Main -->