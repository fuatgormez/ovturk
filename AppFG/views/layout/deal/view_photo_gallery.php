<!--==============================
    page-header
============================== -->
<div class="page-header" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_photo_gallery']; ?>)">
    <h1 class="page-title font-weight-bold text-capitalize ls-l"><?php echo $page_photo_gallery['photo_gallery_heading']; ?></h1>
</div>
<!--==============================
page-header end
============================== -->


<!--==============================
Photo Gallery Area
============================== -->

<section class="mt-10 mb-10">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h3>Lass dich von unseren Kundenrezensionen überzeugen und teile deine Freude mit anderen.</h3>
            <?php foreach ($photo_gallery as $row) : ?>
                <div class="col-md-4 mb-5">
                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" class="popup-image">
                        <img class="img-responsive" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" />
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!--==============================
Photo Gallery Area End
============================== -->