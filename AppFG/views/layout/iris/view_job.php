<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_job']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_job['job_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('homepage'); ?> </a></li>
                <li class="active"><?php echo $page_job['job_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->





<!--==============================
Jobs Area
============================== -->

<section class="vs-about-us-wrap py-30 py-lg-30" >
    <div class="container">
        <div class="row align-items-xl-center">

            <div class="col-md-12">
                <div class="widget">
                    <div class="image pb-30">
                        <img class="m-0" src="<?php echo base_url();?>public/uploads/wir_suchen_dich.jpg">
                    </div>
                    <?php echo $page_job['job_content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Jobs Area End
============================== -->

