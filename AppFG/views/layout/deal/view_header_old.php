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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon'] . "?v=" . time(); ?>">


    <!--==============================
	    All CSS File
	============================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/bootstrap.min.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/flaticon.min.css">
    <!-- Fontawesoem Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/fontawesome.min.css">
    <!-- Select Box -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/slick.min.css">
    <!-- Layer Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/layerslider.min.css">
    <!-- Date & Time Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/jquery.datetimepicker.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/style.css?v=<?php echo uniqid(); ?>">
    <!-- Margin & Padding -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/spacing.min.css">


    <!--==============================
    	CSS File End
	============================== -->

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

<body <?php echo $background_color; ?>>


    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


    <!--********************************
       Code Start From Here
******************************** -->

    <!--==============================
Preloader
============================== -->

    <div class="preloader bg-white">
        <div class="loader-inner">
            <div class="loader-logo">
                <img src="<?php echo base_url(); ?>public/layout/iris/img/loader.svg">
            </div>
        </div>
        <button class="loader-btn preloaderCls"><?php echo $this->lang->line("cancel_preloader"); ?></button>
    </div>

    <!--==============================
Preloader End
============================== -->


    <!--==============================
Popup Search Box
============================== -->

    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <?php echo form_open(base_url() . 'search'); ?>
        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line("search_for"); ?>" name="search_string">
        <button type="submit" name="form1" class="fal fa-search"></i></button>
        <?php echo form_close(); ?>
    </div>

    <!--==============================
Popup Search Box
============================== -->


    <!--==============================
Mobile Menu
============================== -->

    <div class="vs-menu-wrapper  ">
        <div class="vs-menu-area">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="<?php echo $page_home['title']; ?>"></a>
            </div>
            <div class="vs-mobile-menu"></div><!-- Menu Will Append With Javascript -->
        </div>
    </div>

    <!--==============================
Mobile Menu end
============================== -->


    <!--========================
Sticky Header
========================-->

    <div class="sticky-header-wrap sticky-header py-1 py-sm-2 py-lg-1">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-5 col-md-3">
                    <div class="logo">
                        <a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="<?php echo $page_home['title']; ?>"></a>
                    </div>
                </div>
                <div class="col-7 col-md-9 text-right position-static">
                    <nav class="main-menu menu-style1 d-none d-lg-block">
                        <ul>
                            <li class="menu-item">
                            <li><a href="<?php echo base_url('home'); ?>">Homepage</a></li>
                            </li>
                            <li><a href="<?php echo base_url('shop'); ?>">Shop</a></li>
                            <li><a href="<?php echo base_url('photo-gallery'); ?>"><?php echo $this->lang->line("photo_gallery"); ?></a></li>
                            <li><a href="<?php echo base_url('select_land'); ?>">Standorte</a></li>
                            <li><a href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line("about"); ?></a></li>
                            <li><a href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line("contact"); ?></a></li>
                            <?php if (base_url() === 'https://irispicture.com/') : ?>
                                <li><a href="<?php echo base_url('franchise'); ?>">Franchise werden</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!--========================
Sticky Header end
========================-->


    <!--========================
Header Area
========================-->

    <header class="vs-header-wrapper header-layout2 position-relative">
        <div class="header-top-wrap py-1" data-overlay="primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="header-top-left">
                            <div class="social-links py-2">
                                <ul class="text-white">
                                    <?php foreach ($social as $row) : ?>
                                        <?php if ($row['social_url'] != '') : ?>
                                            <li><a href="<?php echo $row['social_url']; ?>"><i class="<?php echo $row['social_icon']; ?>"></i></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="header-top-right float-right">
                            <ul>
                                <li class="pl-10">
                                    <a href="<?php echo base_url('select_land'); ?>" class="mr-20"><?php echo $this->lang->line('change_store'); ?></a>
                                    <img width="25px" src="<?php echo base_url('public/uploads/store_photos/flag/' . $this->session->userdata('store_flag')); ?>">
                                    <?php echo $this->session->userdata('currency_code'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle-wrap pt-10 pt-lg-30 pb-10 pb-lg-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-lg-3">
                        <div class="header-middle-left header-logo">
                            <a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-7 col-lg-9">
                        <div class="header-middle-right d-none d-lg-flex justify-content-end">
                            <div class="contact-box d-flex align-items-center pr-40 border-right mr-40">
                                <div class="contact-icon">
                                    <span class="icon text-primary mr-15 text-xs"><i class="fas fa-phone fa-3x "></i></span>
                                </div>
                                <div class="contact-info">
                                    <p class="mb-0 font-medium text-primary3 " <?php echo $text_color; ?>><?php echo $setting['top_bar_phone_text']; ?></p>
                                    <p class="mb-0 font-medium text-primary3 " <?php echo $text_color; ?>><?php echo $setting['top_bar_phone']; ?></p>
                                </div>
                            </div>
                            <div class="contact-box d-flex align-items-center">
                                <div class="contact-icon">
                                    <span class="icon text-primary mr-15 text-xs"><i class="fas fa-envelope fa-3x"></i></span>
                                </div>
                                <div class="contact-info">
                                    <p class="mb-0 font-medium text-primary3" <?php echo $text_color; ?>><a href="mailto:<?php echo $setting['top_bar_email']; ?>"><?php echo $setting['top_bar_email']; ?></a></p>
                                    <p class="mb-0 font-medium text-primary3" <?php echo $text_color; ?>><?php echo $setting['top_bar_email_text']; ?></p>
                                </div>
                            </div>
                        </div>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-area position-absolute d-none d-lg-block">
            <div class="container position-relative">
                <div class="inner-wrapper bg-primary rounded px-40">
                    <div class="row align-items-center">
                        <div class="col-lg-9 position-static">
                            <nav class="main-menu menu-style2 mobile-menu-active text-white">
                                <ul>
                                    <li><a href="<?php echo base_url('home'); ?>">Homepage</a></li>
                                    <li><a href="<?php echo base_url('shop'); ?>">Shop</a></li>
                                    <li><a href="<?php echo base_url('photo-gallery'); ?>"><?php echo $this->lang->line("photo_gallery"); ?></a></li>
                                    <li><a href="<?php echo base_url('select_land'); ?>">Standorte</a></li>
                                    <li><a href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line("about"); ?></a></li>
                                    <li><a href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line("contact"); ?></a></li>
                                    <?php if (base_url() === 'https://irispicture.com/') : ?>
                                        <li><a href="<?php echo base_url('franchise'); ?>">Franchise werden</a></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-menu-right header-button text-right">
                                <a href="#" class="text-white sideMenuToggler"><i class="far fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--========================
Header Area End
========================-->