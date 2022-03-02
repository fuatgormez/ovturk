<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url('public/layout/iris/img/shop/shop-header-bg.jpg?v=' . time()); ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0">Groupon</h1>
            <ul class="bg-white text-primary3">
                <li><a href="index.html">Startseite </a></li>
                <li class="active">Groupon</li>
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
            <div class="col-lg-12 col-xl-12">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
            </div>
            <div class="col-lg-12 col-xl-12 text-center">
                <div class="form-title-area">
                    <p class="text text-md"><strong>Liebe Groupon Kunden,</strong></p>
                    <p class="text text-md"><strong>Bitte füllen Sie die nachstehenden Punkte aus, damit wir Ihnen die nötigen Informationen senden können.</strong></p>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12">
                <?php echo form_open(base_url() . 'shop/groupon/add', array('class' => 'input-style3')); ?>
                <div class="row gutters-10">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Vorname" name="first_name" required>
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Nachname" name="last_name" required>
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_email'); ?>" name="email" required>
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Groupon GUTSCHEINCODE" name="coupon_code" required>
                        <i class="fal fa-code"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Groupon SECURITYCODE" name="security_code" required>
                        <i class="fal fa-code"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Straße" name="street" required>
                        <i class="fal fa-map"></i>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" class="form-control" placeholder="Nr." name="street_no" required>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" class="form-control" placeholder="plz" name="plz" required>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" placeholder="Stadt" name="city" required>
                        <i class="fal fa-map"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Wunschstandort" name="wunschstandort" required>
                        <i class="fal fa-map"></i>
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control" placeholder="Bemerkung" name="message"></textarea>
                        <i class="fal fa-pencil-alt"></i>
                    </div>
                    <div class="form-group mb-0 col-12 mt-20">
                        <button type="submit" class="vs-btn style3 rounded-0" name="form_groupon"><?php echo $this->lang->line('contact_form_send_button'); ?> <i class="far fa-angle-right"></i></button>
                    </div>
                </div>
                <p class="form-messages mt-20"></p>
                <?php echo form_close(); ?>
            </div>
        </div><!-- first row end -->

    </div>
</section>

<!--==============================
Contact Form Area
============================== -->