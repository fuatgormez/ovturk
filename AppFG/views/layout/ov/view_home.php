<div role="main" class="main">
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

  <div class="container my-5 pt-md-4 pt-xl-0">
    <div class="row align-items-center justify-content-center pb-4 mb-5">
      <div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
        <div class="overflow-hidden">
          <h2
            class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
            data-appear-animation="maskUp"
            data-appear-animation-delay="300"
          >
		  SİZ İSTEYİN YETER
          </h2>
        </div>
        <div class="custom-divider divider divider-primary divider-small my-3">
          <hr
            class="my-0 appear-animation"
            data-appear-animation="customLineProgressAnim"
            data-appear-animation-delay="700"
          />
        </div>
		<h3 class="text-color-dark line-height-1 mt-5 mb-0 appear-animation"
            data-appear-animation="maskUp"
            data-appear-animation-delay="300">Birlikte Planlayıp Gerçekleştirelim</h3>
        <p
          class="font-weight-light text-3-5 mt-4 mb-4 appear-animation"
          data-appear-animation="fadeInUpShorter"
          data-appear-animation-delay="450"
        >
		Hayata geçmesini istediğiniz projeleri sizlerle birlikte tasarlıyor süreç boyunca sizleri haberdar ediyor ve detayları paylaşıyoruz baştan sonra her adımda birlikte çalışıyoruz.
        </p>

        <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
          <div
            class="feature-box align-items-center border border-top-0 border-end-0 border-bottom-0 custom-remove-mobile-xs-border-left ms-sm-4 ps-sm-4 appear-animation"
            data-appear-animation="fadeInRightShorterPlus"
            data-appear-animation-delay="1200"
          >
          </div>
        </div>
      </div>
      <div
        class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation"
        data-appear-animation="fadeInRightShorterPlus"
        data-appear-animation-delay="1450"
        data-plugin-options="{'accY': -200}"
      >
        <div class="position-relative">
          <div
            data-plugin-float-element
            data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"
          >
            <img
              src="<?php echo base_url('public/uploads/' . $page_home['home_welcome_video_bg']); ?>"
              class="img-fluid"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-2">
		<div class="text-center mt-5 mb-4"><h1>NELER YAPIYORUZ</h1></div>
      <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
        <a
          href="<?php echo base_url('tabela/2'); ?>"
          class="text-decoration-none"
        >
          <div
            class="custom-icon-box-style-1 appear-animation"
            data-appear-animation="fadeInRightShorterPlus"
            data-appear-animation-delay="250"
            data-plugin-options="{'accY': -200}"
          >
            <div class="custom-icon-style-1 mb-4">
              <img
                width="50"
                src="<?php echo base_url('public/uploads/product_category_photos/2.svg'); ?>"
                alt=""
                data-icon
                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
              />
            </div>
            <h3
              class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-5 my-2"
            >
			TABELA
            </h3>
            <p>Üretimden montajına kendi bünyemizde ürettiğimiz tabela adına birçok fikrimiz, ödüllü referanslarımız var. Biz de doğru bir iş ancak mutlu bir müşteri ile biter. Fikirlerinizi imkan ve tecrübelerimiz ile şekillendiriyoruz.</p>
          </div>
        </a>
                </div>
                <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                    <a href="<?php echo base_url('matbaa/1'); ?>" class="text-decoration-none">
                        <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">
                            <div class="custom-icon-style-1 mb-4">
                                <img width="50" src="<?php echo base_url('public/uploads/product_category_photos/1.svg'); ?>" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                            </div>
                            <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-5 my-2 mx-4">
                                MATBAA
                            </h3>
                            <p>Matbaa ve basım için en iyi çözümleri seçiyoruz. Son teknoloji basım ve kesim matbaa makinelerinde işlerinizi hazırlıyoruz.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center px-lg-5">
                    <a href="<?php echo base_url('dijital-baski/3'); ?>" class="text-decoration-none">
                        <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -200}">
                            <div class="custom-icon-style-1 mb-4">
                                <img width="50" src="<?php echo base_url('public/uploads/product_category_photos/3.svg'); ?>" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                            </div>
                            <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-5 my-2">
							DİJİTAL BASKI
                            </h3>
                            <p>Yüksek kaliteli malzeme ve en iyi Uv boya kullandığımız dijital baskı makinalarımız ile siz değerli müşterilerimize uzun yıllar solmayacak ve yıpranmayacak işleri üretip garanti veriyoruz.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <section class="section custom-bg-color-grey-1 custom-background-size-1 position-relative overflow-hidden border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '130%', 'fadeIn': true}" data-image-src="<?php echo base_url('public/layout/'.$theme.'/img/chalkboard-with-question-marks-hand-with-chalk_1205-1001.webp');?>">
            <svg class="custom-svg-background-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 537" data-appear-animation-svg="true">
			<path
				fill="#F4F4F4"
				d="M964.33,189.3L1110.08,0H0v537h1338.31L972.96,255.7C952.24,239.74,948.38,210.02,964.33,189.3z"
			/>
			<path
				class="appear-animation"
				data-appear-animation="customLineAnim2"
				data-appear-animation-delay="500"
				data-appear-animation-duration="5s"
				data-plugin-options="{'accY': -400}"
				fill="none"
				stroke="#1C5FA8"
				stroke-width="2"
				stroke-miterlimit="10"
				d="M1854.35,105.63l-485.31-340.84c-18.3-12.85-43.56-8.44-56.42,9.86L971.79,259.96
									c-12.85,18.3-8.44,43.56,9.86,56.42l485.31,340.84c18.3,12.85,43.56,8.44,56.42-9.86l340.84-485.31
									C1877.07,143.74,1872.65,118.48,1854.35,105.63z"
			/>
			</svg>
            <div class="container my-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="overflow-hidden">
                            <h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
							Neden ÖV?
                            </h2>
                        </div>
                        <div class="custom-divider divider divider-primary divider-small pt-1 mb-3 mt-2">
                            <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600" />
                        </div>
                        <div class="row">
                            <div class="col-5 col-lg-12 order-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750">
                                <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
								<?php foreach ($why_choose as $row_why_choose): ?>
                                    <li class="font-weight-semibold text-color-dark">
                                        <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> <?php echo $row_why_choose['name']; ?>
                                    </li>
									<?php endforeach;?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8 text-center">
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold text-color-dark line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
							Sizler iÇin Çözümlerimiz
                        </h2>
                    </div>
                    <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600" />
                    </div>
                    <p class="font-weight-light text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        
                    </p>
                </div>
            </div>
            <div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
			<?php foreach ($how_we_works as $row_how_we_works): ?>
                <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <img width="100" height="100" src="<?php echo base_url('public/uploads/how_we_works/' . $row_how_we_works['photo']); ?>" alt="" />
                        <h3 class="text-transform-none font-weight-bold text-5 mt-5 mb-4">
						<?php echo $row_how_we_works['name']; ?>
                        </h3>
						<p><?php echo $row_how_we_works['content']; ?></p>
                    </div>
                </div>
			<?php endforeach;?>
            </div>
  </div>
