<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold"><?php echo $blog_category['category_name'];?></h1>
				<span class="sub-title"><?php echo $blog['name'];?></span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
					<li class="active"><a href="<?php echo base_url('blog');?>">Blog</a></li>
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
        <div class="row pt-4 mt-2 mb-5">
			<div class="col-md-7 mb-4 mb-md-0">
				<h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold"><?php echo $blog['name'];?></strong></h2>
				<p><?php echo $blog['short_content'];?></p>
				<p><?php echo $blog['content'];?></p>
				<hr class="solid my-5">
				<h3><a href="<?php echo base_url('yazilar/resimler');?>" class="text-color-black">Tüm Blog Resimleri</a></h3>
				<?php foreach(array_slice($blog_all_photos,0,10) as $blog_all_photo): ?>
					<img class="img-fluid" width="75" src="<?php echo base_url('public/uploads/blog_photos/'.$blog_all_photo['photo']);?>">
				<?php endforeach; ?>
			</div>
			<div class="col-md-5">
				<h2 class="text-color-dark font-weight-normal text-5 mb-2">Yazı Detayı</h2>
				<ul class="list list-icons list-primary list-borders text-2">
					<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-black"><a href="<?php echo base_url('etiketler');?>">Etiketler:</a></strong> 
                        <?php foreach($tags as $tag): ?>
                            <?php if($blog['tag'] !== 'null' && in_array($tag['tag_id'], json_decode($blog['tag']))):?>
                                <a href="<?php echo base_url('etiket/'.$tag['slug']);?>" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1"><?php echo $tag['name'];?></a>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </li>
				</ul>
                <!-- Start Lightbox -->
                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                    <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 3, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <?php foreach($blog_photos as $blog_photo): ?>
                        <div>
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="<?php echo base_url('public/uploads/blog_photos/'.$blog_photo['photo']);?>">
                                <img class="img-fluid" src="<?php echo base_url('public/uploads/blog_photos/'.$blog_photo['photo']);?>">
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- End Lightbox -->
			</div>
		</div>
	</div>
</section>
<!-- End About Section -->
<!-- End Team Section -->

