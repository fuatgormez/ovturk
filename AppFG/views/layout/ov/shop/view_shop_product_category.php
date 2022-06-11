<?php if($this->uri->segment('1').'/'.$this->uri->segment('2') === 'fotograf-video/4'):?>
<div class="slider-container rev_slider_wrapper" style="height: 100vh;" id="home">
	<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1630, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'mouse', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
		<ul>
			<li class="slide-overlay" data-transition="fade">
				<img src="<?php echo base_url('public/uploads/site-2022-fotograf-ana-resim-min.jpg');?>"
					alt=""
					data-bgposition="center center"
					data-bgfit="cover"
					data-bgrepeat="no-repeat"
					class="rev-slidebg">
				<div class="tp-caption rs-parallaxlevel-4"
					data-frames='[{"from":"opacity:0;","speed":300,"to":"opacity:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
					data-x="center" data-hoffset="['-150','-150','-150','-150']"
					data-y="center" data-voffset="['-20','-20','-20','-20']"
					data-width="['430','430','630','830]"
					data-height="['330','330','530','730']">
						<svg class="custom-square-1 custom-transition-1 custom-mobile-square-thickness" width="100%" height="100%">
							<rect width="100%" height="100%" fill="none" stroke-width="40" stroke="#000" />
						</svg>
					</div>
				<h1 class="tp-caption font-weight-bold text-color-light ws-normal rs-parallaxlevel-3"
					data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
					data-x="center" data-hoffset="['0','0','30','30']"
					data-y="center" data-voffset="['-55','-55','-85','-120']"
					data-width="['580','580','780','1000']"
					data-fontsize="['66','66','86','120']"
					data-lineheight="['72','72','90','125']">Düğün fotoğrafçılığı</h1>
				<div class="tp-caption font-weight-light text-color-light ls-0 rs-parallaxlevel-4"
					data-frames='[{"from":"opacity:0;y:[50%]","speed":2000,"to":"opacity:0.7;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
					data-x="center" data-hoffset="['-181','-181','-152','-181']"
					data-y="center" data-voffset="['45','45','45','65']"
					data-fontsize="['16','16','32','45']"
					data-lineheight="['20','20','40','50']">Düğün fotoğrafı pozları, Düğün pozları</div>
				<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2"
					data-hash
					data-hash-offset="95"
					href="<?php echo base_url('iletisim');?>"
					data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']"
					data-y="center" data-voffset="['125','125','210','275']"
					data-paddingtop="['20','20','30','40']"
					data-paddingbottom="['20','20','30','40']"
					data-paddingleft="['68','68','68','95']"
					data-paddingright="['15','15','15','25']"
					data-fontsize="['16','16','23','45']"
					data-lineheight="['20','20','26','50']">Detaylı bilgi için tıklayın <i class="fas fa-arrow-right ms-4 ps-3 me-2 text-4"></i></a>
			</li>
		</ul>
	</div>
</div>
<?php endif; ?>
<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">İzmir <?php echo $category['category_name'];?></h1>
				<span class="sub-title">Toplam <?php echo count($products);?> ürün bulunmaktadir.</span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="<?php echo base_url();?>">PLUS REKLAMCILIK</a></li>
					<li class="active">Kategori Detayı</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->
