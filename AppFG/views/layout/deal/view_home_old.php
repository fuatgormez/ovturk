<!--==============================
Hero Area
============================== -->

<section class="vs-hero-wrapper">
    <video class="slide-video slide-media" autoplay loop muted preload="metadata" style="width:100%">
        <source src="public/layout/iris/video/video.mp4" type="video/mp4" />
    </video>
    
</section>


<!--==============================
Hero Area End
============================== -->

<div class="background-image" data-vs-img="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/bg-img/bg-img-3-1.png">


    <!--==============================
    Services Area
============================== -->
    <?php if ($page_home['home_service_status'] == 'Show') : ?>
        <section class="vs-service-wrapper service-box-layout3 pt-5 pt-md-3 pt-lg-5 pt-xl-0 pb-30 pb-lg-100 mt-sm-5" id="service">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="section-title3">
                            <h3 class="title3">Ein Foto vom Spiegel deiner Seele.</h3>
                            <span>Wir fotografieren Deine Iris mit unserer selbst entwickelten einzigartigen Technologie. Diese bietet eine künstliche Intelligenz und hochauflösende Makroaufnahmen für eine detaillierte Darstellung Deiner Iris.</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-4">
                        <div class="section-title3">
                            <h3 class="title3">Wer sind wir?</h3>
                            <p>Kreativkünstler und Fotografen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-title3">
                            <h3 class="title3">Wo sind wir?</h3>
                            <p>Überall auf der Welt verteilt.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-title3">
                            <h3 class="title3">Was machen wir?</h3>
                            <p>Einzigartige Fotos deiner Augen.</p>
                        </div>
                    </div>

                    <div class="col-xl-12 ">
                    <div class="justify-content-center text-center">
                        <a href="<?php echo base_url('shop');?>"><h2 class="vs-btn style3 w-100"><span class="btn-text">ZUM SHOP<i class="far fa-long-arrow-alt-right ml-4"></i></span><span class="btn-bg" style="top: 51px; left: -2.32812px;"></span></h2></a>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="container pt-30 pt-lg-30">
            <div class="row no-gutters">
                <div class="col-xl-6 video-box bg-primary">
                    <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/video/video-thumb-img-1.jpg" alt="Vidoe Thumb Image" class="w-100 h-100">
                    <?php if($this->input->cookie('youtube_term')): ?>
                    <a href="https://vimeo.com/539085733" class="play-btn overlay-center popup-video"><i class="fas fa-play"></i></a>
                    <?php endif;?>
                </div>
                <div class="col-xl-6">
                    <div class="row no-gutters counter-box-layout1 justify-content-around bg-primary2 pr-30 pl-30 pr-xl-80 pl-xl-80 py-60 py-xl-80">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                        <h4 class="title text-primary3 text-center mt-0 mb-50">Uns findest Du auch in Deiner nähe</h4>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-6">
                            <div class="counter-box pr-xl-3 mb-md-0 mb-5">
                                <span class="icon d-block text-white">
                                    <i class="flaticon-diamond icon-2x"></i>
                                    <b class="shape bg-white"></b>
                                </span>
                                <span class="counter text-white">90</span>
                                <p class="text mb-5 text-white">Standorte europaweit</p>
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-6">
                            <div class="counter-box pl-xl-5">
                                <span class="icon d-block text-white">
                                    <i class="flaticon-award icon-2x"></i>
                                    <b class="shape bg-white"></b>
                                </span>
                                <span class="counter text-white">43000</span>
                                <p class="text mb-5 text-white">Zufriedene Kunden</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 pt-30 pt-lg-130">
                    <div class="justify-content-center text-center">
                        <a href="<?php echo base_url('shop');?>"><h2 class="vs-btn style3 w-100"><span class="btn-text">ZUM SHOP<i class="far fa-long-arrow-alt-right ml-4"></i></span><span class="btn-bg" style="top: 51px; left: -2.32812px;"></span></h2></a>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php endif; ?>
<!--==============================
Services Area End
============================== -->

</div>





