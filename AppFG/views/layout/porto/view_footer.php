</div><!-- div class main end --> 
<footer id="footer" class="mt-0">
	<div class="container container-xl-custom">
		<div class="row py-5">
			<div class="col text-center">
				<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
					<?php foreach($socials as $social) :?>
						<?php if(!empty($social['social_url'])) :?>
							<li class="social-icons-<?php echo strtolower($social['social_name']);?>"><a href="<?php echo $social['social_url'];?>" target="_blank" title="<?php echo $social['social_name'];?>"><i class="fab fa-<?php echo strtolower($social['social_icon']);?> text-2"></i></a></li>
						<?php endif;?>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright footer-copyright-style-2">
		<div class="container container-xl-custom py-2">
			<div class="row py-4">
				<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
					<p>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-primary top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-primary" href="<?php echo base_url('hakkimizda');?>">Hakkimizda</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-primary top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-primary" href="<?php echo base_url('portfoylerimiz');?>">Portföylerimiz</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-primary top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-primary" href="<?php echo base_url('galeri');?>">Fotoğraf Galerisi</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-primary top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-primary" href="<?php echo base_url('yazilar');?>">Yazılar</a></span></span>
						<span class="pe-0 pe-md-3 d-block d-md-inline-block"><i class="fas fa-angle-right text-color-primary top-1 p-relative"></i><span class="opacity-7 ps-1"><a class="text-primary" href="<?php echo base_url('iletisim');?>">İletişim</a></span></span>
					</p>
				</div>
				<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0 pt-4 pt-lg-0">
					<p><?php echo $setting['footer_copyright'];?></p>
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
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/nanoscroller/jquery.nanoscroller.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/theme.js"></script>

		<!-- Revolution Slider Scripts -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/examples/examples.portfolio.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/demos/demo-architecture-interior.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/custom.js?v=<?php echo time();?>"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/theme.init.js"></script>

	</body>
</html>