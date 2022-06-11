<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">Portföylerimiz</h1>
				<span class="sub-title"></span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="#">Anasayfa</a></li>
					<li class="active">portfoylerimiz</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->
<section class=" m-0 border-0">
	<div class="container">
		<h4 class="mb-3 text-4"><strong class="font-weight-extra-bold">Tüm Portfolyölerimiz</strong></h4>
		<div class="row">
            <?php foreach($portfolios as $portfolio): ?>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <a href="<?php echo base_url('portfoy/'.$portfolio['slug'].'/'.$portfolio['id']);?>">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?php echo base_url('public/uploads/portfolio_photos/'.$portfolio['photo']);?>" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner"><?php echo $portfolio['name'];?></span>
                                        <span class="thumb-info-type"><?php echo $portfolio['client_name'];?></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
		</div>
	</div>
</section>
<!-- End About Section -->
<!-- End Team Section -->