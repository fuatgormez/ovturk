        <main class="main">
            <div class="page-content">
                <div class="owl-carousel owl-theme row  owl-nav-fade owl-dot-white intro-slider animation-slider cols-1" data-owl-options="{
                        'items': 1,
                        'nav': false,
                        'dots': false,
                        'loop': true,
                        'responsive': {
                            '992': {
                                'nav': true
                            }
                        }
                    }">
                    <div class="intro-slide1 banner banner-fixed" style="background-color: #666">
                        <figure>
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_shop']; ?>" alt="slide=" width="1920" height="599">
                        </figure>
                        <div class="banner-content x-50 y-50 text-center">
                            <h3 class="banner-title font-weight-bolder text-white mb-8 btn-rounded slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '1.2s', 'delay': '.8s'}">
                            <a href="<?php echo base_url();?>" class="btn btn-primary btn-sm">standort ändern</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <section class="grey-section pt-10 pb-10">
            <div class="container mt-4 mb-4">
                <h2 class="text-center title-center mb-5">Wie kann ich mein Auge fotografieren lassen?</h2>
                <div class="code-template">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'loop': true,
                                'margin': 20,
                                'autoplay': true,
                                'autoplayTimeout': 3000,
                                'autoplayHoverPause': true,
                                'responsive': {
                                    '0': {
                                        'items': 1
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '768': {
                                        'items': 3,
                                        'dots': false
                                    }
                                }
                                
                            }">


                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1200px;">
                                <div class="owl-item active" style="width: 380px; margin-right: 20px;">
                                    <div class="icon-box icon-inversed text-center code-content">
                                        <span class="icon-box-icon">
                                            <i class="d-icon-layer"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">1 Online Produkt bestellen</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 380px; margin-right: 20px;">
                                    <div class="icon-box icon-inversed text-center">
                                        <span class="icon-box-icon">
                                            <i class="d-icon-database"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">2. Zum Wunschstandort gehen</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 380px; margin-right: 20px;">
                                    <div class="icon-box icon-inversed text-center">
                                        <span class="icon-box-icon">
                                            <i class="d-icon-shoppingbag"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">3. Iris fotografieren</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main class="main">
            <!-- End PageHeader -->
            <div class="page-content mt-10 mb-10 pb-6">
                <div class="container">
                    <div class="row">
                        <h5 class="text-center mb-10">„Um unsere professionelle Iris-Fotografie mit unserem selbst entwickelten System und unseren high-quality Iris-Systemen unter Beweis zu stellen, geben wir Ihnen Sicherheit: Wir versichern eine <span style="color:#ff0000">100% ZUFRIEDENHEITSGARANTIE</span>, sofern Ihnen das Ergebnis nicht gefällt.“</h5>
                        <?php foreach ($product_categories as $key => $row_category) : ?>
                            <div class="col-xl-3 col-lg-4 col-6 mb-4">
                                <div class="category category-light category-absolute">
                                    <a href="#" class="btn-quickview btn-open-product-detail" data-category_id="<?php echo $row_category['category_id']; ?>">
                                        <figure class="category-media">
                                            <img src="<?php echo base_url(); ?>public/uploads/product_category_photos/thumbnail/<?php echo $row_category['thumbnail_photo']; ?>" width="300" height="338" alt="category" />
                                        </figure>
                                    </a>
                                    <div class="product-action">
										<a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
									</div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </main>


