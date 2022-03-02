<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_faq']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_faq['faq_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('homepage'); ?> </a></li>
                <li class="active"><?php echo $page_faq['faq_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->







<!--==============================
    FAQ Area
============================== -->

<div class="vs-faq-wrapper vs-faq-layout1 pb-40 pb-lg-110 pt-60 pt-lg-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-accordion-area" id="faqAccordion">

                    <?php
                    $i=0;
                    foreach ($faqs as $row) {
                    $i++;
                    ?>

                    <div class="faq-card <?php if($i!=1) {echo 'open';} ?>">
                        <div class="faq-card-header" id="faqOne<?php echo $i; ?>">
                            <button class="faq-question <?php if($i!=1) {echo 'collapsed';} ?>" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i; ?>">
                                <?php echo $row['faq_title']; ?>
                            </button>
                        </div>
                        <div id="collapseOne<?php echo $i; ?>" class="collapse <?php if($i==1) {echo 'show';} ?>" aria-labelledby="faqOne<?php echo $i; ?>" data-parent="#faqAccordion">
                            <div class="faq-card-body bg-white">
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
</div>

<!--==============================
FAQ Area
============================== -->



<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php foreach ($faqs as $row):?>
            {
                "@type": "Question",
                "name": "<?php echo $row['faq_title']; ?>",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo $row['faq_content']; ?>"
                }
            },
            <?php endforeach;?>
        ]
    }
</script>