</div>



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




  <section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">
    <div class="container py-4">
      <div class="row align-items-center text-center py-5">
        <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
          <img
            src="img/logos/logo-8.png"
            alt
            class="img-fluid"
            style="max-width: 90px"
          />
        </div>
        <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
          <img
            src="img/logos/logo-9.png"
            alt
            class="img-fluid"
            style="max-width: 140px"
          />
        </div>
        <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
          <img
            src="img/logos/logo-10.png"
            alt
            class="img-fluid"
            style="max-width: 140px"
          />
        </div>
        <div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
          <img
            src="img/logos/logo-11.png"
            alt
            class="img-fluid"
            style="max-width: 140px"
          />
        </div>
        <div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
          <img
            src="img/logos/logo-12.png"
            alt
            class="img-fluid"
            style="max-width: 100px"
          />
        </div>
        <div class="col-sm-4 col-lg-2">
          <img
            src="img/logos/logo-13.png"
            alt
            class="img-fluid"
            style="max-width: 100px"
          />
        </div>
      </div>
    </div>
    <svg
      class="custom-svg-3"
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 193 495"
    >
      <path
        fill="#1C5FA8"
        d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"
      />
      <path
        fill="none"
        stroke="#FFF"
        stroke-width="1.5"
        stroke-miterlimit="10"
        d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"
      />
    </svg>
  </section>
</div>
