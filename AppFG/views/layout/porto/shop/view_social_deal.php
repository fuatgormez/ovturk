<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url('public/layout/iris/img/shop/shop-header-bg.jpg?v=' . time()); ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0">Social Deal</h1>
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
                    <p class="text text-md"><strong>Dear Social Deal customers, Please fill out the information below so that we can send you the necessary information.</strong></p>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12">
                <?php echo form_open(base_url() . 'shop/social_deal/add', array('class' => 'input-style3')); ?>
                <div class="row gutters-10">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Firstname" name="first_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Lastname" name="last_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_email'); ?>" name="email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Socialdeal Vouchercode" name="coupon_code" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Wunschstandort / Desired Location" name="desired_location" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Street" name="street" required>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" class="form-control" placeholder="No." name="street_no" required>
                    </div>
                    <div class="form-group col-md-1">
                        <input type="text" class="form-control" placeholder="plz" name="plz" required>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" placeholder="City" name="city" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Country" name="country" required>
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control" placeholder="Comment" name="message"></textarea>
                    </div>
                    <div class="form-group mb-0 col-12 mt-20">
                        <button type="submit" class="btn btn-block btn-dark btn-rounded" name="form_social_deal">Send</button>
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