<!--Call Start-->
<div class="call-us"
     style="background-image: url(<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/uploads/<?php echo $setting['cta_background']; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-12">
                <img src="<?php echo base_url(); ?>/public/uploads/helmet.png" data-no-retina="">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="call-text">
                    <h3><?php echo $setting['cta_text']; ?></h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-12">
                <div class="button">
                    <a href="<?php echo base_url() . $setting['cta_button_url']; ?>"><?php echo $setting['cta_button_text']; ?>
                        <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Call End-->

<!--Footer-Area Start-->
<div class="footer-area-bg"><!-- start footer-area-bg -->
    <div class="footer-area pt_60 pb_60">
        <div class="container">
            <div class="row">
                <!-- infos -->
                <div class="col-lg-6 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col4_title']; ?></h3>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                                    <span>
                                        <?php echo nl2br($setting['footer_address']); ?>
                                    </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                                    <span>
                                        <?php echo nl2br($setting['footer_phone']); ?>
                                    </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="text">
                                    <span>
                                        <?php echo nl2br($setting['footer_email']); ?>
                                    </span>
                            </div>
                        </div>
                        <ul class="footer-social">
                            <?php
                            foreach ($social as $row) {
                                if ($row['social_url'] != '') {
                                    echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- ./infos -->
                <!-- newsletter -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <h3><?php echo $setting['footer_col1_title']; ?></h3>
                        <p>
                            <?php echo nl2br($setting['newsletter_text']); ?>
                        </p>
                        <?php
                        if ($this->session->flashdata('error')) {
                            echo '<div class="error-class">' . $this->session->flashdata('error') . '</div>';
                        }
                        if ($this->session->flashdata('success')) {
                            echo '<div class="success-class">' . $this->session->flashdata('success') . '</div>';
                        }
                        ?>
                        <?php echo form_open(base_url() . 'newsletter/send', array('class' => '')); ?>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>"
                                   name="email_subscribe" required>
                            <span class="input-group-btn">
                                    <button class="btn form_subscribe" type="submit" name="form_subscribe"><i
                                                class="fa fa-location-arrow"></i></button>
                                </span>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <!-- ./newsletter -->
                <!-- portfolio -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col3_title']; ?></h3>
                        <div class="row pl-10 pr-10">
                            <?php
                            $i = 0;
                            foreach ($portfolio_footer as $row) {
                                $i++;
                                if ($i > $setting['footer_recent_portfolio_item']) {
                                    break;
                                }
                                ?>
                                <div class="col-4 footer-project">
                                    <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><img
                                                src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/uploads/<?php echo $row['photo']; ?>"
                                                alt="Project Photo"></a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- ./portfolio -->

                <!-- tags -->
                <div class="col-lg-12 col-md-12">
                    <div class="footer-item" style="word-wrap: break-word;">
                        <p class="text-center">
                            <a href="<?php echo base_url(); ?>service/1/büroreinigung">#Büroreinigung</a>
                            &nbsp;<a href="<?php echo base_url(); ?>service/2/gebäudereinigung">#Gebäudereinigung</a>
                            <a href="<?php echo base_url(); ?>service/3/fensterreinigung">#Fensterreinigung</a>
                            <a href="<?php echo base_url(); ?>service/4/messie-wohnung">#Messie Wohnung</a>
                            &nbsp;<a href="<?php echo base_url(); ?>service/5/sperrmüll">#Sperrmüll</a>&nbsp;
                            <a href="<?php echo base_url(); ?>service/6/sperrmüll-entsorgung-aller-art-auch-von-privat-kunden">#Sperrmüll
                                Entsorgung</a>
                            <a href="<?php echo base_url(); ?>service/7/dachreinigung">#Dachreinigung</a>
                            <a href="<?php echo base_url(); ?>service/8/hotelreinigung">#Hotelreinigung</a>
                            <a href="<?php echo base_url(); ?>service/9/teppichreinigung-bodenreinigung">#Teppichreinigung
                                & Bodenreinigung</a>
                        </p>
                        <p class="text-center">
                            <a href="<?php echo base_url(); ?>service/10/praxisreinigung">#Praxisreinigung</a>
                            <a href="<?php echo base_url(); ?>service/11/winterdienst">#Winterdienst</a>
                            <a href="<?php echo base_url(); ?>service/12/umzugsreinigung">#Umzugsreinigung</a>
                            <a href="<?php echo base_url(); ?>service/13/kita-reinigung">#Kita-reinigung</a>
                            <a href="<?php echo base_url(); ?>service/14/glasreinigung">#Glasreinigung</a>
                            <a href="<?php echo base_url(); ?>service/15/treppenhausreinigung">#Treppenhausreinigung</a>
                            <a href="<?php echo base_url(); ?>service/16/extra-reinigung">#Extra-reinigung</a>
                            <a href="<?php echo base_url(); ?>service/17/einkaufshilfe">#Einkaufshilfe</a>
                            <a href="<?php echo base_url(); ?>service/18/hausmeisterservice">#Hausmeisterservice</a>
                            <a href="<?php echo base_url(); ?>service/19/baureinigung">#Baureinigung</a>
                        </p>
                    </div>
                </div>
                <!-- ./tags -->

            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="outer-box">
                <div class="copyright-text">
                    <p>Copyright © All Rights Reserved | <?php echo $setting['footer_copyright']; ?></p>
                </div>
                <div class="footer-menu-bottom">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>impressum">Impressum</a></li>
                        <li><a href="<?php echo base_url(); ?>datenschutz">Datenschutz</a></li>
                        <li><a href="<?php echo base_url(); ?>faq">FAQ</a></li>
                        <li><a href="<?php echo base_url(); ?>sitemap.xml">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-Area End-->
</div><!-- end footer-area-bg -->

<!--Scroll-Top-->
<div class="scroll-top">
    <i class="fa fa-angle-up"></i>
</div>
<!--Scroll-Top-->




<!--Js-->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.filterizr.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/viewportchecker.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/custom.js?v=1.0"></script>


</body>
</html>