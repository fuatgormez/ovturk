<?php
defined('BASEPATH') or exit('No direct script access allowed');
$error_message = '';
$success_message = '';
?>
<!DOCTYPE html>
<html class="side-header-overlay-full-screen">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
        <base hef="<?php echo base_url(); ?>">

		<?php
            $class_name = '';
            $segment_2 = 0;
            $segment_3 = 0;
            $class_name = $this->router->fetch_class();
            $method = $this->router->fetch_method();
            $segment_1 = $this->uri->segment('1');
            $segment_2 = $this->uri->segment('2');
            $segment_3 = $this->uri->segment('3');
        
            // echo $class_name.$method .'-'.$segment_1 .'-'.$segment_2 .'-'.$segment_3;
            // exit;
            
            $data['setting'] = $this->Model_common->all_setting();

            $text_color = !empty($data['setting']['front_end_color']) ? 'style="color:#' . $data['setting']['front_end_color'] . ' !important"' : '';
            $background_color = !empty($data['setting']['front_end_background_color']) ? 'style="background-color:#' . $data['setting']['front_end_background_color'] . ' !important"' : '';

            
            if ($class_name == 'shop') {
                echo '<meta name="description" content="Ovtürk">';
                echo '<meta name="keywords" content="Ovtürk">';
                echo '<title>SHOP</title>';
            } else if ($class_name.'_'.$method == 'product_index') {
                echo '<meta name="description" content="' . strip_tags($product['meta_description']) . '">';
                echo '<meta name="keywords" content="' . strip_tags($product['meta_keyword']) . '">';
                echo '<title>' . strip_tags($product['meta_title']) . '</title>';
            } else if ($class_name.'_'.$method == 'product_category') {
                echo '<meta name="description" content="' . strip_tags($category['meta_description']) . '">';
                echo '<meta name="keywords" content="' . strip_tags($category['meta_keyword']) . '">';
                echo '<title>' . strip_tags($category['meta_title']) . '</title>'; 
            } else if ($class_name == 'home') {
                echo '<meta name="description" content="' . $page_home['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $page_home['meta_keyword'] . '">';
                echo '<title>' . $page_home['title'] . '</title>';
            } else if ($class_name == 'about') {
                echo '<meta name="description" content="' . $page_about['md_about'] . '">';
                echo '<meta name="keywords" content="' . $page_about['mk_about'] . '">';
                echo '<title>' . $page_about['mt_about'] . '</title>';
            } else if ($class_name == 'job') {
                echo '<meta name="description" content="' . $page_job['md_job'] . '">';
                echo '<meta name="keywords" content="' . $page_job['mk_job'] . '">';
                echo '<title>' . $page_job['mt_job'] . '</title>';
            } else if ($class_name == 'impressum') {
                echo '<meta name="description" content="' . $page_impressum['md_impressum'] . '">';
                echo '<meta name="keywords" content="' . $page_impressum['mk_impressum'] . '">';
                echo '<title>' . $page_impressum['mt_impressum'] . '</title>';
            } else if ($class_name == 'datenschutz') {
                echo '<meta name="description" content="' . $page_datenschutz['md_datenschutz'] . '">';
                echo '<meta name="keywords" content="' . $page_datenschutz['mk_datenschutz'] . '">';
                echo '<title>' . $page_datenschutz['mt_datenschutz'] . '</title>';
            } else if ($class_name == 'faq') {
                echo '<meta name="description" content="' . $page_faq['md_faq'] . '">';
                echo '<meta name="keywords" content="' . $page_faq['mk_faq'] . '">';
                echo '<title>' . $page_faq['mt_faq'] . '</title>';
            } else if ($class_name == 'team') {
                echo '<meta name="description" content="' . $page_team['md_team'] . '">';
                echo '<meta name="keywords" content="' . $page_team['mk_team'] . '">';
                echo '<title>' . $page_team['mt_team'] . '</title>';
            } else if ($class_name == 'team_member') {
                $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
                echo '<meta name="description" content="' . $single_team_member['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $single_team_member['meta_keyword'] . '">';
                echo '<title>' . $single_team_member['meta_title'] . '</title>';
            } else if ($class_name == 'portfolio') {
                echo '<meta name="description" content="' . $page_portfolio['md_portfolio'] . '">';
                echo '<meta name="keywords" content="' . $page_portfolio['mk_portfolio'] . '">';
                echo '<title>' . $page_portfolio['mt_portfolio'] . '</title>';
            } else if ($class_name == 'testimonial') {
                echo '<meta name="description" content="' . $page_testimonial['md_testimonial'] . '">';
                echo '<meta name="keywords" content="' . $page_testimonial['mk_testimonial'] . '">';
                echo '<title>' . $page_testimonial['mt_testimonial'] . '</title>';
            } else if ($class_name == 'contact') {
                echo '<meta name="description" content="' . $page_contact['md_contact'] . '">';
                echo '<meta name="keywords" content="' . $page_contact['mk_contact'] . '">';
                echo '<title>' . $page_contact['mt_contact'] . '</title>';
            } else if ($class_name == 'search') {
                echo '<meta name="description" content="' . $page_search['md_search'] . '">';
                echo '<meta name="keywords" content="' . $page_search['mk_search'] . '">';
                echo '<title>' . $page_search['mt_search'] . '</title>';
            } else if ($class_name == 'terms-and-conditions') {
                echo '<meta name="description" content="' . $page_term['md_term'] . '">';
                echo '<meta name="keywords" content="' . $page_term['mk_term'] . '">';
                echo '<title>' . $page_term['mt_term'] . '</title>';
            } else if ($class_name == 'privacy-policy') {
                echo '<meta name="description" content="' . $page_privacy['md_privacy'] . '">';
                echo '<meta name="keywords" content="' . $page_privacy['mk_privacy'] . '">';
                echo '<title>' . $page_privacy['mt_privacy'] . '</title>';
            } else if ($class_name == 'pricing') {
                echo '<meta name="description" content="' . $page_pricing['md_pricing'] . '">';
                echo '<meta name="keywords" content="' . $page_pricing['mk_pricing'] . '">';
                echo '<title>' . $page_pricing['mt_pricing'] . '</title>';
            } else if ($class_name == 'photo_gallery') {
                echo '<meta name="description" content="' . $page_photo_gallery['md_photo_gallery'] . '">';
                echo '<meta name="keywords" content="' . $page_photo_gallery['mk_photo_gallery'] . '">';
                echo '<title>' . $page_photo_gallery['mt_photo_gallery'] . '</title>';
            } else if ($class_name == 'service') {
                if ($segment_3 == 0) {
                    echo '<meta name="description" content="' . $page_service['md_service'] . '">';
                    echo '<meta name="keywords" content="' . $page_service['mk_service'] . '">';
                    echo '<title>' . $page_service['mt_service'] . '</title>';
                } else {
                    $single_service = $this->Model_service->service_detail($segment_3);
                    echo '<meta name="description" content="' . $single_service['meta_description'] . '">';
                    echo '<meta name="keywords" content="' . $single_service['meta_keyword'] . '">';
                    echo '<title>' . $single_service['meta_title'] . '</title>';
                }
            } else if ($class_name == 'category') {
                $single_category = $this->Model_category->category_by_id($segment_2);
                echo '<meta name="description" content="' . $single_category['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $single_category['meta_keyword'] . '">';
                echo '<title>' . $single_category['meta_title'] . '</title>';
            } else if ($class_name == 'news') {
                if ($segment_3 == 0) {
                    echo '<meta name="description" content="' . $page_news['md_news'] . '">';
                    echo '<meta name="keywords" content="' . $page_news['mk_news'] . '">';
                    echo '<title>' . $page_news['mt_news'] . '</title>';
                } else {
                    $news_single_item = $this->Model_news->news_detail($segment_3);
                    echo '<meta name="description" content="' . $news_single_item['meta_description'] . '">';
                    echo '<meta name="keywords" content="' . $news_single_item['meta_keyword'] . '">';
                    echo '<title>' . $news_single_item['meta_title'] . '</title>';
                    $og_id = $news_single_item['news_id'];
                    $og_photo = $news_single_item['photo'];
                    $og_title = $news_single_item['news_title'];
                    $og_description = $news_single_item['news_content_short'];
                    echo '<meta property="og:title" content="' . $og_title . '">';
                    echo '<meta property="og:type" content="website">';
                    echo '<meta property="og:url" content="' . base_url() . 'news/view/' . $og_id . '">';
                    echo '<meta property="og:description" content="' . $og_description . '">';
                    echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
                }
            } else if ($class_name == 'event') {
                if ($segment_3 == 0) {
                    echo '<meta name="description" content="' . $page_event['md_event'] . '">';
                    echo '<meta name="keywords" content="' . $page_event['mk_event'] . '">';
                    echo '<title>' . $page_event['mt_event'] . '</title>';
                } else {
                    $event_single_item = $this->Model_event->event_detail($segment_3);
                    echo '<meta name="description" content="' . $event_single_item['meta_description'] . '">';
                    echo '<meta name="keywords" content="' . $event_single_item['meta_keyword'] . '">';
                    echo '<title>' . $event_single_item['meta_title'] . '</title>';
                    $og_id = $event_single_item['event_id'];
                    $og_photo = $event_single_item['photo'];
                    $og_title = $event_single_item['event_title'];
                    $og_description = $event_single_item['event_content_short'];
                    echo '<meta property="og:title" content="' . $og_title . '">';
                    echo '<meta property="og:type" content="website">';
                    echo '<meta property="og:url" content="' . base_url() . 'event/view/' . $og_id . '">';
                    echo '<meta property="og:description" content="' . $og_description . '">';
                    echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
                }
            } else {
                echo '<meta name="description" content="Ovtürk">';
                echo '<meta name="keywords" content="Ovtürk">';
                echo '<title>Ovtürk</title>';
            }
        ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap-star-rating/css/star-rating.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/demos/demo-auto-services.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/skins/skin-auto-services.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<div class="notice-top-bar bg-primary" data-sticky-start-at="10">
				<button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>
				<div class="container">
					<div class="row justify-content-center py-2">
						<div class="col-9 col-md-12 text-center">
							<p class="text-color-light mb-0"><strong>DEAL OF THE WEEK</strong> - Free Diagnosis & Break Checks - <strong><a href="#" class="text-color-light text-decoration-none custom-text-underline-1">Make an Appointment</a></strong></p>
						</div>
					</div>
				</div>
			</div>
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-top header-top-small-minheight header-top-simple-border-bottom">
						<div class="container py-2">
							<div class="header-row justify-content-between">
								<div class="header-column col-auto px-0">
									<div class="header-row">
										<div class="header-nav-top">
											<ul class="nav nav-pills position-relative">
												<li class="nav-item d-none d-sm-block">
													<span class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0"><a href="mailto:porto@domain.com" class="text-decoration-none text-color-dark text-color-hover-primary"><i class="icons icon-envelope font-weight-bold position-relative text-4 top-3 me-1"></i> porto@domain.com</a></span>
												</li>
												<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
													<span class="d-flex align-items-center font-weight-medium text-color-dark ws-nowrap text-3"><i class="icons icon-clock font-weight-bold position-relative text-3 top-1 me-2"></i> Mon - Sat 9:00am - 6:00pm</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="header-column justify-content-end col-auto px-0 d-none d-md-flex">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
												<li class="social-icons-facebook">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
												</li>
												<li class="social-icons-twitter">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
												</li>
												<li class="social-icons-linkedin">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									<div class="header-logo z-index-2 col-lg-2 px-0">
										<a href="demo-auto-services.html">
											<img alt="Porto" width="123" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="<?php echo base_url('public/uploads/'.$setting['logo'].'?r='.time()); ?>">
										</a>
									</div>
									<div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
										<div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li><a href="demo-auto-services.html" class="nav-link active">Home</a></li>
													<li><a href="demo-auto-services-about-us.html" class="nav-link">About</a></li>
													<li class="dropdown">
														<a href="demo-auto-services-services.html" class="nav-link dropdown-toggle">Services</a>
														<ul class="dropdown-menu">
															<li><a href="demo-auto-services-services-detail.html" class="dropdown-item">Brake Repair</a></li>
															<li><a href="demo-auto-services-services-detail.html" class="dropdown-item">Check Engine</a></li>
															<li><a href="demo-auto-services-services-detail.html" class="dropdown-item">Suspension Repair</a></li>
															<li><a href="demo-auto-services-services-detail.html" class="dropdown-item">Transmission Repair</a></li>
															<li><a href="demo-auto-services-services-detail.html" class="dropdown-item">A/C Repair</a></li>
														</ul>
													</li>
													<li><a href="demo-auto-services-products.html" class="nav-link">Products</a></li>
													<li><a href="demo-auto-services-blog.html" class="nav-link">Blog</a></li>
													<li><a href="demo-auto-services-appointment.html" class="nav-link">Appointment</a></li>
													<li><a href="demo-auto-services-contact.html" class="nav-link">Contact</a></li>
												</ul>
											</nav>
										</div>
									</div>
									<ul class="header-extra-info custom-left-border-1 d-none d-xl-block">
										<li class="d-none d-sm-inline-flex ms-0">
											<div class="header-extra-info-icon">
												<i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
											</div>
											<div class="header-extra-info-text line-height-2">
												<span class="text-1 font-weight-semibold text-color-default">CALL US NOW</span>
												<strong class="text-4"><a href="tel:+1234567890" class="text-color-hover-primary text-decoration-none">+123 4567 890</a></strong>
											</div>
										</li>
									</ul>
									<div class="d-flex col-auto pe-0 ps-0 ps-xl-3">
										<div class="header-nav-features ps-0 ms-1">
											<div class="header-nav-feature header-nav-features-search d-inline-flex position-relative top-3 border border-top-0 border-bottom-0 custom-remove-mobile-border-left px-4 me-2">
												<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch">
													<i class="icons icon-magnifier header-nav-top-icon text-5 font-weight-bold position-relative top-3"></i>
												</a>
												<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
													<form role="search" action="page-search-results.html" method="get">
														<div class="simple-search input-group">
															<input class="form-control text-1 rounded" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
															<button class="btn" type="submit">
																<i class="icons icon-magnifier header-nav-top-icon"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
											<div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
												<a href="#" class="header-nav-features-toggle">
													<img src="img/icons/icon-cart-big.svg" height="30" alt="" class="header-nav-top-icon-img">
													<span class="cart-info">
														<span class="cart-qty">1</span>
													</span>
												</a>
												<div class="header-nav-features-dropdown" id="headerTopCartDropdown">
													<ol class="mini-products-list">
														<li class="item">
															<a href="#" title="Product Short Name" class="product-image"><img src="img/demos/auto-services/products/product-1.jpg" alt="Product Short Name"></a>
															<div class="product-details">
																<p class="product-name">
																	<a href="#">Product Short Name </a>
																</p>
																<p class="qty-price">
																	 1X <span class="price">$49</span>
																</p>
																<a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
															</div>
														</li>
													</ol>
													<div class="totals">
														<span class="label">Total:</span>
														<span class="price-total"><span class="price">$49</span></span>
													</div>
													<div class="actions">
														<a class="btn btn-dark" href="#">View Cart</a>
														<a class="btn btn-primary" href="#">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">