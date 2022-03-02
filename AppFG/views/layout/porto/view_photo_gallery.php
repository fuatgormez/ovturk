<!--==============================
    page-header
============================== -->
<section class="get-in-touch bg-color-after-secondary p-relative overflow-hidden" style="background-image: url('<?php echo base_url('public/uploads/' . $setting['banner_photo_gallery']); ?>'); background-size: cover; background-position: center; padding:130px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-color-light font-weight-bold custom-text-12 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <?php echo $page_photo_gallery['photo_gallery_heading']; ?>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--==============================
page-header end
============================== -->

<!--==============================
Photo Gallery Area
============================== -->
<div role="main" class="main">
    <div class="container py-4">
        <div class="row">
            <div class="col" style="min-height: 250px;">
                <div class="row portfolio-list lightbox" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                    <?php foreach ($photo_gallery as $row) : ?>
                        <div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-action">
                                            <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Photo Gallery Area End
============================== -->