<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/banner_photo_gallery.jpeg" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <a href="<?php echo base_url('shop/cart'); ?>" class="vs-btn btn-sm-block style2">
                <?php echo $this->lang->line('shop_checkout'); ?> <i class="far fa-check"></i>
            </a>
            <a href="<?php echo base_url('shop/checkout/data'); ?>" class="vs-btn btn-sm-block style2">
                <?php echo $this->lang->line('shop_specify_address'); ?> <i class="far fa-check"></i>
            </a>
            <a href="<?php echo base_url('shop/checkout/payment'); ?>" class="vs-btn btn-sm-block style2">
                <?php echo $this->lang->line('shop_payment_method'); ?> <i class="far fa-check"></i>
            </a>
            <a href="<?php echo base_url('shop/checkout/overview'); ?>" class="vs-btn btn-sm-block style2">
                <?php echo $this->lang->line('shop_confirm'); ?> <i class="far fa-check"></i>
            </a>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->

<!--==============================
    Checkout Arae
    ==============================-->
<section class="vs-checkout-area py-60 py-lg-20">
    <div class="container">
        <div class="row mb-40">
            <div class="col-xl-12">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <p><?php echo $this->session->flashdata('error'); ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success">
                        <p><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php echo form_open_multipart(base_url() . 'shop/checkout/payment_sent', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
        <div class="row">
            <!-- Submit button -->
            <div class="col-xl-12">
                <div class="vs-orderinfo-wrap bg-light mb-30 mt-1 mt-xl-0 py-4 px-4 bg-light-theme">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title">
                            <a href="<?php echo base_url('shop/checkout/data');?>">
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
            </div>
            <div class="col-xl-12">
                <div class="vs-orderinfo-wrap bg-light mb-30 mt-1 mt-xl-0 py-4 px-4 bg-light-theme">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title">
                            <a href="<?php echo base_url('shop/checkout/payment');?>">
                                <?php echo $this->lang->line('shop_overview_change_payment'); ?>
                            </a>
                        </h4>
                        <div class="form-group mb-0">
                            <?php if(base_url() === 'https://irispicture.ch/') :?>
                                <label><span style="background: #ffcc01; padding:10px"><img src="https://checkout.postfinance.ch/assets/images/PostFinance_Logo.svg" width="100px"></span> (Kreditkarte | Paypal | Twint)</label>
                            <?php else:?>
                                <?php echo $this->session->userdata('payment_method'); ?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Submit button End -->
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <button type="submit" name="form1" class="vs-btn btn-block style4"><?php echo $this->lang->line('order_now_button'); ?> <i class="far fa-long-arrow-right"></i></button>
            </div>
        </div>

        <?php echo form_close(); ?>
    </div>
</section>
<!--==============================
    Checkout Area End
    ==============================-->




<a href="<?php echo base_url('shop/cart'); ?>" class="basket">
    <span id="cart_item_amounts"><?php echo $this->cart->total_items(); ?></span>
    <img src="<?php echo base_url('public/layout/iris/img/icon/cart-icon.svg'); ?>">
</a>