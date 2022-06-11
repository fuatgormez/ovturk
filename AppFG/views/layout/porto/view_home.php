<div class="slider-container rev_slider_wrapper" style="height: 100vh;" id="home">
	<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1630, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'mouse', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
		<ul>
			<?php foreach ($sliders as $slider): ?>
			<li class="slide-overlay" data-transition="fade">
				<img src="<?php echo base_url('public/uploads/slider/' . $slider['photo']); ?>"
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
				<?php if ($slider['heading']): ?>
				<h1 class="tp-caption font-weight-bold text-color-light ws-normal rs-parallaxlevel-3"
					data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
					data-x="center" data-hoffset="['0','0','30','30']"
					data-y="center" data-voffset="['-55','-55','-85','-120']"
					data-width="['580','580','780','1000']"
					data-fontsize="['66','66','86','120']"
					data-lineheight="['72','72','90','125']"><?php echo $slider['heading']; ?></h1>
				<?php endif;?>
				<?php if ($slider['content']): ?>
				<div class="tp-caption font-weight-light text-color-light ls-0 rs-parallaxlevel-4"
					data-frames='[{"from":"opacity:0;y:[50%]","speed":2000,"to":"opacity:0.7;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
					data-x="center" data-hoffset="['-181','-181','-152','-181']"
					data-y="center" data-voffset="['45','45','45','65']"
					data-fontsize="['16','16','32','45']"
					data-lineheight="['20','20','40','50']"><?php echo $slider['content']; ?></div>
				<?php endif;?>
				<?php if ($slider['button1_text']): ?>
				<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2"
					data-hash
					data-hash-offset="95"
					href="<?php echo $slider['button1_url']; ?>"
					data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']"
					data-y="center" data-voffset="['125','125','210','275']"
					data-paddingtop="['20','20','30','40']"
					data-paddingbottom="['20','20','30','40']"
					data-paddingleft="['68','68','68','95']"
					data-paddingright="['15','15','15','25']"
					data-fontsize="['16','16','23','45']"
					data-lineheight="['20','20','26','50']"><?php echo $slider['button1_text']; ?> <i class="fas fa-arrow-right ms-4 ps-3 me-2 text-4"></i></a>
				<?php endif;?>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>
<?php if ($page_home['home_welcome_status'] == 'Show'): ?>
<section class="section section-height-2 bg-light border-0 m-0" id="whoweare">
	<div class="container container-xl-custom">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<span class="d-block text-color-primary custom-font-secondary font-weight-semibold text-8 appear-animation" data-appear-animation="maskUp">SİZ İSTEYİN YETER</span>
				<div class="overflow-hidden mb-3">
					<h2 class="text-color-dark font-weight-extra-bold text-11 negative-ls-1 line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Birlikte Planlayıp Gerçekleştirelim</h2>
				</div>
				<p class="text-4 line-height-9 pe-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Hayata geçmesini istediğiniz projeleri sizlerle birlikte tasarlıyor süreç boyunca sizleri haberdar ediyor ve detayları paylaşıyoruz baştan sonra her adımda birlikte çalışıyoruz.</p>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('public/uploads/' . $page_home['home_welcome_video_bg']); ?>" class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
			</div>
		</div>
	</div>
