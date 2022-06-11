<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">
					<?php echo $category['category_name'];?>
					 <i class="fa fa-arrow-right"></i> 
					 <?php echo $product['product_name'];?>
				</h1>
				
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="<?php echo base_url();?>">PLUS REKLAMCILIK</a></li>
					<li class="active">Ürün Detayı</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->

<div class="container py-4">
	<div class="row">
		<div class="col">
			<div class="blog-posts single-post">
				<article class="post post-large blog-single-post border-0 m-0 p-0">
					<div class="post-content ms-0">
						<h2 class="font-weight-semi-bold"><?php echo $product['product_name'];?></h2>
						<div class="post-meta">
							<span>
								<?php foreach($tags as $tag): ?> 
									<?php if(!empty($product['tag']) && in_array($tag['tag_id'], json_decode($product['tag']))): ?>
										<a href="<?php echo base_url('etiket/'.$tag['slug']);?>" class="text-color-black">#<?php echo $tag['name'];?></a>
									<?php endif; ?>
								<?php endforeach; ?>
							</span>
						</div>
						<img width="350" height="312" src="<?php echo base_url('public/uploads/product_photos/thumbnail/'.$product['thumbnail']);?>" class="img-fluid float-start me-4 mt-2" alt="">
						<p class="text-10"><?php echo $product['content'];?></p>
						<div class="post-block mt-5 post-share">
							<h4 class="mb-3">Sosyal medyada paylaşın</h4>
							<!-- Go to www.addthis.com/dashboard to customize your tools -->
							<div class="addthis_inline_share_toolbox" data-url="<?php echo base_url('urun/'.$category['slug'].'/'.$product['slug'].'/'.$product['id']);?>" data-title="<?php echo $product['product_name'];?>" style="clear: both;"><div id="atstbx" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-c6705557-5e30-4ef9-ae2f-6797b8fbf237" role="region"><span id="at-c6705557-5e30-4ef9-ae2f-6797b8fbf237" class="at4-visually-hidden">AddThis Sharing Buttons</span><div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 16px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-facebook-1">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 16px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-twitter-2">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 16px;"><span class="at4-visually-hidden">Share to More</span><span class="at-icon-wrapper" style="line-height: 20px; height: 20px; width: 20px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-3" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 20px; height: 20px;"><title id="at-svg-addthis-3">AddThis</title><g><path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path></g></svg></span><span class="at4-share-count-container" style="font-size: 10.5px; line-height: 20px; color: rgb(255, 255, 255);">1</span></a></div></div></div>
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>
						</div>
						
						<div class="post-block mt-5 pb-5">
						<!-- mansory start -->
						<div class="masonry-loader masonry-loader-loaded">
								<div class="masonry row g-0" data-plugin-masonry="" data-plugin-options="{'itemSelector': '.masonry-item'}" style="position: relative; height: 487.99px;">
									<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
										<?php foreach($product_photos as $other_photo):?>
										<div class="masonry-item no-default-style col-sm-3">
											<a href="<?php echo base_url('public/uploads/product_photos/'.$other_photo['photo']);?>" class="img-thumbnail img-thumbnail-no-borders">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="<?php echo base_url('public/uploads/product_photos/'.$other_photo['photo']);?>" class="img-fluid float-start" alt="">
													</span>
												</span>
											</a>
										</div>
										<?php endforeach; ?>
									</div>
								</div>
							<div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
						<!-- mansory end -->
						</div>
							
						<?php if(in_array($this->session->userdata('role'), ['Superadmin'])):?>
						<div class="post-block pt-5 m-5">
						<?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
								<input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
								<a href="#" class="btn w-100 btn-dark btn-modern text-uppercase text-5 bg-color-hover-primary border-color-hover-primary add-to-basket-button" data-id=""><i class="d-icon-bag"></i> In den Warenkorb</a>
							<?php echo form_close(); ?>
						</div>
						<?php endif;?>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>