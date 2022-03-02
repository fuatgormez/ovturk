<main class="main checkout">
    <div class="page-content pt-7 pb-10 mb-10">
        <div class="step-by pr-4 pl-4">
            <h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/cart'); ?>">1. Warenkorb</a></h3>
            <h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/data'); ?>">2. Adress angeben</a></h3>
            <h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/payment'); ?>">3. Zahlungsmethode</a></h3>
            <h3 class="title title-simple title-step active"><a href="<?php echo base_url('shop/checkout/overview'); ?>">4. Bestätigen</a></h3>
        </div>

        <div class="container mt-7">
            <div class="card accordion">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                    <div class="alert alert-danger alert-dark alert-round alert-inline">
                        <h4 class="alert-title"><?php echo $this->session->flashdata('error'); ?></h4>
                        <button type="button" class="btn btn-link btn-close">
                            <i class="d-icon-times"></i>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dark alert-round alert-inline">
                        <h4 class="alert-title"><?php echo $this->session->flashdata('success'); ?></h4>
                        <button type="button" class="btn btn-link btn-close">
                            <i class="d-icon-times"></i>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <?php echo form_open_multipart(base_url() . 'shop/checkout/payment_sent', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
            <div class="row">
                <!-- Submit button -->
                <div class="col-xl-12">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title">
                            <a href="<?php echo base_url('shop/checkout/data'); ?>">
                                <?php echo $this->lang->line('shop_overview_change_info'); ?>
                            </a>
                        </h4>
                        <div class="form-group mb-0">
                            <p><?php echo $this->session->userdata('keep_input_value')['billingFirstName']; ?>
                                <?php echo $this->session->userdata('keep_input_value')['billingLastName']; ?></p>
                            <p>
                                <?php echo $this->session->userdata('keep_input_value')['billingStreet']; ?>
                                <?php echo $this->session->userdata('keep_input_value')['billingStreetNo']; ?> <br>
                                <?php echo $this->session->userdata('keep_input_value')['billingPostCode']; ?>
                                <?php echo $this->session->userdata('keep_input_value')['billingCity']; ?> <br>
                                <?php echo $this->session->userdata('keep_input_value')['billingCountry']; ?>
                            </p>
                            <p><?php echo $this->session->userdata('keep_input_value')['billingEmail']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title">
                            <a href="<?php echo base_url('shop/checkout/payment'); ?>">
                                <?php echo $this->lang->line('shop_overview_change_payment'); ?>
                            </a>
                        </h4>
                        <div class="form-group mb-0">
                            <?php echo $this->session->userdata('payment_method'); ?>
                        </div>
                    </div>
                </div>
                <!-- Submit button End -->
            </div>

            <div class="row">
                <div class="col-12 form-group">
                    <button type="submit" name="form1" class="btn btn-dark btn-block btn-rounded btn-order"><?php echo $this->lang->line('order_now_button'); ?> <i class="far fa-long-arrow-right"></i></button>
                </div>
            </div>

            <?php echo form_close(); ?>

        </div>
    </div>
</main>