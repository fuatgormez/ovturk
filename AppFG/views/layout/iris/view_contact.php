<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_contact']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $page_contact['contact_heading']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="index.html">Startseite </a></li>
                <li class="active"><?php echo $page_contact['contact_heading']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->



<!--==============================
Contact Form Area
============================== -->

<section class="vs-contact-form contact-form-layou1 position-relative py-60 py-lg-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
                
                <?php echo form_open(base_url() . 'contact/send_email', array('class' => 'contact-form input-style3')); ?>
                <div class="form-title-area">
                    <p class="text text-md"><strong><?php echo $this->lang->line('contact_form_title_text'); ?></strong>
                    </p>
                </div>
                <div class="row gutters-10">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_name'); ?>" name="name" required>
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_email'); ?>" name="email" required>
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="ggf. order number" name="order_number">
                        <i class="fal fa-tag"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_phone'); ?>" name="phone" required>
                        <i class="fal fa-phone-alt"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_subject'); ?>" name="subject" required>
                        <i class="fal fa-pen-alt"></i>
                    </div>

                    <div class="form-group col-12">
                        <textarea class="form-control" placeholder="<?php echo $this->lang->line('contact_form_message'); ?>" name="message" required></textarea>
                        <i class="fal fa-pencil-alt"></i>
                    </div>
                    <div class="form-group mb-0 col-12 mt-20">
                        <button type="submit" class="vs-btn style3 rounded-0" name="form_contact"><?php echo $this->lang->line('contact_form_send_button'); ?> <i class="far fa-angle-right"></i></button>
                    </div>
                </div>
                <p class="form-messages mt-20"></p>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="widget bg-white mt-50">

                    <p><?php echo $page_contact['contact_email'];?></p>

                    <p><?php echo $page_contact['contact_phone'];?></p>

                    <p>
                        Hauptsitz: <br>
                        <?php echo $page_contact['contact_address'];?></p>
                </div>
            </div>
        </div><!-- first row end -->

    </div>
</section>

<!--==============================
Contact Form Area
============================== -->