</section>
<?php endif;?>
<section class="section section-height-4 bg-quaternary border-0 m-0 appear-animation" data-appear-animation="fadeIn" id="ourservices">
	<div class="container container-xl-custom">
		<div class="row">
			<div class="col text-center">
				<div class="overflow-hidden mb-4">
					<h2 class="text-color-primary font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">NELER YAPIYORUZ</h2>
				</div>
			</div>
		</div>
		<div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
			<div class="row mb-2">
				<div class="col-md-6 col-xl-4">
					<a href="<?php echo base_url('tabela/2'); ?>" class="text-decoration-none">
						<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="box-content">
								<img src="<?php echo base_url('public/uploads/product_category_photos/2.svg'); ?>" width="88">
								<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">TABELA</h3>
								<p class="font-weight-light text-color-light opacity-5 mb-0">Üretimden montajına kendi bünyemizde ürettiğimiz tabela adına birçok fikrimiz, ödüllü referanslarımız var. Biz de doğru bir iş ancak mutlu bir müşteri ile biter. Fikirlerinizi imkan ve tecrübelerimiz ile şekillendiriyoruz.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-xl-4">
					<a href="<?php echo base_url('matbaa/1'); ?>" class="text-decoration-none">
						<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
							<div class="box-content">
							<img src="<?php echo base_url('public/uploads/product_category_photos/1.svg'); ?>" width="88">
								<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">MATBAA</h3>
								<p class="font-weight-light text-color-light opacity-5 mb-0">Matbaa ve basım için en iyi çözümleri seçiyoruz. Son teknoloji basım ve kesim matbaa makinelerinde işlerinizi hazırlıyoruz.</p>
								<span>&nbsp;</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-xl-4">
					<a href="<?php echo base_url('dijital-baski/3'); ?>" class="text-decoration-none">
						<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
							<div class="box-content">
							<img src="<?php echo base_url('public/uploads/product_category_photos/3.svg'); ?>" width="88">
								<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">DİJİTAL BASKI</h3>
								<p class="font-weight-light text-color-light opacity-5 mb-0">Yüksek kaliteli malzeme ve en iyi Uv boya kullandığımız dijital baskı makinalarımız ile siz değerli müşterilerimize uzun yıllar solmayacak ve yıpranmayacak işleri üretip garanti veriyoruz.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if ($page_home['home_how_we_works_status'] == 'Show'): ?>
<section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0">
	<div class="container container-xl-custom">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-6 text-center">
				<div class="overflow-hidden mb-3">
					<h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="250" style="animation-delay: 250ms;"><?php echo $page_home['home_how_we_works_title']; ?></h2>
				</div>
				<p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350" style="animation-delay: 350ms;"><?php echo $page_home['home_how_we_works_subtitle']; ?></p>
			</div>
		</div>
		<div class="row justify-content-center align-items-center text-center">
			<?php foreach ($how_we_works as $row_how_we_works): ?>
			<div class="col-lg-3">
				<div class="appear-animation animated expandIn appear-animation-visible" data-appear-animation="expandIn" data-appear-animation-delay="450" style="animation-delay: 450ms;">
					<div class="card">
						<div class="card-body p-2 mt-2">
							<div class="mb-4">
								<img src="<?php echo base_url('public/uploads/how_we_works/' . $row_how_we_works['photo']); ?>" width="100" class="img-fluid rounded-circle me-2" alt="">
							</div>
							<h3 class="font-weight-bold text-transform-none line-height-4 text-5 ">
								<?php echo $row_how_we_works['name']; ?>
							</h3>
							<p class="mb-4"><?php echo $row_how_we_works['content']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
<?php endif;?>
<?php if ($page_home['counter_status'] == 'Show'): ?>
<section class="section section-height-5 section-angled border-0 overlay overlay-show overlay-op-9 position-relative z-index-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'fadeIn': true, 'parallaxHeight': '130%'}" data-image-src="<?php echo base_url('public/uploads/' . $page_home['counter_photo']); ?>">
	<div class="section-angled-layer-top section-angled-layer-increase-angle bg-light"></div>
	<div class="section-angled-content position-relative">
		<div class="container mb-5-5">
			<div class="row">
				<div class="col text-center">
					<h2 class="text-color-light font-weight-bold text-10 mb-5">Rakamlarla Biz</h2>
				</div>
			</div>
			<div class="row counters">
				<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
					<div class="counter">
						<i class="<?php echo $page_home['counter_1_icon']; ?> mb-4"></i>
						<strong data-to="<?php echo $page_home['counter_1_value']; ?>" data-append="+" class="text-color-light text-16 line-height-1">0</strong>
						<span class="text-color-grey text-5"><?php echo $page_home['counter_1_title']; ?></span>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
					<div class="counter">
						<i class="<?php echo $page_home['counter_2_icon']; ?> mb-4"></i>
						<strong data-to="<?php echo $page_home['counter_2_value']; ?>"  class="text-color-primary text-16 line-height-1">0</strong>
						<span class="text-color-grey text-5"><?php echo $page_home['counter_2_title']; ?></span>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
					<div class="counter">
						<i class="<?php echo $page_home['counter_3_icon']; ?> mb-4"></i>
						<strong data-to="<?php echo $page_home['counter_3_value']; ?>" data-append="+" class="text-color-light text-16 line-height-1">0</strong>
						<span class="text-color-grey text-5"><?php echo $page_home['counter_3_title']; ?></span>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="counter">
						<i class="<?php echo $page_home['counter_4_icon']; ?> mb-4"></i>
						<strong data-to="<?php echo $page_home['counter_4_value']; ?>" data-append="%" class="text-color-primary text-16 line-height-1">0</strong>
						<span class="text-color-grey text-5"><?php echo $page_home['counter_4_title']; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif;?>
