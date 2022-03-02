<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_service['service_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="index.html">Startseite </a></li>
                <li class="active"><?php echo $page_service['service_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->





<!--==============================
Services Area
============================== -->

<section class="vs-service-wrapper service-box-layout1  pb-30 pb-lg-100 pt-60 pt-lg-130">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $row):?>
            <div class="col-md-6 col-lg-4">
                <div class="vs-service">
                    <div class="service-header">
                        <div class="service-image">
                            <img src="<?php echo base_url(); ?>public/uploads/service_photos/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
                        </div>
                        <h3 class="title heading4 text-white"><a href="<?php echo base_url(); ?>service/<?php echo $row['id']; ?>/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
                    </div>
                    <div class="service-body bg-white">
                        <span class="icon"><i class="flaticon-house"></i></span>
                        <h3 class="title heading4 mb-15"><a href="<?php echo base_url(); ?>service/<?php echo $row['id']; ?>/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
                        <p class="text"><?php echo nl2br($row['short_description']); ?></p>
                        <a href="<?php echo base_url(); ?>service/<?php echo $row['id']; ?>/<?php echo $row['slug']; ?>" class="link-btn">Mehr lesen<i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--==============================
Services Area End
============================== -->