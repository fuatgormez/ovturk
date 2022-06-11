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
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800%7CMontserrat:300,400,600,700&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-shop.css">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/demos/demo-architecture-interior.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/skins/skin-architecture-interior.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/modernizr/modernizr.min.js"></script>

        <?php if(base_url() !== 'http://ovturk:8888/') :?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158597044-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158597044-1');
        </script>
        <?php endif; ?>
	</head>
	<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
		<div class="body">
			<div class="sticky-wrapper sticky-wrapper-transparent  sticky-wrapper-effect-1 sticky-wrapper-effect-1-dark sticky-wrapper-border-bottom" data-plugin-sticky data-plugin-options="{'minWidth': 0, 'stickyStartEffectAt': 100, 'padding': {'top': 0}}">
				<div class="sticky-body">
					<div class="container container-xl-custom">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="py-4">
									<a href="<?php echo base_url();?>">
										<img height="75" src="<?php echo base_url('public/uploads/'.$setting['logo'].'?r='.time()); ?>">
									</a>
								</div>
							</div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="header-nav header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-expand header-nav-click-to-open align-self-start">
									<div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
                                                <?php foreach ($product_categories as $key => $row_category) : //bu kismi thumbnail photo ile degistir sonra ?>
                                                    <li>
                                                        <a class="dropdown-item text-color-light font-weight-bold text-decoration-none me-2" data-hash data-hash-offset="0" data-hash-offset-lg="95" href="<?php echo base_url($row_category['slug'].'/'.$row_category['category_id']);?>">
                                                        <?php foreach ($product_category_photo as $category_photo) : ?>
                                                            <?php if ($row_category['category_id'] == $category_photo['product_category_id']) : ?>
                                                                <img width="24" class="img-fluid thumbnail<?php echo $row_category['category_id']; ?>" src="<?php echo base_url('public/uploads/product_category_photos/' . $category_photo['photo']); ?>">
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                            <?php echo $row_category['category_name'];?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                                <li>
                                                <a class="dropdown-item text-color-light font-weight-bold text-decoration-none me-2" data-hash data-hash-offset="0" data-hash-offset-lg="95" href="<?php echo base_url('iletisim');?>"> 
                                                    <img width="24" class="img-fluid" src="<?php echo base_url('public/uploads/contact.svg'); ?>">
                                                    İletişim
                                                </a>
                                                </li>
											</ul>
										</nav>
									</div>
								</div>
                            </div>
							<div class="col-auto text-end d-flex align-items-center justify-content-end">
								<button class="hamburguer-btn hamburguer-btn-light d-md-none" data-set-active="false">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header id="header" class="side-header-overlay-full-screen side-header-hide" data-plugin-options="{'stickyEnabled': false}">

				<button class="hamburguer-btn hamburguer-btn-light hamburguer-btn-side-header hamburguer-btn-side-header-overlay active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>

				<div class="header-body d-flex h-100">
					<div class="header-column flex-row flex-lg-column justify-content-center h-100">
						<div class="header-container container d-flex h-100">
							<div class="header-row header-row-side-header flex-row h-100 pb-5">
								<div class="side-header-scrollable scrollable colored-slider h-50" data-plugin-scrollable>
									<div class="scrollable-content">
										<div class="header-nav header-nav-light-text header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-expand header-nav-click-to-open align-self-start">
											<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-4 header-nav-main-sub-effect-1">
												<nav>
													<ul class="nav nav-pills" id="mainNav">
                                                        <?php foreach ($product_categories as $key => $row_category) : ?>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="95" href="<?php echo base_url($row_category['slug'].'/'.$row_category['category_id']);?>">
                                                                    <?php echo $row_category['category_name']; ?>
                                                                </a>
                                                            </li>
														<?php endforeach; ?>
                                                        <li>
                                                            <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="95" href="<?php echo base_url('iletisim');?>">
                                                                İletişim
                                                            </a>
                                                        </li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">