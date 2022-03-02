<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ($this->session->userdata('store_language') != "") {
    $this->lang->load('file', $this->session->userdata('store_language'));
} else {
    $this->lang->load('file', 'de');
}

$error_message = '';
$success_message = '';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="google-site-verification" content="cBVZWzqwxivSBJHqjsVOn4ddR5D9p1341VBKS5n5OWA" />
    <base hef="<?php echo base_url(); ?>">
    <?php

    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    $text_color = !empty($setting['front_end_color']) ? 'style="color:#' . $setting['front_end_color'] . ' !important"' : '';
    $background_color = !empty($setting['front_end_background_color']) ? 'style="background-color:#' . $setting['front_end_background_color'] . ' !important"' : '';

    if ($class_name == 'shop') {
        echo '<meta name="description" content="IRISPICTURE">';
        echo '<meta name="keywords" content="irisshot, irispohoto, irispicture">';
        echo '<title>SHOP</title>';
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
        echo '<meta name="description" content="IRISPICTURE">';
        echo '<meta name="keywords" content="irisshot, irispohoto, irispicture">';
        echo '<title>IRISPICTURE</title>';
    }
    ?>

    <meta name="author" content="Fuat Görmez">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Preload Font -->
    <link rel="preload" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/fonts/riode.ttf?5gap68" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/sticky-icon/stickyicon.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/demo3.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/spacing.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/style.min.css">

    <!--==============================
    	CSS File End
	============================== -->
    <meta name="facebook-domain-verification" content="fymzx9ej0ull8cctoej1hf93es2mu9" />
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $setting['facebook_init'];?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $setting['facebook_init'];?>&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WVPZBG6');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LB5P7KZ0CW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LB5P7KZ0CW');
    </script>
</head>

<body class="home">


    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


    <!--********************************
       Code Start From Here
******************************** -->

<div class="page-wrapper">

    <!--==============================
Preloader
============================== -->    

    <!--==============================
Preloader End
============================== -->


<header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg ls-normal">Ein Foto vom Spiegel deiner Seele.</p>
                    </div>
                    <div class="header-right">
                        <a href="<?php echo base_url();?>" class="d-lg-show">Store wechseln</a>
                        <a href="<?php echo base_url('contact');?>" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>

                        <div class="dropdown login-dropdown off-canvas">
                            <div class="canvas-overlay"></div>
                            <!-- End Login Toggle -->
                            <div class="dropdown-box scrollable">
                                <div class="login-popup">
                                    <div class="form-box">
                                        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                            <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5">
                                                <li class="nav-item">
                                                    <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                                                </li>
                                                <li class="delimiter">or</li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-no lh-1 ls-normal" href="#register">Register</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="signin">
                                                    <form action="#">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="singin-email" name="singin-email" placeholder="Username or Email Address *" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="singin-password" name="singin-password" placeholder="Password *" required="">
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox" id="signin-remember" name="signin-remember">
                                                                <label class="form-control-label" for="signin-remember">Remember
                                                                    me</label>
                                                            </div>
                                                            <a href="#" class="lost-link">Lost your password?</a>
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded" type="submit">Login</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Login With</label>
                                                        <div class="social-links">
                                                            <a href="#" title="social-link" class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="register">
                                                    <form action="#">
                                                        <div class="form-group mb-3">
                                                            <input type="email" class="form-control" id="register-email" name="register-email" placeholder="Your Email Address *" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="register-password" name="register-password" placeholder="Password *" required="">
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox" id="register-agree" name="register-agree" required="">
                                                                <label class="form-control-label" for="register-agree">I
                                                                    agree to the
                                                                    privacy policy</label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded" type="submit">Register</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Register With</label>
                                                        <div class="social-links">
                                                            <a href="#" title="social-link" class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                                </div>
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                        <!-- End of Login -->
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <!-- End Logo -->
                        
                    </div>
                    <div class="header-center">
                        <a href="<?php echo base_url();?>" class="logo mr-0">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="logo" width="153" height="44" />
                        </a>
                    </div>
                    <div class="header-right flex-1 justify-content-end">
                        <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                        <?php if (base_url(uri_string()) === base_url("home") || base_url(uri_string()) === base_url("shop")) : ?>
                            <a href="<?php echo base_url('shop/cart');?>" class="1cart-toggle label-block link">
                                <i class="d-icon-bag"><span class="cart-count" id="cart_item_amounts"><?php echo $this->cart->total_items(); ?></span></i>
                            </a>
                            <?php endif;?>
                            <div class="canvas-overlay"></div>
                            <!-- End Cart Toggle -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom has-center sticky-header fix-top sticky-content d-lg-show">
                <div class="container-fluid">
                    <div class="header-left">
                    
                    </div>
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu">
                            <li><a href="<?php echo base_url('home'); ?>">Homepage</a></li>
                            <li><a href="<?php echo base_url('shop'); ?>">Shop</a></li>
                            <li><a href="<?php echo base_url('photo-gallery'); ?>"><?php echo $this->lang->line("photo_gallery"); ?></a></li>
                            <li><a href="<?php echo base_url('select_land'); ?>">Standorte</a></li>
                            <li><a href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line("about"); ?></a></li>
                            <li><a href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line("contact"); ?></a></li>
                            <?php if (base_url() === 'https://irispicture.eu/') : ?>
                                <li><a href="<?php echo base_url('franchise'); ?>">Franchise werden</a></li>
                            <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                    </div>
                </div>
            </div>
        </header>
    <!--========================
Header Area End
========================-->