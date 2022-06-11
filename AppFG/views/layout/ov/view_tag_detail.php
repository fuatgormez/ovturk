<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_photo_gallery']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold"><?php echo $tag['name']; ?></h1>
				<span class="sub-title"></span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
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
					<div class="pe-3 pe-sm-5 pb-3 pb-sm-0 border-right-light">
						<h4 class="mb-2">Etiketler</h4>
					</div>
				</div>
				<div class="col-sm-12">
				<div class="divider"></div>
				<h3 class="m-0">Ürünlerimiz</h3>
					<?php foreach($products as $key => $product):?>
						<?php if(isset($product['tag']) && in_array($tag['tag_id'], json_decode($product['tag']))): ?>
						<ul class="list list-icons list-icons-lg">
							<?php foreach($product_categories as $product_category) : ?>
								<?php if($product_category['category_id'] == $product['category_id']): ?>
									<li><?php //echo $key .'-'.$tag['tag_id'];?>
										<a href="<?php echo base_url('urun/'.$product_category['slug'].'/'.$product['slug'].'/'.$product['id']);?>">
										<i class="fas fa-caret-right"></i> 
										<span class="text-black"><?php echo $product['product_name'];?></span>
										</a>
									</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="col-sm-12">
					<div class="divider"></div>
					<h3 class="m-0">Portfölyerimiz</h3>
					<?php foreach($portfolios as $key => $portfolio):?>
						<?php if($portfolio['tag'] !== 'null' && in_array($tag['tag_id'], json_decode($portfolio['tag']))): ?>
						<ul class="list list-icons list-icons-lg">
							<?php //foreach($product_categories as $product_category) : ?>
								<?php //if($product_category['category_id'] == $product['category_id']): ?>
									<li><?php //echo $key .'-'.$tag['tag_id'];?>
										<a href="<?php echo base_url('portfoy/'.$portfolio['slug'].'/'.$portfolio['id']);?>">
										<i class="fas fa-caret-right"></i> 
										<span class="text-black"><?php echo $portfolio['name'];?></span>
										</a>
									</li>
								<?php //endif; ?>
							<?php //endforeach; ?>
						</ul>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
    	</div>
    </div>
</div>
<!--==============================
Photo Gallery Area End
============================== -->