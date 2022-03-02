<!--==============================
    page-header
============================== -->
<section class="get-in-touch bg-color-after-secondary p-relative overflow-hidden" style="background-image: url('<?php echo base_url('public/uploads/' . $setting['banner_about']); ?>'); background-size: cover; background-position: center; padding:130px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-color-light font-weight-bold custom-text-12 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <?php echo $page_about['about_heading']; ?>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--==============================
page-header end
============================== -->

<main class="main">
    <div class="page-content mt-10 pt-10">
        <section class="about-section pb-10 appear-animate">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RkJARnkPkdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
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