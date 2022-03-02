<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Fuat Görmez">
    <meta name="robots" content="INDEX,FOLLOW">

    <meta name="facebook-domain-verification" content="sdgx32qubd7uqldosyhnx7ydx8h5ac" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">


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
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/style.css">
    <!-- Margin & Padding -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/spacing.min.css">
    <!--==============================
        CSS File End
    ============================== -->
    <style>
        input:focus,
        input.store_search:focus {

            outline: none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .store_search {
            width: 100%;
            height: 62px;
            border: 2px solid#eee;
            padding-left: 10px;
            color: #09285b;
            border-radius: 0;
            background-color: #fff;
        }

        .homelogo {
            background: aliceblue;
            border-radius: 10px;
            padding: 10px;
            /* width: 500px; */
            margin: 0 auto;
        }

        .land {
            --bg-color: #f62e53;
            --text-color-hover: #ffffff;
            --box-shadow-color: rgba(220, 233, 255, 0.48);
        }

        .land img {
            width: 225px;
        }

        .card-city {
            width: auto;
            height: auto;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease-out;
            text-decoration: none;
        }

        .card {
            /* width: 300px;
            height: 321px; */
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease-out;
            text-decoration: none;
        }

        .card:hover {
            cursor: pointer;
            transform: translateY(-5px) scale(1.005) translateZ(0);
            box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
                0 24px 46px var(--box-shadow-color);
        }

        .left-sidebar-store {
            opacity: 0;
        }
    </style>
</head>

<body class="bg-primary3">

    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


    <!--********************************
       Code Start From Here
******************************** -->


    <!--==============================
Preloader
============================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="section-title mt-20">
                        <div class="homelogo">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" width="500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-store">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="section-title">
                        <h1 class="title text-white">Choose Your Store</h1>
                    </div>
                </div>
            </div>

            <div class="row csrf align-items-center justify-content-center" data-csrf="<?php echo $this->security->get_csrf_hash(); ?>">
                <?php foreach ($all_land as $land) : ?>
                    <div class="col-md-3 mb-20">
                        <div class="card land select_land" data-land-name="<?php echo $land['land_name']; ?>">
                            <img src="public/uploads/store_photos/flag/<?php echo $land['lang_flag']; ?>">
                            <h3 class="heading4 pt-20"><?php echo $land['land_name']; ?></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="left-sidebar-store mb-40">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-xl-4 mb-20">
                    <div class="card land" data-land-id="landid">
                        <img src="public/uploads/store_photos/flag/Deutschland_store_flag_16.svg">
                        <h3 class="heading4 pt-20">Deutschland</h3>
                        <div class="reset-all-store title text-blue">All Store</div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="card-city">
                        <div class="section-title mb-40 w-100">
                            <h1 class="title text-blue">Choose Your City <i class="fa fa-times text-danger float-md-right float-sm-right reset-all-store"></i></h1>
                            <input type="text" class="store_search" id="filter" placeholder="search" value="">
                        </div>

                        <div class="list-group w-100">
                            <div class="resultsCity" id="resultsCity">
                                <div class=" mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
Preloader End
============================== -->


    <!--********************************
        Code End  Here
******************************** -->



    <!--==============================
All Js File
============================== -->

    <!-- Jquery -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/bootstrap.min.js"></script>
    <!-- Jquery ui -->
    <script src="<?php echo base_url(); ?>public/layout/iris/js/jquery-ui.min.js"></script>
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Counter Up -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.counterup.min.js"></script>
    <!-- Select Box -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.nice-select.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Layer Slider -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/greensock.min.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/layerslider.transitions.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Date & Time Picker -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/jquery.datetimepicker.min.js"></script>
    <!-- Isotope Filter -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/isotope.pkgd.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <!-- Custom Carousel -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/vscustom-carousel.min.js"></script>

    <!-- Mobile Menu -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/vsmenu.min.js"></script>
    <!-- Mobile Menu -->
    <!-- Main Js File -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/main.js"></script>


    <!--==============================
JS File End
============================== -->
</body>

</html>