<!--==============================
Team Area
============================== -->
<?php if ($page_home['home_team_status'] == 'Show') : ?>
    <section class="vs-team-wrapper vs-team-layout1 background-image pb-30 pb-lg-100 pb-xl-130 pt-60 pt-lg-130" data-vs-img="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/team/team-bg-3-1.png" id="team">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7">
                    <div class="section-title3">
                        <h2 class="title1"><?php echo $page_home['home_team_title']; ?></h2>

                        <span class="icon mb-25">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/icon/section-title-icon-1.png" alt="<?php echo $page_home['home_team_title']; ?>">
                            <i class="line"></i>
                            <i class="line-2"></i>
                        </span>
                        <p class="text font-md font-medium">
                            <span class="text-primary sub-title">
                                <span class="bg-primary text-white"><?php echo $page_home['home_team_subtitle']; ?></span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="inner-wrapper">
                <?php foreach ($team_members as $row) : ?>
                    <div class="vs-team-member" data-overlay="primary2" data-opacity="7">
                        <div class="member-img">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
                        </div>
                        <div class="member-content">
                            <h3 class="member-name heading4 mb-0 text-white"><a href="<?php echo base_url(); ?>team-member/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                            </h3>
                            <span class="membe-degi text-white"><?php echo $row['designation']; ?></span>
                        </div>
                        <div class="social-links">
                            <ul>
                                <?php if ($row['facebook'] != '') : ?>
                                    <li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif; ?>
                                <?php if ($row['twitter'] != '') : ?>
                                    <li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if ($row['linkedin'] != '') : ?>
                                    <li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <?php endif; ?>
                                <?php if ($row['youtube'] != '') : ?>
                                    <li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <?php endif; ?>
                                <?php if ($row['google_plus'] != '') : ?>
                                    <li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                                <?php endif; ?>
                                <?php if ($row['instagram'] != '') : ?>
                                    <li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <?php endif; ?>
                                <?php if ($row['flickr'] != '') : ?>
                                    <li><a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fab fa-flickr"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="clearfix"></div>
    </section>
<?php endif; ?>
<!--==============================
Team Area End
============================== -->


<div class="background-image bg-auto" data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_why_choose_photo']; ?>">

    <!--==============================
