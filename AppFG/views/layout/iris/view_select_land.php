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

    .hide {
        display: none;
    }
</style>


<style>
    .center-list {
        margin-right: auto;
        margin-left: auto;
        width: 90%
    }

    .center-list:after,
    .center-list:before {
        display: table;
        content: " "
    }

    .center-list:after {
        clear: both
    }

    .center-list .center-tile-background {
        height: 240px;
        margin: 1em 0;
        position: relative
    }

    .center-dates .center-branches-background .flex {
        margin-top: 20px
    }

    .center-dates .center-branches-background .flex .center-branches {
        width: 100%
    }

    .center-dates .center-branches-background .flex .center-branches .center-branches-container .headline {
        color: #fff
    }

    .centerdetail-tile {
        width: 50%;
        height: 18em
    }

    .centerdetail-tile:first-child {
        padding-right: 10px
    }

    .centerdetail-tile:last-child {
        padding-left: 10px
    }

    .centerdetail-tile .ece-bg-darkblue {
        height: 100%
    }

    .centerdetail-informations-box {
        word-wrap: break-word
    }

    .with-border {
        border-top: 1px solid #fff
    }

    @media only screen and (min-width:480px) {
        .center-list {
            width: 90%
        }
    }

    @media only screen and (min-width:640px) {
        .center-list {
            max-width: 768px
        }
    }

    @media only screen and (min-width:768px) {
        .center-list {
            max-width: 1024px
        }
    }

    @media only screen and (min-width:1024px) {
        .center-list {
            max-width: 1280px
        }

        .center-padding--headline {
            padding: 75px 0 3rem
        }

        .center-padding--dates {
            padding: 0
        }

        .center-padding--data {
            padding: 3rem 0
        }

        .center-padding--tiles {
            padding: 30px 0
        }

        .center-dates .center-branches-background .flex {
            margin-top: 0
        }

        .center-dates .center-branches-background .flex:last-child {
            margin-bottom: 0
        }

        .center-dates .center-branches-background .flex .center-branches {
            width: 100%
        }

        .centerdetail-tile {
            margin-top: 0;
            margin-bottom: 0
        }

        .center-dates .center-branches-background .flex {
            display: flex
        }

        .center-dates .center-branches-background .flex .left {
            padding-right: 10px
        }

        .center-dates .center-branches-background .flex .left .center-branches-container {
            height: 100%;
            background-color: #fff
        }

        .center-dates .center-branches-background .flex .left .center-branches-container .headline {
            color: #1e2d50
        }

        .center-dates .center-branches-background .flex .left:first-child {
            color: rgba(30, 45, 80, .9019607843137255)
        }

        .center-dates .center-branches-background .flex .ece-bg-transparent-turquoise {
            background-color: transparent
        }

        .center-dates .center-branches-background .flex .center-branches {
            width: 49.9%
        }

        .center-dates .center-branches-background .flex .center-branches:nth-child(2n) {
            padding-left: 10px
        }

        .center-filter .center-filter-grid {
            display: grid
        }

        .center-branches-background {
            background-image: url(https://www.ece.com/fileadmin/user_upload/CenterTileBackground.jpg);
            background-position: 50%;
            background-size: cover
        }

        .center-contacts-grid {
            display: inline-grid;
            grid-template-columns: repeat(4, 25%);
            grid-template-rows: repeat(1, auto);
            grid-gap: 30px;
            color: #1e2d50
        }

        .center-list {
            text-align: center;
            padding-bottom: 100px
        }

        .center-list .center-tile-background {
            margin: 0
        }

        .center-list .center-tiles {
            display: grid;
            grid-template-columns: repeat(2, 50%);
            grid-template-rows: repeat(auto, auto);
            grid-gap: 10px
        }

        .center-list .center-tile {
            text-align: left;
            /* border: 1px solid grey */
        }

        .center-list .center-tile .link_centerdetail .show-center-button {
            cursor: pointer
        }

        .center-list .center-tile.active {
            background-color: rgba(30, 45, 80, .7)
        }

        .center-list .center-tile .center-area {
            display: none;
            width: 100%
        }

        .center-area-background {
            text-align: left;
            padding: 5rem 0
        }

        .put-comma:after {
            content: ", "
        }

        .put-comma:last-child:after {
            content: ""
        }

        .centerdetail-tile {
            width: 50%;
            padding-left: 10px
        }

        .centerdetail-tile:first-child {
            padding-right: 10px;
            padding-left: 0
        }

        .centerdetail-tile i {
            font-size: 4rem
        }

        .centerdetail-tile .centerdetail-tile-number {
            font-size: 4rem;
            height: 5rem
        }

        .centerdetail-tile .centerdetail-tile-title {
            font-size: 1.25rem
        }

        .center-dates .center-dates-headline {
            padding: 5rem 10rem
        }

        .center-branches-background,
        .centerdetail-informations {
            display: flex
        }

        .center-branches-background .center-branches,
        .center-branches-background .centerdetail-informations-box,
        .centerdetail-informations .center-branches,
        .centerdetail-informations .centerdetail-informations-box {
            width: 50%
        }

        .center-branches-background .center-branches-list,
        .centerdetail-informations .center-branches-list {
            border-top: 1px solid #fff
        }

        .center-branches-background .center-branches-list div,
        .centerdetail-informations .center-branches-list div {
            background: #fff;
            color: rgba(30, 45, 80, .9019607843137255)
        }

        .center-branches-background .center-branches-list .with-border,
        .centerdetail-informations .center-branches-list .with-border {
            border-top: 1px solid rgba(30, 45, 80, .9019607843137255)
        }
    }

    .show-center-button {
        margin: 10px;
        padding: 5px;
        font-size: 15px;
        display: none;
        width: 9em;
    }

    @media only screen and (min-width:1024px) {
        .center-list .center-tiles {
            grid-template-columns: repeat(4, 25%)
        }
    }

    @media only screen and (max-width:480px) {
        .centerdetail-tile-number {
            font-size: 2.2rem
        }
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
Container
============================== -->

    <!--==============================
    Select Land Area
============================== -->

    <section class="vs-service-wrapper mb-50">
        <div class="container">
            <div class="row vs-carousel justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="vs-service">
                        <div class="service-header">
                            <div class="service-image">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_select_land'];?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Select Land Area End
============================== -->

    <!--==============================
    Select Store
============================== -->
    <section class="vs-service-wrapper service-box-layout1" style="display:none">
        <div class="container">
            <div class="row vs-carousel justify-content-center text-center">
                <div class="center-list">
                    <div class="section-title mb-10 w-100">
                        <h1 class="title text-blue">WÄHLE DEINEN WUNSCHSTANDORT <i class="fa fa-arrow-down text-danger float-md-right float-sm-right reset-all-store"></i></h1>
                    </div>
                    <div class="center-tiles">
                        <?php foreach ($stores as $store) : ?>
                            <a href="language/select_store/<?php echo $store['id']; ?>" class="" data-store-id="<?php echo $store['id']; ?>">
                                <div class="center-tile-background" style="background-position: center; background-size: cover; background-image: linear-gradient(0deg,rgba(0,0,0, 0) 50%,rgba(0, 0, 0, 0.6) 100%), url(<?php echo base_url(); ?>public/uploads/store_photos/<?php echo $store['photo']; ?>)">
                                    <div class="center-tile p-4 h-full text-white relative">
                                        <div class="center-name font-bold uppercase"><?php echo $store["store_name"]; ?></div>
                                        <div class="font-bold absolute left-0 bottom-0 absolute left-0 bottom-0"><?php echo $store["store_address"]; ?></div><!-- empty -->
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Select Store End
============================== -->

    <section class="all-store mb-2 hide">
        <div class="container">
            <div class="row csrf align-items-center justify-content-center" data-csrf="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="col-lg-12 col-xl-12">
                    <div class="card-city">
                        <div class="section-title mb-10 w-100">
                            <h1 class="title text-blue">WÄHLE DEINEN STANDORT <i class="fa fa-arrow-down text-danger float-md-right float-sm-right reset-all-store"></i></h1>
                            <input type="text" class="store_search" placeholder="search" value="">
                        </div>
                        <div class="list-group w-100 autocomplete_store">
                            <div class="resultsCity" id="resultsCity">
                                <div class="row mb-2 result_store">
                                </div>
                            </div>
                        </div>
                        <div class="list-group w-100 fetchAll_store">
                            <div class="resultsCity" id="resultsCity">
                                <div class="row mb-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
    FAQ Area
============================== -->

    <div class="vs-faq-wrapper vs-faq-layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title text-blue hide"><i class="fa fa-arrow-down text-danger reset-all-store"></i> WÄHLE DEINEN STANDORT Deutschland & Österreich </h1>
                </div>
                <div class="col-lg-12">
                    <div class="faq-accordion-area" id="faqAccordion">
                        <?php foreach ($all_land as $row_land) : ?>
                            <div class="faq-card">
                                <div class="faq-card-header" id="store<?php echo $row_land['store_value_id']; ?>">
                                    <button class="faq-question collapsed" type="button" data-toggle="collapse" data-target="#land<?php echo $row_land['store_value_id']; ?>" aria-expanded="false" aria-controls="land<?php echo $row_land['store_value_id']; ?>">
                                        WÄHLE DEINEN STANDORT
                                    </button>
                                </div>
                                <div id="land<?php echo $row_land['store_value_id']; ?>" class="collapse show" aria-labelledby="store<?php echo $row_land['store_value_id']; ?>" data-parent="#faqAccordion">
                                    <div class="faq-card-body">
                                        <?php foreach ($stores as $store) : ?>
                                            <?php if ($row_land['store_value_id'] == $store['land_id']) : ?>
                                                <div class="col-md-12 mb-2">
                                                    <a href="<?php echo base_url();?>language/select_store/<?php echo $store['id'].'/'.@$par; ?>" class="list-group-item list-group-item-action flex-column align-items-start" data-store-id="<?php echo $store['id']; ?>">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1"><?php echo $store['store_name']; ?> <i class="fa fa-arrow-right"></i> Zum Shop</h5>
                                                            <small><?php echo $store['store_address']; ?></small>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==============================
    FAQ Area
============================== -->

    <!--==============================
Container End
============================== -->