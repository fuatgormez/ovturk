<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">Hakkimizda</h1>
				<span class="sub-title">Izmir PLUS REKLAMCILIK</span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
					<li class="active">Hakkimizda</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->

<main class="main">
    <div class="page-content mt-5 pt-10">
        <section class="about-section pb-10 appear-animate">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 lead appear-animation animated fadeInUpShorter appear-animation-visible">
                        <?php echo $page_about['about_content']; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- End Team Section -->
    </div>
</main>
<!-- End Main -->