Testimonial Area
============================== -->
    <?php if ($page_home['home_testimonial_status'] == 'Show') : ?>
        <section class="vs-testimonial-wrapper vs-testimonial-layout3">
            <div class="container">
                <div class="inner-wrapper position-relative bg-white px-20 px-md-40 px-lg-80 pt-20 pt-md-40 pb-20 pt-lg-80 pb-md-40 pb-lg-80">
                    <div class="testimonial-author-image vs-carousel" id="author-image" data-asnavfor="#testomonial-content" data-slidetoshow="2" data-centermode="true" data-xlcentermode="true" data-mlcentermode="true" data-lgcentermode="true" data-mdcentermode="true" data-smcentermode="true" data-xscentermode="true" data-arrows="true" data-xlarrows="true" data-mlarrows="true" data-lgarrows="true" data-mdarrows="true" data-smarrows="true" data-xsarrows="true">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-1.jpg" alt="Author Image">
                        </div>
                        <div class="image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-2.jpg" alt="Author Image">
                        </div>
                        <div class="image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3.jpg" alt="Author Image">
                        </div>
                        <div class="image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-4.jpg" alt="Author Image">
                        </div>
                        <div class="image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-5.jpg" alt="Author Image">
                        </div>
                        <div class="image">
                            <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-6.jpg" alt="Author Image">
                        </div>
                    </div>
                    <div class="testimonial-content-area vs-carousel" id="testomonial-content" data-slidetoshow="1" data-asnavfor="#author-image" data-fade="true">
                        <div class="vs-testimonial d-lg-flex align-items-center">
                            <div class="author border-primary2 mr-lg-15 mr-xl-40">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3-1.png" alt="Testimonial Author">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="name mb-1 text-primary font-medium">Adam Jonas</h3>
                                <span class="degi text-title">Cleaner of Cleanio</span>
                                <p class="text font-medium text-title pt-lg-20 text-20 mb-0">Seamlessly repurpose 24/7
                                    e-business vis-a-vis resource sucking customer service. Effi- ciently unleash
                                    backward-compatible manufactured products whereas backward-compat- ible
                                    infrastructures. Dynamically cultivate process-centric relationships and progressive
                                    platforms</p>
                            </div>
                        </div>
                        <div class="vs-testimonial d-lg-flex align-items-center">
                            <div class="author border-primary2 mr-lg-15 mr-xl-40">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3-2.png" alt="Testimonial Author">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="name mb-1 text-primary font-medium">Tara Tanju</h3>
                                <span class="degi text-title">Cleaner of Cleanio</span>
                                <p class="text font-medium text-title pt-lg-20 text-20 mb-0">non consequatur deserunt
                                    sint asperiores vero magnam, impedit expedita nulla rerum ipsa assumenda enim harum,
                                    quisquam quaerat dignissimos. Ab Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Laudantium nisi voluptatem non consequatur deserunt sint asperiores vero
                                    magnam, impedit!</p>
                            </div>
                        </div>
                        <div class="vs-testimonial d-lg-flex align-items-center">
                            <div class="author border-primary2 mr-lg-15 mr-xl-40">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3-3.png" alt="Testimonial Author">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="name mb-1 text-primary font-medium">Sehana Devakar</h3>
                                <span class="degi text-title">Cleaner of Cleanio</span>
                                <p class="text font-medium text-title pt-lg-20 text-20 mb-0">Ratione sit nihil
                                    repellendus eum qui enim nobis molestias corporis dignissimos nisi Ratione sit nihil
                                    repellendus eum qui enim nobis molestias corporis dignissimos nisi Lorem ipsum dolor
                                    sit amet consectetur, adipisicing elit. Ratione sit nihil repellendus eum qui enim
                                    nobis molestias.</p>
                            </div>
                        </div>
                        <div class="vs-testimonial d-lg-flex align-items-center">
                            <div class="author border-primary2 mr-lg-15 mr-xl-40">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3-4.png" alt="Testimonial Author">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="name mb-1 text-primary font-medium">Omeka Parle</h3>
                                <span class="degi text-title">Cleaner of Cleanio</span>
                                <p class="text font-medium text-title pt-lg-20 text-20 mb-0">Seamlessly repurpose 24/7
                                    e-business vis-a-vis resource sucking customer service. Effi- ciently unleash
                                    backward-compatible manufactured products whereas backward-compat- ible
                                    infrastructures. Dynamically cultivate process-centric relationships and progressive
                                    platforms</p>
                            </div>
                        </div>
                        <div class="vs-testimonial d-lg-flex align-items-center">
                            <div class="author border-primary2 mr-lg-15 mr-xl-40">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3-5.png" alt="Testimonial Author">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="name mb-1 text-primary font-medium">David Luis</h3>
                                <span class="degi text-title">Member of Cleanio</span>
                                <p class="text font-medium text-title pt-lg-20 text-20 mb-0">Ratione sit nihil
                                    repellendus eum qui enim nobis molestias corporis dignissimos nisi Ratione sit nihil
                                    repellendus eum qui enim nobis molestias corporis dignissimos nisi Lorem ipsum dolor
                                    sit amet consectetur, adipisicing elit. Ratione sit nihil repellendus eum qui enim
                                    nobis molestias.</p>
                            </div>
                        </div>
                        <div class="vs-testimonial d-lg-flex align-items-center">
                            <div class="author border-primary2 mr-lg-15 mr-xl-40">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/testimonial/author-img-3-6.png" alt="Testimonial Author">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="name mb-1 text-primary font-medium">Jerzzy Lamot</h3>
                                <span class="degi text-title">Cleaner of Cleanio</span>
                                <p class="text font-medium text-title pt-lg-20 text-20 mb-0">non consequatur deserunt
                                    sint asperiores vero magnam, impedit expedita nulla rerum ipsa assumenda enim harum,
                                    quisquam quaerat dignissimos. Ab Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Laudantium nisi voluptatem non consequatur deserunt sint asperiores vero
                                    magnam, impedit!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--==============================
Testimonial Area End
============================== -->


    <!--==============================
