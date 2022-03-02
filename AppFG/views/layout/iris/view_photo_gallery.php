<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image "
     data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_photo_gallery']; ?>"
     data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_photo_gallery['photo_gallery_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('homepage'); ?> </a></li>
                <li class="active"><?php echo $page_photo_gallery['photo_gallery_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->


<!--==============================
Photo Gallery Area
============================== -->

<section class="py-60 py-lg-130">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h3>Lass dich von unseren Kundenrezensionen überzeugen und teile deine Freude mit anderen.</h3>
            <?php foreach ($photo_gallery as $row): ?>
                <div class="col-md-4">
                    <div class="widget">
                        <div class="instagram-feeds">
                        <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>"
                           class="popup-image">
                            <img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>"/>
                        </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!--==============================
Photo Gallery Area End
============================== -->