<?php if($this->uri->segment('1').'/'.$this->uri->segment('2') === 'fotograf-video/4'):?>
<section class="section section-height-2 bg-light border-0 m-0" id="whoweare">
	<div class="container container-xl-custom">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<span class="d-block text-color-primary custom-font-secondary font-weight-semibold text-8 appear-animation" data-appear-animation="maskUp">Plus Reklamcilik</span>
				<div class="overflow-hidden mb-3">
					<h2 class="text-color-dark font-weight-extra-bold text-11 negative-ls-1 line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">izmir</h2>
				</div>
				<p class="text-4 line-height-9 pe-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
				Firmamız 2012 yılından bu yana fotoğraf ve videografi alanında uzman eğitmen 
		kişeler taraından sektöre hizmet vermektedir.Tanıtım videoları,havadan görüntüleme, etkinlik fotoğraf ve videoları
		stüdyo fotoğrafçılığı, ürün çekimi, katalog çekimi ve düğün, özel gün olarak 
		yurt içi ve yurtdışı birçok işe imza atmıştır.Alanında uzman belgeli genç ekip kadromuz ile 
		daima enerjik ve en iyi şekilde hizmet vermeye devam ediyoruz.Sizle de tanışmak dileği ile...
				</p>
			</div>
			<div class="col-lg-6">
				<a href="<?php echo base_url();?>">
					<img src="<?php echo base_url('public/uploads/plus2022-son-revize-logo.png'); ?>" class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
				</a>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<div class="container">
	<hr>
	<div class="masonry-loader masonry-loader-showing">
		<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
            <?php if(count($products) > 0):?>
                <?php foreach ($products as $key => $row_product) :?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <a href="<?php echo base_url() . 'urun/'.$slug->url($category['category_name']).'/'.$slug->url($row_product['product_name']).'/'. $row_product['id'];?>">
                                    <div class="product-thumb-info-image ">
                                        <img alt="<?php echo $category['category_name'];?>" class="img-fluid" src="<?php echo base_url('public/uploads/product_photos/thumbnail/'.$row_product['thumbnail']);?>" width="250" height="250">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="<?php echo base_url($category['slug'].'/'.$category['category_id']);?>" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1"><?php echo $category['category_name'];?></a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="<?php echo base_url() . 'product/'.$slug->url($category['category_name']).'/'.$slug->url($row_product['product_name']).'/'. $row_product['id'];?>" class="text-color-dark text-color-hover-primary"><?php echo $row_product['product_name']; ?></a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4">#</a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <?php if(in_array($this->session->userdata('role'),['Superadmin1'])): ?>
                                <span class="sale text-color-dark font-weight-semi-bold"><?php echo $row_product['product_price']; ?></span>
                                <span class="amount"><?php echo $row_product['product_price_old']; ?></span>
                                <?php endif;?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info alert-lg mt-5 mb-5">
			        <strong>Hay Aksi!</strong> Bu kategoride herhangi bir sey bulunmamaktadir.
			    </div>
            <?php endif;?>
		</div>
	</div>
</div>
<?php if($this->uri->segment('1').'/'.$this->uri->segment('2') === 'fotograf-video/4'):?>
<section class="section section-height-2 bg-light border-0 m-0" id="whoweare">
	<div class="container container-xl-custom">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<h1>Düğün fotoğrafçılığı <small><a href="<?php echo base_url('galeri/dugun-fotografciligi');?>">tüm resimler</a></small></h1>
			<!-- mansory start -->
				<div class="masonry-loader masonry-loader-loaded">
					<div class="masonry row g-0" data-plugin-masonry="" data-plugin-options="{'itemSelector': '.masonry-item'}" style="position: relative; height: 487.99px;">
						<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
							<?php foreach(array_slice($photo_gallery, 0,10) as $row_photo_gallery):?>
							<div class="masonry-item no-default-style col-sm-3">
								<?php if($row_photo_gallery['tag'] === 'wedding'):?>
								<a href="<?php echo base_url('public/uploads/gallery/'.$row_photo_gallery['photo_name']);?>" class="img-thumbnail img-thumbnail-no-borders">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper" data-tag="<?php echo $row_photo_gallery['tag'];?>">
											<img src="<?php echo base_url('public/uploads/gallery/'.$row_photo_gallery['photo_name']);?>" class="img-fluid float-start" alt="">
										</span>
									</span>
								</a>
								<?php endif;?>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				<div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
			<!-- mansory end -->
			</div>
			<div class="col-lg-12">
				<h1>Ürünler <small><a href="<?php echo base_url('galeri/urunler');?>">tüm resimler</a></small></h1>
			<!-- mansory start -->
				<div class="masonry-loader masonry-loader-loaded">
					<div class="masonry row g-0" data-plugin-masonry="" data-plugin-options="{'itemSelector': '.masonry-item'}" style="position: relative; height: 487.99px;">
						<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
							<?php foreach($photo_gallery_products as $row_photo_gallery_item):?>
							<div class="masonry-item no-default-style col-sm-3" data-itemid="<?php echo $row_photo_gallery_item['photo_id'];?>">
								<a href="<?php echo base_url('public/uploads/gallery/'.$row_photo_gallery_item['photo_name']);?>" class="img-thumbnail img-thumbnail-no-borders">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
										<span class="thumb-info-wrapper" data-tag="<?php echo $row_photo_gallery_item['tag'];?>">
											<img src="<?php echo base_url('public/uploads/gallery/'.$row_photo_gallery_item['photo_name']);?>" class="img-fluid float-start" alt="">
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
		</div>
	</div>
</section>
<?php endif; ?>