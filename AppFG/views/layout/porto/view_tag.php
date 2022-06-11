<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_photo_gallery']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">ETIKETLER</h1>
				<span class="sub-title"></span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="#">Anasayfa</a></li>
					<li class="active">Etiketler</li>
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
			<div class="row align-items-center">
				<div class="col-sm-12">
					<?php foreach($tags as $tag) : ?>
						<a href="<?php echo base_url('tag/'.$tag['slug']);?>"><span class="badge badge-dark badge-xl rounded-pill text-uppercase px-2 py-1 me-1"><?php echo $tag['name'];?></span></a>
					<?php endforeach; ?>
				</div>
			</div>
    	</div>
    </div>
</div>
<!--==============================
Photo Gallery Area End
============================== -->