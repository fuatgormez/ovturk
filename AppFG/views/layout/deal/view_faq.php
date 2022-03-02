<!--==============================
    page-header
============================== -->
<div class="page-header" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_about']; ?>)">
    <h1 class="page-title font-weight-bold text-capitalize ls-l"><?php echo $page_faq['faq_heading']; ?></h1>
</div>
<!--==============================
page-header end
============================== -->


<!--==============================
    FAQ Area
============================== -->

<main class="main">
    <div class="page-content mb-10 pb-8">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-10">
                        <div class="accordion accordion-border accordion-boxed accordion-plus">
                            <?php
                            $i = 0;
                            foreach ($faqs as $row) {
                                $i++;
                            ?>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#collapse1-1" class="collapse"><?php echo $row['faq_title']; ?></a>
                                    </div>
                                    <div id="collapse1-1" class="<?php if ($i != 1) {
                                                                        echo 'collapsed';
                                                                    } else {
                                                                        echo 'expanded';
                                                                    } ?>">
                                        <div class="card-body">
                                            <?php echo $row['faq_content']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
<!-- End Main -->

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