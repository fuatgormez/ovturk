<footer id="footer" class="border-0 mt-0">
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="feature-box flex-column flex-xl-row align-items-center align-items-lg-start text-center text-lg-start">
                    <div class="feature-box-icon bg-transparent mb-4 mb-xl-0 p-0">

                    </div>
                    <div class="feature-box-info line-height-1 ps-2">
                        <span class="d-block font-weight-bold text-color-light text-5 pb-1 mb-1">Şimdi Arayın</span>
                        <a href="tel:<?php echo $setting['footer_phone']; ?>" class="text-color-light text-4 line-height-7 text-decoration-none">
                            <?php echo $setting['footer_phone']; ?>
                        </a>
                        <p>
                            <a target="_blank" href="https://wa.me/+905549127135?text=Merhabalar"><img src="https://static.xx.fbcdn.net/rsrc.php/ym/r/36B424nhiL4.svg"></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="feature-box flex-column flex-xl-row align-items-center align-items-lg-start text-center text-lg-start">
                    <div class="feature-box-icon bg-transparent mb-4 mb-xl-0 p-0">
                        <img width="45" src="img/demos/auto-services/icons/icon-location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light position-relative bottom-3'}" />
                    </div>
                    <div class="feature-box-info line-height-1 ps-2">
                        <span class="d-block font-weight-bold text-color-light text-5 mb-2"><?php echo $setting['footer_address'] ?></span>
                        <p class="text-color-light text-4 line-height-4 font-weight-light mb-0">
                            <a href="mailto:<?php echo $setting['footer_email']; ?>" class="text-white">
                                <?php echo $setting['footer_email']; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="bg-light opacity-2 my-0">
    <div class="container pb-5">
        <div class="row text-center text-md-start py-4 my-5">
            <div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
                <a href="<?php echo base_url();?>" class="text-decoration-none">
								<img src="<?php echo base_url('public/uploads/' . $setting['logo'] . '?r=' . time()); ?>" class="img-fluid" alt="" />
							</a>
            </div>
            <div class="col-md-6 col-lg-8 offset-lg-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.0632192855805!2d27.254211015547316!3d38.44000868137894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b96340cafeabef%3A0x1b6d99ba5a78d323!2sPlus%20Reklam%20Tabela%20Matbaa%20Foto%C4%9Fraf!5e0!3m2!1str!2str!4v1613998845435!5m2!1str!2str" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-primary py-4">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-8">
					<p class="text-3 mb-0">
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-white top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-white" href="<?php echo base_url('hakkimizda');?>">Hakkimizda</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-white top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-white" href="<?php echo base_url('portfoylerimiz');?>">Portföylerimiz</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-white top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-white" href="<?php echo base_url('galeri');?>">Fotoğraf Galerisi</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-white top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-white" href="<?php echo base_url('yazilar');?>">Yazılar</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-white top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-white" href="<?php echo base_url('iletisim');?>">İletişim</a></span></span>
					</p>
                </div>
                <div class="col-md-4">
                    <p class="text-3 text-white mb-0">Copyrights © 2022 All Rights Reserved by Önce Vatan</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Vendor -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/lazysizes/lazysizes.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/vide/jquery.vide.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/vivus/vivus.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/theme.js"></script>

<!-- Revolution Slider Scripts -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/examples/examples.portfolio.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/views/view.contact.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/views/view.shop.js"></script>

<!-- Demo -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/demos/demo-auto-services.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/theme.init.js"></script>

</body>

</html>