<div role="main" class="main">
    <section class="section border-0 video overlay overlay-show overlay-op-1 m-0" data-video-path="<?php echo base_url('public/layout/iris/video/video.mp4'); ?>" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
        <div class="container position-relative z-index-3 h-100">
            <div class="row align-items-center h-100">
                <div class="col">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-0 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">
                            <?php echo $this->lang->line("home_header_slogan"); ?>
                        </h1>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center mt-0">
                        <a href="#main" data-hash data-hash-offset="0" data-hash-offset-lg="80">
                            <span class="m_scroll_arrows unu"></span>
                            <span class="m_scroll_arrows doi"></span>
                            <span class="m_scroll_arrows trei"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark mb-5 pb-5">
        <div class="container" id="main">
            <div class="row">
                <div class="col">
                    <div class="row counters mt-5">
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter text-white">
                                <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                                <strong data-to="90" data-append="K">0</strong>
                                <label><?php echo $this->lang->line("counter_locations"); ?></label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter text-white">
                                <i class="fas fa-users fa-3x mb-3"></i>
                                <strong data-to="40" data-append="K+">0</strong>
                                <label><?php echo $this->lang->line("counter_satisfied_costumers"); ?></label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter text-white">
                                <i class="fas fa-warehouse fa-3x mb-3"></i>
                                <strong data-to="2000" data-append="m2">0</strong>
                                <label><?php echo $this->lang->line("counter_production_area"); ?></label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter text-white">
                                <i class="fas fa-check-circle fa-3x mb-3"></i>
                                <strong data-to="100" data-append="%">0</strong>
                                <label><?php echo $this->lang->line("counter_satisfaction_guarantee"); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-10 pt-7 pb-3">
        <div class="container">
        <div class="row justify-content-center text-center">
                <div class="col-md-12 appear-animation" data-appear-animation="fadeInUpShorter">
                <a href="<?php echo base_url('shop'); ?>" class="btn w-100 btn-dark btn-modern text-uppercase text-5 mb-5 bg-color-hover-primary border-color-hover-primary">
                        <?php echo $this->lang->line("to_the_shop"); ?>
                        <i class="d-icon-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-12 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="section-title3">
                        <?php echo $this->lang->line("home_welcome_title"); ?>
                        <?php echo $this->lang->line("home_welcome_content"); ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-5">
                <div class="col-md-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="section-title3">
                        <?php echo $this->lang->line("home_welcome_box1_title"); ?>
                        <?php echo $this->lang->line("home_welcome_box1_desc"); ?>
                    </div>
                </div>
                <div class="col-md-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <div class="section-title3">
                        <?php echo $this->lang->line("home_welcome_box2_title"); ?>
                        <?php echo $this->lang->line("home_welcome_box2_desc"); ?>
                    </div>
                </div>
                <div class="col-md-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <div class="section-title3">
                        <?php echo $this->lang->line("home_welcome_box3_title"); ?>
                        <?php echo $this->lang->line("home_welcome_box3_desc"); ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-12 appear-animation" data-appear-animation="fadeInUpShorter">
                <a href="<?php echo base_url('shop'); ?>" class="btn w-100 btn-dark btn-modern text-uppercase text-5 mt-4 bg-color-hover-primary border-color-hover-primary">
                        <?php echo $this->lang->line("to_the_shop"); ?>
                        <i class="d-icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <hr class="solid my-5">
        </div>
    </section>

    <section>
        <div class="container mb-10">
            <div class="row cols-sm-12 cols-md-12 mb-10 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                    <?php echo $this->lang->line("home_welcome1_title"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-md-3 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <a href="<?php echo base_url('shop'); ?>">
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/home-img/1.jpeg" alt="team image-box" width="280" height="280">
                    </a>
                    <?php echo $this->lang->line("home_welcome1_box1_title"); ?>
                    <a href="<?php echo base_url('shop'); ?>" class="btn btn-dark btn-rounded  mb-1">
                        <?php echo $this->lang->line("to_the_shop"); ?>
                        <i class="d-icon-arrow-right"></i>
                    </a>
                </div>
                <div class="col-sm-2 col-md-3 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <a href="<?php echo base_url('shop'); ?>">
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/home-img/2.jpeg" alt="team image-box" width="280" height="280" style="background-color: #465D7F;">
                    </a>
                    <?php echo $this->lang->line("home_welcome1_box2_title"); ?>
                    <a href="<?php echo base_url('shop'); ?>" class="btn btn-dark btn-rounded  mb-1">
                        <?php echo $this->lang->line("to_the_shop"); ?>
                        <i class="d-icon-arrow-right"></i>
                    </a>
                </div>
                <div class="col-sm-2 col-md-3 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <a href="<?php echo base_url('shop'); ?>">
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/home-img/3.jpeg" alt="team image-box" width="280" height="280" style="background-color: #E8E7E3;">
                    </a>
                    <?php echo $this->lang->line("home_welcome1_box3_title"); ?>
                    <a href="<?php echo base_url('shop'); ?>" class="btn btn-dark btn-rounded  mb-1">
                        <?php echo $this->lang->line("to_the_shop"); ?>
                        <i class="d-icon-arrow-right"></i>
                    </a>
                </div>
                <div class="col-sm-2 col-md-3 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <a href="<?php echo base_url('shop'); ?>">
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/home-img/4.jpeg" alt="team image-box" width="280" height="280" style="background-color: #121A1F;">
                    </a>
                    <?php echo $this->lang->line("home_welcome1_box4_title"); ?>
                    <a href="<?php echo base_url('shop'); ?>" class="btn btn-dark btn-rounded  mb-1">
                        <?php echo $this->lang->line("to_the_shop"); ?>
                        <i class="d-icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>