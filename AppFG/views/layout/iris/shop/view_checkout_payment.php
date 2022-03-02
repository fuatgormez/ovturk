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
                <?php echo $this->lang->line('shop_confirm'); ?> <i class="far fa-times bg-red"></i>
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
<section class="vs-checkout-area py-0 py-lg-20">
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

        <?php echo form_open_multipart(base_url() . 'shop/checkout/overview', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
        <div class="row">
            <!-- Submit button -->
            <div class="col-xl-12">
                <div class="vs-orderinfo-wrap bg-light mb-30 mt-1 mt-xl-0 py-4 px-4 bg-light-theme">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title"><?php echo $this->lang->line('payment_method'); ?></h4>
                        <?php if(base_url() === 'https://irispicture.ch/' || base_url() === 'https://www.fuatgormez.tech/irispicture/iptal'):?>
                        <div class="form-group mb-0 mt-50">
                            <label><span style="background: #ffcc01; padding:10px"><img src="https://checkout.postfinance.ch/assets/images/PostFinance_Logo.svg" width="100px"></span> (Kreditkarte | Paypal | Twint)</label>
                            <input type="hidden" name="payment_method" class="" value="postfinance" checked>
                        </div>
                        <?php else: ?>
                            <div class="form-group mb-0">
                                <?php $method_list = '';
                                foreach ($methods as $method_desc) : ?>
                                    <?php $method_list .= $method_desc->description . ' | '; ?>
                                <?php endforeach; ?>
                                
                                <?php if (base_url() === 'https://www.irispicture.com/' && in_array($this->session->userdata('id'), [1,15])) : ?>
                                    <label><?php echo $method_list; ?> Auf Rechnung</label>
                                <?php endif;?>
                                <div style="line-height:40px; vertical-align:top; ">
                                    <?php foreach ($methods as $key => $method) : ?>
                                            <input type="radio" name="payment_method" id="__<?php echo $method->id ;?>" class="__mollie_select_payment_method" value="<?php echo $method->id ;?>" <?php echo $key == 0 ? 'checked' : '';?>>
                                            <img src="<?php echo htmlspecialchars($method->image->size2x); ?>" srcset="<?php echo htmlspecialchars($method->image->size2x); ?> 1x" class="m-1 mollie-payment-method" data-method="<?php echo $method->id ;?>" <?php echo $key == 0 ? 'style="zoom: 1; filter: alpha(opacity=50);opacity: 0.2;"' : '';?>>
                                    <?php endforeach; ?>
                                    <?php if (base_url() === 'https://www.irispicture.com/' && in_array($this->session->userdata('id'), [1,15])) : ?>
                                        <img src="<?php echo base_url('public/layout/iris/img/shop/voo.png'); ?>" class="m-1 voo">
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(in_array($this->session->userdata('id'), [1,15])):?>
                        <div class="form-group mb-0">
                            <div class="voo-text" style="display: none;">
                                <hr>
                                <input type="radio" name="payment_method" id="bankTransfer" class="__mollie_select_payment_method" value="bankTransfer">
                                <label for="bankTransfer"><?php echo $this->lang->line('direct_bank_transfer'); ?></label>
                                <p class="mt-3">HINWEIS:</p>
                                Bestellungen per Sofort, Gripay oder Kreditkarte werden bevorzugt.
                                Daher bitten wir Sie um Verständnis, falls es zu Schwierigkeiten bei der Terminvergabe etc kommen könnte.
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <!-- Submit button End -->
        </div>
        <div class="row">
            <!-- Submit button -->
            <div class="col-xl-12">
                <div class="vs-orderinfo-wrap bg-light mb-30 mt-5 mt-xl-0 py-4 px-4 bg-light-theme">
                    <div class="vs-checkout-submit">
                        <div class="form-group mb-4 d-flex">
                            <input type="checkbox" name="checkoutTerms1" id="checkoutTerms1">
                            <label for="checkoutTerms1" class="pl-10 checkoutTerms1"><small><?php echo $this->lang->line('checkoutTerms1'); ?></small></label>
                        </div>
                        <div class="form-group mb-4 d-flex">
                            <input type="checkbox" name="checkoutTerms2" id="checkoutTerms2">
                            <label for="checkoutTerms2" class="pl-10 checkoutTerms2"><small><?php echo $this->lang->line('checkoutTerms2'); ?></small></label>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" name="form1" class="vs-btn btn-block style4 checkout-submit-check"><?php echo $this->lang->line('shop_next_step'); ?> <i class="far fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Submit button End -->
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