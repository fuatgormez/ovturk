<div role="main" class="main">
    <section class="section border-0 video overlay overlay-show overlay-op-1 m-0" data-video-path="<?php echo base_url('public/layout/iris/video/video.mp4'); ?>" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
        <div class="container position-relative z-index-3 h-100">
            <div class="row align-items-center h-100">
                <div class="col">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">
                            <?php echo $this->lang->line("home_header_slogan"); ?>
                        </h1>
                        <h1 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}"></h1>
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


    <section class="mt-10 pt-7 pb-3" id="main">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">

                    <div class="call-to-action-content text-center mb-5">
                        <?php echo $this->lang->line("select_your_store"); ?>
                        <?php echo $this->lang->line("deutschland_and_osterreich"); ?>
                    </div>

                    <?php foreach ($stores as $key => $store) : ?>
                        <a href="<?php echo base_url(); ?>language/select_store/<?php echo $store['id'] . '/' . @$par; ?>">
                            <div class="alert alert-primary text-black border-0">
								<strong class="float-left"><i class="fas fa-arrow-right"></i> <?php echo $store['store_name']; ?></strong>
                                <span class="float-right"><?php echo $store['store_address']; ?></span>
							</div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>