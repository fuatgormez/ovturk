<!--==============================
    page-header
============================== -->
<section class="get-in-touch bg-color-after-secondary p-relative overflow-hidden" style="background-image: url('<?php echo base_url('public/uploads/' . $setting['banner_contact']); ?>'); background-size: cover; background-position: center; padding:130px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-color-light font-weight-bold custom-text-12 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <?php echo $page_contact['contact_heading']; ?>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--==============================
page-header end
============================== -->



<!--==============================
Contact Form Area
============================== -->

<section class="contact-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <strong><i class="far fa-thumbs-up"></i> Upps!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success">
                        <strong><i class="far fa-thumbs-up"></i> Well done!</strong> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open(base_url() . 'contact/send_email', array('class' => 'contact-form input-style3')); ?>
                <div class="form-title-area">
                    <p class="text text-md"><strong><?php echo $this->lang->line('contact_form_title_text'); ?></strong>
                    </p>
                </div>
                <div class="row gutters-10">
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_name'); ?>" name="name" required>
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_email'); ?>" name="email" required>
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="ggf. order number" name="order_number">
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_phone'); ?>" name="phone" required>
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_subject'); ?>" name="subject" required>
                    </div>

                    <div class="form-group col-12 mb-4">
                        <textarea class="form-control" placeholder="<?php echo $this->lang->line('contact_form_message'); ?>" name="message" required></textarea>
                    </div>
                    <div class="form-group mb-0 col-12 mt-20">
                        <button type="submit" class="btn btn-block btn-dark btn-rounded" name="form_contact"><?php echo $this->lang->line('contact_form_send_button'); ?> <i class="far fa-angle-right"></i></button>
                    </div>
                </div>
                <p class="form-messages mt-20"></p>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="widget bg-white mt-50">

                    <p><?php echo $page_contact['contact_email']; ?></p>

                    <p><?php echo $page_contact['contact_phone']; ?></p>

                    <p>
                        Hauptsitz: <br>
                        <?php echo $page_contact['contact_address']; ?></p>
                </div>
            </div>
        </div><!-- first row end -->

    </div>
</section>

<!--==============================
Contact Form Area
============================== -->