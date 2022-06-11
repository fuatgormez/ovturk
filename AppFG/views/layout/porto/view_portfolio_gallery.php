<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold"></h1>
                <a href="<?php echo base_url('resimlerimiz');?>">
                    <span class="sub-title">Resim Galerimiz</span>
                </a>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
					<li class="active"><a href="<?php echo base_url('portfoylerimiz');?>">Portföylerimiz</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->

<div id="examples" class="container py-2">
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="mb-0">Tüm Portföy resimleri</h4>
					<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <?php foreach($portfolio_footer as $portfolio_photo_banner): ?>
						<a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 me-1" href="<?php echo base_url('public/uploads/portfolio_photos/'.$portfolio_photo_banner['photo']);?>">
							<img class="img-fluid" src="<?php echo base_url('public/uploads/portfolio_photos/'.$portfolio_photo_banner['photo']);?>" width="110" height="110">
						</a>
                        <?php endforeach; ?>
                        <?php foreach($portfolio_all_photos as $portfolio_photo): ?>
						<a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 me-1" href="<?php echo base_url('public/uploads/portfolio_photos/'.$portfolio_photo['photo']);?>">
							<img class="img-fluid" src="<?php echo base_url('public/uploads/portfolio_photos/'.$portfolio_photo['photo']);?>" width="110" height="110">
						</a>
                        <?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>