<!-- Portfolio Start -->
<section class="mt-5 mb-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col text-center">
				<h2 class="text-color-primary font-weight-bold ">
					<a href="<?php echo base_url('portfoylerimiz'); ?>">PORTFOLYÖMÜZ</a>
				</h2>
			</div>
		</div>
	</div>
</section>
<div id="revolutionSliderCarouselContainer" class="rev_slider_wrapper fullwidthbanner-container mb-4" data-alias="" style="background: #f3f3f2; height: 600px;">
	<div id="revolutionSliderCarousel" class="rev_slider fullwidthabanner" data-version="5.4.8">
		<ul>
			<?php foreach ($portfolios as $key => $portfolio): ?>
			<li data-index="rs-<?php echo $key;?>" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="" data-description="">
				<img src="<?php echo base_url('public/uploads/portfolio_photos/' . $portfolio['photo']); ?>" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>
<!-- Portfolio End -->
<!-- Why Hire us Start -->
<section class="section section-parallax section-height-4 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1}" data-image-src="<?php echo base_url('public/uploads/' . $page_home['home_why_choose_photo']); ?>" id="whyhireus">
	<div class="container container-xl-custom pb-5 mb-4">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-6 text-center">
				<h2 class="text-color-primary font-weight-bold pb-3 mb-3">REFERANSLARIMIZ</h2>
				<p class="font-weight-light text-color-light line-height-9 text-4 mb-5">Ortak çözümler üretip hayata geçirdiğimiz referanslarımız</p>
			</div>
		</div>
	</div>
</section>
<div class="container container-xl-custom custom-negative-margin-top z-index-2 position-relative">
	<div class="row align-items-center justify-content-center">
		<div class="col-sm-6 col-lg-3 col-xl-2 order-2 order-xl-1 mb-4 mb-lg-0">
			<div class="card border-0 custom-box-shadow-1">
				<div class="card-body my-1 my-xl-2">
					<div class="custom-content-rotator">
						<?php foreach ($clients_slider[0] as $client1): ?>
							<div><img src="<?php echo base_url('public/uploads/client/' . $client1['photo']); ?>" class="img-fluid" alt="<?php echo $client1['name'];?>" /></div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3 col-xl-2 order-3 order-xl-2 mb-4 mb-lg-0">
			<div class="card border-0 custom-box-shadow-1">
				<div class="card-body my-2 my-xl-2">
					<div class="custom-content-rotator">
						<?php foreach ($clients_slider[1] as $client2): ?>
							<div><img src="<?php echo base_url('public/uploads/client/' . $client2['photo']); ?>" class="img-fluid" alt="<?php echo $client2['name'];?>" /></div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8 col-xl-4 order-1 order-xl-3 mx-lg-5 mx-xl-0 mb-5">
			<div class="card border-0 custom-box-shadow-1">
				<div class="card-body text-center mt-4">
					<div class="owl-carousel owl-theme nav-style-1 nav-dark custom-nav-size-1 mb-0" data-plugin-options="{'items':1, 'nav': true, 'dots': false}">
						<div class="text-center px-5">
							<span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">PLUS</span>
							<p class="text-4 custom-responsive-m-p-y">Birçok referansımız arasında sizi de görmek isteriz.</p>
						</div>

					</div>
					<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="mailto:<?php echo $setting['top_bar_email']; ?>" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 custom-btn-pos-1 custom-btn-style-1">TEKLIF AL</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3 col-xl-2 order-4 order-xl-4 mb-4 mb-sm-0">
			<div class="card border-0 custom-box-shadow-1">
				<div class="card-body my-1 my-xl-2">
					<div class="custom-content-rotator">
						<?php foreach ($clients_slider[2] as $client3): ?>
							<div><img src="<?php echo base_url('public/uploads/client/' . $client3['photo']); ?>" class="img-fluid" alt="<?php echo $client3['name'];?>" /></div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3 col-xl-2 order-5 order-xl-5 mb-4 mb-sm-0">
			<div class="card border-0 custom-box-shadow-1">
				<div class="card-body my-1 my-xl-2">
					<div class="custom-content-rotator">
						<?php foreach ($clients_slider[3] as $client4): ?>
							<div><img src="<?php echo base_url('public/uploads/client/' . $client4['photo']); ?>" class="img-fluid" alt="<?php echo $client4['name'];?>" /></div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Why Hire Us End -->
