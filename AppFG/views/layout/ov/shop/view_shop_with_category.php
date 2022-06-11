<div role="main" class="main shop">
    <section class="section border-0 p-relative" style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_shop']; ?>); position: absolute; inset: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
        <div class="particles-wrapper z-index-1">
            <div id="particles-1"></div>
        </div>
        <div class="container">
            <div class="row py-5 my-5">
                <div class="col py-5 text-center">
                    <h1 class="text-color-dark font-weight-extra-bold text-10 line-height-5 mb-5 appear-animation animated fadeInDownShorterPlus appear-animation-visible" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                        <span class="p-2" style="background-color:rgba(235,193,8,0.9)">
                            <?php echo $this->lang->line("shop_header_slogan1"); ?>
                        </span>
                    </h1>
                    <h1 class="text-color-dark text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation animated fadeInDownShorterPlus appear-animation-visible" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 100ms;">
                        <span class="p-2" style="background-color:rgba(235,193,8,0.9)">
                            <?php echo $this->lang->line("shop_header_slogan2"); ?>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="masonry-loader masonry-loader-showing">
            <div class="row mt-5">
                <div class="col">
                    <div class="ratio ratio-4x3">
                        <video width="100%" height="100%" controls="" muted="" loop="" preload="metadata">
                            <source src="<?php echo base_url('public/uploads/welcome_video.mp4'); ?>" type="video/mp4">
                        </video>
                    </div>

                    <?php echo $setting['frontend_shop_body']; ?>

                    <?php if ($setting['frontend_shop_countdown_status'] === 'Show') : ?>
                        <hr>
                        <div class="powr-countdown-timer" id="<?php echo $setting['frontend_shop_countdown_id']; ?>"></div>
                        <script src="<?php echo $setting['frontend_shop_countdown_link']; ?>"></script>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h1 class="mb-2 text-center"><?php echo $this->lang->line("shop_guide_title"); ?></h1>
                    <div class="row process process-shapes process-shapes-always-animate my-5">
                        <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">1</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-1 text-5 font-weight-bold"><?php echo $this->lang->line("shop_guide_step1"); ?></h4>
                            </div>
                        </div>
                        <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">2</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-1 text-5 font-weight-bold"><?php echo $this->lang->line("shop_guide_step2"); ?></h4>
                            </div>
                        </div>
                        <div class="process-step col-lg-4 mb-1 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">3</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-1 text-5 font-weight-bold"><?php echo $this->lang->line("shop_guide_step3"); ?></h4>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-center">Veuillez noter : La promotion est uniquement valable en ligne. Le prix total s'applique sur place. Tous les prix sont sans engagement.Tous les bons sont valables pendant un an à compter de la date de la commande.
                    </h6>
                    <h4 class="mb-5 text-center"><?php echo $this->lang->line("shop_body_slogan"); ?></h4>
                </div>
            </div>

            <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                <?php foreach ($product_categories as $key => $row_category) : ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="featured-box featured-box-primary">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="product-thumb-info border-0 mb-3">
                                            <a href="<?php echo base_url('shop/product/quickview/' . $row_category['category_id']); ?>" data-category_id="<?php echo $row_category['category_id']; ?>">
                                                <div class="product-thumb-info-image">
                                                    <img alt="" class="img-fluid" src="<?php echo base_url(); ?>public/uploads/product_category_photos/thumbnail/<?php echo $row_category['thumbnail_photo']; ?>">
                                                </div>
                                            </a>
                                        </div>
                                        <span class="mt-5 text-2 text-black font-weight-bold"><?php echo $row_category['category_name']; ?></span>
                                        <a href="<?php echo base_url('shop/product/quickview/' . $row_category['category_id']); ?>" class="btn w-100 btn-rounded bg-primary mt-1">Weitere Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>