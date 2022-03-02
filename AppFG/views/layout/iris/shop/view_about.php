<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_about']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_about['about_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('homepage'); ?> </a></li>
                <li class="active"><?php echo $page_about['about_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->


<!--==============================
About Us Area
============================== -->

<section class="vs-about-us-wrap vs-about-us-layout3 py-60 py-lg-130" id="about">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="about-us-image position-relative py-40 py-xl-70">
                    <div class="about-image1 rounded-circle overflow-hidden">
                        <a href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/about/about-3-1.jpg" class="popup-image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/about/about-3-1.jpg" class="w-100">
                        </a>
                    </div>
                    <div class="about-imgage2 rounded-circle overflow-hidden p-1 p-xl-3 bg-white">
                        <a href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/about/about-3-1.jpg" class="popup-image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/about/about-3-2.jpg" class="w-100 rounded-circle ">
                        </a>
                    </div>
                    <div class="experiance-box bg-primary border-white rounded-circle d-flex align-items-center justify-content-center">
                        <div class="exp-content pt-sm-2">
                            <span class="total-exp counter text-white">25</span>
                            <p class="exp-text text-white mb-0 font-blod">Years Of Experience</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 align-items-center justify-content-center">
                    <video src="<?php echo base_url('public/layout/iris/img/shop/irisbox_video.mp4'); ?>" controls autoplay="true" muted="muted"></video>
                </div>

            </div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="about-content">
                    <?php echo $page_about['about_content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
About Us Area End
============================== -->