<!-- Why Choose Start -->
<section class="section border-0 m-0" style="background-image:url('<?php echo base_url('public/uploads/why_choose_bg.webp'); ?>'); no-reapeat">
	<div class="container container-xl-custom">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-6 text-center">
					<img src="<?php echo base_url('public/uploads/why_choose.webp'); ?>" >
			</div>
			<div class="col-lg-9 col-xl-6">
				<div class="overflow-hidden mb-3">
					<h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Neden Plus?</h2>
				</div>
				<ul class="list list-icons list-icons-lg">
					<?php foreach ($why_choose as $row_why_choose): ?>
						<li data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
							<i class="fas fa-caret-right"></i> <?php echo $row_why_choose['name']; ?>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Why Choose End -->
<section class="section section-height-4 bg-quaternary border-0 m-0" id="contactus">
	<div class="container container-xl-custom">
		<div class="row mb-5">
			<div class="col text-center">
				<span class="text-color-primary custom-font-secondary font-weight-semibold">Bize Dokunun</span>
				<h2 class="text-color-light font-weight-bold mb-3">İletişim</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6 col-xl-4 order-2 order-xl-1 mb-4 mb-lg-0">
				<div class="card custom-card-style-1 h-100">
					<div class="card-body">
						<a href="#" class="text-decoration-none">
							<img src="<?php echo base_url('public/uploads/' . $setting['logo']); ?>" class="img-fluid pb-2 mt-3 mb-4" width="153" height="53" />
						</a>
						<h3 class="text-color-primary font-weight-bold text-transform-none text-8 line-height-1 pe-5 mb-4">PLUS</h3>
						<ul class="list list-icons list-icons-sm">
							<li class="text-color-light font-weight-light">
								<i class="fas fa-angle-right custom-text-color-grey-1"></i>  <?php echo $setting['footer_address'] ?>
							</li>
							<li class="text-color-light font-weight-light">
								<i class="fas fa-angle-right custom-text-color-grey-1"></i> <a href="mailto:<?php echo $setting['footer_email']; ?>" class="link-hover-style-1 ms-1"> <?php echo $setting['footer_email']; ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-xl-4 order-1 order-xl-2 mb-4 mb-xl-0">
				<div class="card custom-card-style-1 h-100 opacity-10 py-lg-5 py-xl-0" data-appear-animation="customBorderColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -500}">
					<div class="card-body d-flex justify-content-center flex-column text-center">
					<h3 class="text-color-primary font-weight-bold text-transform-none text-8 line-height-1 mb-4">Şimdi Arayın</h3>
						<a href="tel:<?php echo $setting['footer_phone']; ?>" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-11 opacity-10" data-appear-animation="customTextColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}"><?php echo $setting['footer_phone']; ?></a>
						<p class="mt-5"><a target="_blank" href="https://wa.me/+905549127135?text=Merhabalar"><img src="https://static.xx.fbcdn.net/rsrc.php/ym/r/36B424nhiL4.svg"></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4 order-3">
				<div class="card custom-card-style-1 h-100">
					<div class="card-body">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.0632192855805!2d27.254211015547316!3d38.44000868137894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b96340cafeabef%3A0x1b6d99ba5a78d323!2sPlus%20Reklam%20Tabela%20Matbaa%20Foto%C4%9Fraf!5e0!3m2!1str!2str!4v1613998845435!5m2!1str!2str" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>