Features Area
============================== -->
    <?php if ($page_home['home_why_choose_status'] == 'Show') : ?>
        <section class="vs-features-wrapper vs-features-layout1 pt-60 pt-lg-130" id="features">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-7">
                        <div class="section-title3">
                            <span class="text-white sub-title">What
                                <span class="bg-primary text-white">We Do</span>
                            </span>
                            <h2 class="title1">Why Choose Us</h2>
                            <span class="icon mb-25">
                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/icon/section-title-icon-1.png" alt="Section Title Icons">
                                <i class="line"></i>
                                <i class="line-2"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-container">
                <div class="row vs-carousel" data-slidetoshow="3" data-mdslidetoshow="2" data-smslidetoshow="2" data-xsslidetoshow="1">
                    <div class="col-xl-4">
                        <div class="vs-features border-primary bg-white">
                            <span class="features-icon text-primary mb-15 mb-xl-25 "><i class="flaticon-window-1 icon-2x"></i></span>
                            <h3 class="features-title heading4 mb-10"><a href="about.html">Excellent Services</a></h3>
                            <p class="features-text mb-15">We offer a variety of great cleaning services to our
                                customers.</p>
                            <ul class="features-list mb-25">
                                <li>We recognise that cleaning</li>
                                <li>We recognise that cleaning</li>
                            </ul>
                            <a href="about.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="vs-features border-primary bg-white">
                            <span class="features-icon text-primary mb-15 mb-xl-25 "><i class="flaticon-washing-machine icon-2x"></i></span>
                            <h3 class="features-title heading4 mb-10"><a href="about.html">Safe Cleaning Supplies</a>
                            </h3>
                            <p class="features-text mb-15">We offer a variety of great cleaning services to our
                                customers.</p>
                            <ul class="features-list mb-25">
                                <li>We recognise that cleaning</li>
                                <li>We recognise that cleaning</li>
                            </ul>
                            <a href="about.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="vs-features border-primary bg-white">
                            <span class="features-icon text-primary mb-15 mb-xl-25 "><i class="flaticon-cleaning-3 icon-2x"></i></span>
                            <h3 class="features-title heading4 mb-10"><a href="about.html">Convenient Scheduling</a>
                            </h3>
                            <p class="features-text mb-15">We offer a variety of great cleaning services to our
                                customers.</p>
                            <ul class="features-list mb-25">
                                <li>We recognise that cleaning</li>
                                <li>We recognise that cleaning</li>
                            </ul>
                            <a href="about.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="vs-features border-primary bg-white">
                            <span class="features-icon text-primary mb-15 mb-xl-25 "><i class="flaticon-project-management icon-2x"></i></span>
                            <h3 class="features-title heading4 mb-10"><a href="about.html">Long Time Cleaning</a></h3>
                            <p class="features-text mb-15">We offer a variety of great cleaning services to our
                                customers.</p>
                            <ul class="features-list mb-25">
                                <li>We recognise that cleaning</li>
                                <li>We recognise that cleaning</li>
                            </ul>
                            <a href="about.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--==============================
Features Area End
============================== -->


</div>




<!--==============================
    Subscribe Form
============================== -->

<div class="vs-subscribe-form-wrap subscribe-form-layout1 bg-secondary border-primary py-40 py-lg-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-7">

                <?php
                if ($this->session->flashdata('error')) {
                    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                }
                if ($this->session->flashdata('success')) {
                    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                }
                ?>
                <?php echo form_open(base_url() . 'newsletter/send', array('class' => 'input-style2')); ?>
                <div class="row align-items-center">
                    <div class="form-group col-md-8 mb-4 mb-md-0">
                        <input type="email" class="form-control" placeholder="<?php echo $this->lang->line('email_address'); ?>" name="email_subscribe" required>
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group col-md-4 text-center text-md-left mb-0">
                        <button class="vs-btn style2 form_subscribe" type="submit" name="form_subscribe"><span class="btn-text"><?php echo $this->lang->line('newsletter_button'); ?><i class="far fa-long-arrow-alt-right"></i></span><span class="btn-bg"></span>
                        </button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Subscribe Form End
============================== -->