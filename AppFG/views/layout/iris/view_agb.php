<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_about']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_agb['agb_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('homepage'); ?> </a></li>
                <li class="active"><?php echo $page_agb['agb_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->





<!--==============================
Agbs Area
============================== -->

<section class="vs-about-us-wrap vs-about-us-layout3 py-60 py-lg-130" id="about">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-12 col-xl-12">
                <div class="about-content">
                    <p><span class="sub-title mb-10 text-primary2 text-20"><strong><?php echo $page_agb['agb_heading']; ?></strong></span></p>
                    <?php echo $page_agb['agb_content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Agb Area End
============================== -->

