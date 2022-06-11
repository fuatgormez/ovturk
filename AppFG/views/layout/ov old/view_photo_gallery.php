<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_photo_gallery']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">Resimlerimiz</h1>
				<a href="<?php echo base_url('portfoylerimiz/resimler');?>">
					<span class="sub-title">Portföy Resimleri</span>
				</a>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="#">Anasayfa</a></li>
					<li class="active">Resimlerimiz</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->

<!--==============================
Photo Gallery Area
============================== -->
<div class="container py-4">
    <div class="row">
    	<div class="col" style="min-height: 250px;">
    		<div class="row portfolio-list lightbox" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                <?php foreach ($photo_gallery as $row) : ?>
    			<div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
    				<div class="portfolio-item">
    					<span class="thumb-info thumb-info-lighten thumb-info-centered-icons border-radius-0">
    						<span class="thumb-info-wrapper border-radius-0">
    							<img src="<?php echo base_url(); ?>public/uploads/gallery/<?php echo $row['photo_name']; ?>" class="img-fluid border-radius-0" alt="">
    							<span class="thumb-info-action">
    								<a href="<?php echo base_url(); ?>public/uploads/gallery/<?php echo $row['photo_name']; ?>" class="lightbox-portfolio">
    									<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
    								</a>
    							</span>
    						</span>
    					</span>
    				</div>
    			</div>
                <?php endforeach; ?>
    		</div>
    	</div>
    </div>
</div>
<!--==============================
Photo Gallery Area End
============================== -->