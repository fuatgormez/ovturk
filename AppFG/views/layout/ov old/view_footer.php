</div><!-- div class main end --> 
<footer id="footer" class="border-0 mt-0">
				<div class="container py-5">
					<div class="row py-3">
						<div class="col-md-6 mb-5 mb-md-0">
							<div class="feature-box flex-column flex-xl-row align-items-center align-items-lg-start text-center text-lg-start">
								<div class="feature-box-icon bg-transparent mb-4 mb-xl-0 p-0">
									
								</div>
								<div class="feature-box-info line-height-1 ps-2">
									<span class="d-block font-weight-bold text-color-light text-5 pb-1 mb-1">Şimdi Arayın</span>
									<a href="tel:<?php echo $setting['footer_phone']; ?>" class="text-color-light text-4 line-height-7 text-decoration-none"><?php echo $setting['footer_phone']; ?></a>
									<p><a target="_blank" href="https://wa.me/+905549127135?text=Merhabalar"><img src="https://static.xx.fbcdn.net/rsrc.php/ym/r/36B424nhiL4.svg"></a></p>
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
									<p class="text-color-light text-4 line-height-4 font-weight-light mb-0"><a href="mailto:<?php echo $setting['footer_email']; ?>"><?php echo $setting['footer_email']; ?></a></p>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<hr class="bg-light opacity-2 my-0">
				<div class="container pb-5">
					<div class="row text-center text-md-start py-4 my-5">
						<div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
							<a href="demo-auto-services.html" class="text-decoration-none">
								<img src="<?php echo base_url('public/uploads/'.$setting['logo'].'?r='.time()); ?>" class="img-fluid" alt="" />
							</a>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">About Us</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADDRESS</span> 
									<a href="demo-auto-services-contact.html#get-direction" class="text-color-light custom-text-underline-1 font-weight-medium text-3-5">GET DIRECTIONS</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
									<ul class="list list-unstyled font-weight-light text-3-5 mb-0">
										<li class="text-color-light line-height-3 mb-0">
											Sales: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
										<li class="text-color-light line-height-3 mb-0">
											Services: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
									</ul>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
									<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">mail@example.com</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-medium">
								<?php foreach($socials as $social) :?>
									<?php if(!empty($social['social_url'])) :?>
										<li class="social-icons-<?php echo strtolower($social['social_name']);?>"><a href="<?php echo $social['social_url'];?>" target="_blank" title="<?php echo $social['social_name'];?>"><i class="fab fa-<?php echo strtolower($social['social_icon']);?> text-2"></i></a></li>
									<?php endif;?>
								<?php endforeach;?>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-md-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Auto Services</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Brake Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Check Engine</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Suspension Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Transmission Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">A/C Repair</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Oil Change</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Electrical Diagnostics</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Tune Up</a></li>
								<li class="mb-0"><a href="demo-auto-services-services-detail.html">Fuel System Repair</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Opening Hours</h5>
							<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
								<li>Mon - Fri: 8:30 am to 5:00 pm</li>
								<li>Saturday: 9:30 am to 1:00 pm</li>
								<li>Sunday: Closed</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-light py-4">
					<div class="container py-2">
						<div class="row">
							<div class="col">
								<p class="text-center text-3 mb-0">Porto Auto Services © 2021. All Rights Reserved.</p>
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