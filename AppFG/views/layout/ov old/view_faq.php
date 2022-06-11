<!--==============================
    page-header
============================== -->
<section class="get-in-touch bg-color-after-secondary p-relative overflow-hidden" style="background-image: url('<?php echo base_url('public/uploads/' . $setting['banner_faq']); ?>'); background-size: cover; background-position: center; padding:130px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-color-light font-weight-bold custom-text-12 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <?php echo $page_faq['faq_heading']; ?>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--==============================
page-header end
============================== -->

<!--==============================
    FAQ Area
============================== -->
<div role="main" class="main">
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="toggle toggle-primary m-0" data-plugin-toggle>
                    <?php foreach ($faqs as $key => $row) : ?>
                        <section class="toggle <?php echo $key == 0 ? 'active' : '' ?>">
                            <a class="toggle-title"><?php echo $row['faq_title']; ?></a>
                            <div class="toggle-content">
                                <?php echo $row['faq_content']; ?>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
FAQ Area
============================== -->



<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php foreach ($faqs as $row) : ?> {
                    "@type": "Question",
                    "name": "<?php echo $row['faq_title']; ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo $row['faq_content']; ?>"
                    }
                },
            <?php endforeach; ?>
        ]
    }
</script>