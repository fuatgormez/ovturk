<main class="main mb-5">
    <div class="page-content">
        <div class="owl-carousel owl-theme row  owl-nav-fade owl-dot-white intro-slider animation-slider cols-1" data-owl-options="{
                        'items': 1,
                        'nav': false,
                        'dots': false,
                        'loop': true,
                        'responsive': {
                            '992': {
                                'nav': true
                            }
                        }
                    }">
            <div class="intro-slide1 banner banner-fixed" style="background-color: #666">
                <figure>
                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_home']; ?>" alt="slide=" width="1920" height="599">
                </figure>
                <div class="banner-content x-50 y-50 text-center">
                <h3 class="banner-title font-weight-bolder text-white mb-8 btn-rounded slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '1.2s', 'delay': '.8s'}">
                            <a href="<?php echo base_url();?>" class="btn btn-primary btn-sm">standort ändern</a></h3>
                </div>
            </div>
        </div>

        <div class="container filter-tabs-wrapper  appear-animate" data-animation-options="{'delay': '.3s'}" style="position: relative;
    padding: 3.5rem 5rem 3.2rem;
    max-width: 96rem;
    background-color: #232323;
    border-radius: 5px;
    margin-top: -7.3rem;
    z-index: 1;
    color:#fff">
            <div class="mx-auto">
                <div class="tab tab-nav-simple tab-nav-center tab-nav-boxed">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#tab-filter-1">WÄHLE DEINEN STANDORT</a>
                        </li>
                        <li class="nav-item" style="display: none;">
                            <a class="nav-link text-white" href="#tab-filter-2">Search By</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active in" id="tab-filter-1">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <select class="form-control bg-white">
                                        <option>Deutschland & Österreich</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control bg-white" onchange="if (this.value) window.location.href=this.value">
                                        <option>WÄHLE DEINEN STANDORT</option>
                                        <?php foreach ($stores as $store) : ?>
                                            <option value="<?php echo base_url(); ?>language/select_store/<?php echo $store['id'] . '/' . @$par; ?>"><?php echo $store['store_name']; ?> <small><?php echo $store['store_address']; ?></small></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab-filter-2">
                            <form action="#" class="input-wrapper mx-auto">
                                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required="">
                                <button class="btn btn-search" type="submit" title="submit-button">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>