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
                <?php echo $this->lang->line('shop_payment_method'); ?> <i class="far fa-times bg-red"></i>
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
<section class="vs-checkout-area py-60 py-lg-130">
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
        <?php echo form_open_multipart(base_url() . 'shop/checkout/add', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
        <div class="row">
            <!-- Order Info & Invoice -->
            <div class="col-xl-6">
                <h2 class="form-title heading3 text-bold mb-4"><?php echo $this->lang->line('payment_form_title_billing'); ?> |
                    <a class="text-primary2 customerShipAnother d-none d-md-inline" href="#"><?php echo $this->lang->line('payment_form_title_ship'); ?></a>
                </h2>
                <div class="row gutters-20">
                    <div class="col-md-6 form-group">
                        <label for="billingFirstName" class="sr-only"><?php echo $this->lang->line('payment_form_firstname'); ?></label>
                        <input type="text" name="billingFirstName" id="billingFirstName" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_firstname'); ?>*" value="<?php echo $billingFirstName;?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="billingLastName" class="sr-only"><?php echo $this->lang->line('payment_form_lastname'); ?></label>
                        <input type="text" name="billingLastName" id="billingLastName" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_lastname'); ?>*" value="<?php echo $billingLastName;?>" required>
                    </div>
                    <div class="col-8 form-group">
                        <label for="billingStreet" class="sr-only"><?php echo $this->lang->line('payment_form_street'); ?></label>
                        <input type="text" name="billingStreet" id="billingStreet" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street'); ?>*" value="<?php echo $billingStreet;?>" required>
                    </div>
                    <div class="col-4 form-group">
                        <input type="text" name="billingStreetNo" id="billingStreetno" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street_no'); ?>*" value="<?php echo $billingStreetNo;?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="billingPostCode" class="sr-only"><?php echo $this->lang->line('payment_form_postcode'); ?></label>
                        <input type="text" name="billingPostCode" id="billingPostCode" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_postcode'); ?>*" value="<?php echo $billingPostCode;?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="billingCity" class="sr-only"><?php echo $this->lang->line('payment_form_city'); ?></label>
                        <input type="text" name="billingCity" id="billingCity" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_city'); ?>*" value="<?php echo $billingCity;?>">
                    </div>
                    <div class="col-md-12 form-group hide">
                        <label for="billingCountry" class="sr-only"><?php echo $this->lang->line('payment_form_land'); ?></label>
                        <select name="billingCountry" id="billingCountry" class="select2">
                            <option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label for="billingEmail" class="sr-only"><?php echo $this->lang->line('payment_form_email'); ?></label>
                        <input type="email" name="billingEmail" id="billingEmail" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_email'); ?>*" value="<?php echo $billingEmail;?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label for="billingPhone" class="sr-only"><?php echo $this->lang->line('payment_form_phone'); ?></label>
                        <input type="tel" name="billingPhone" id="billingPhone" class="form-control billingPhone" placeholder="<?php echo $this->lang->line('payment_form_phone'); ?>*" value="<?php echo $billingPhone;?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label for="billingStoreId" class="sr-only">Store Name</label>
                        <select name="billingStoreId" id="billingStoreId" class="form-select form-control">
							<?php foreach($stores as $row_store):?>
								<option value="<?php echo $row_store['id'];?>" <?php echo $this->session->userdata('store_name') === $row_store['store_name'] ? 'selected' : '' ?>><?php echo $row_store['store_name']?></option>
							<?php endforeach;?>
						</select>
                    </div>
                    <div class="col-12 form-group">
                        <label for="billingComment" class="sr-only"><?php echo $this->lang->line('payment_form_comment'); ?></label>
                        <textarea name="billingComment" id="billingComment" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_comment'); ?>"><?php echo @$this->session->userdata['keep_input_value']['billingComment']; ?></textarea>
                    </div>
                    <div class="col-12 d-block d-md-none">
                        <h2 class="form-title heading3 text-bold">
                            <a class="text-primary2 customerShipAnother" href="#"><?php echo $this->lang->line('payment_form_title_ship'); ?></a>
                        </h2>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Order Info & Invoice End -->

            <!-- Order Info & Shipping -->
            <div class="col-xl-6">
                <div class="vs-billing-differentAddress input-style2">
                    <h2 class="form-title heading3 text-bold mb-4"><?php echo $this->lang->line('payment_form_title_shipping'); ?></h2>
                    <div class="row gutters-20">
                        <div class="col-md-6 form-group">
                            <label for="shippingFirstName" class="sr-only"><?php echo $this->lang->line('payment_form_firstname'); ?></label>
                            <input type="text" name="shippingFirstName" id="shippingFirstName" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_firstname'); ?>*">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="shippingLastName" class="sr-only"><?php echo $this->lang->line('payment_form_lastname'); ?></label>
                            <input type="text" name="shippingLastName" id="shippingLastName" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_lastname'); ?>*">
                        </div>
                        <div class="col-8 form-group">
                            <label for="shippingStreet" class="sr-only"><?php echo $this->lang->line('payment_form_street'); ?></label>
                            <input type="text" name="shippingStreet" id="shippingStreet" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingStreet']; ?>">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" name="shippingStreetNo" id="shippingStreetno" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street_no'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingStreetNo']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="shippingPostCode" class="sr-only"><?php echo $this->lang->line('payment_form_postcode'); ?></label>
                            <input type="text" name="shippingPostCode" id="shippingPostCode" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_postcode'); ?>*">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="shippingCity" class="sr-only"><?php echo $this->lang->line('payment_form_city'); ?></label>
                            <input type="text" name="shippingCity" id="shippingCity" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_city'); ?>*">
                        </div>
                        <div class="col-md-12 form-group hide">
                            <label for="shippingCountry" class="sr-only"><?php echo $this->lang->line('payment_form_land'); ?></label>
                            <select name="shippingCountry" id="shippingCountry" class="select2">
                                <option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="shippingEmail" class="sr-only"><?php echo $this->lang->line('payment_form_email'); ?></label>
                            <input type="email" name="shippingEmail" id="shippingEmail" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_email'); ?>*">
                        </div>
                        <div class="col-12 form-group">
                            <label for="shippingPhone" class="sr-only"><?php echo $this->lang->line('payment_form_phone'); ?></label>
                            <input type="number" name="shippingPhone" id="shippingPhone" class="form-control shippingPhone" placeholder="<?php echo $this->lang->line('payment_form_phone'); ?>*">
                        </div>
                        <div class="col-12 form-group">
                            <label for="shippingStoreId" class="sr-only">Store Name</label>
                            <select name="shippingStoreId" id="shippingStoreId" class="form-select form-control">
                                <?php foreach($stores as $row_store):?>
                                    <option value="<?php echo $row_store['id'];?>" <?php echo $this->session->userdata('store_name') === $row_store['store_name'] ? 'selected' : '' ?>><?php echo $row_store['store_name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="shippingComment" class="sr-only"><?php echo $this->lang->line('payment_form_comment'); ?></label>
                            <textarea name="shippingComment" id="shippingComment" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_comment'); ?>"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order Info & Shipping End -->
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <button type="submit" name="form1" class="vs-btn btn-block style4"><?php echo $this->lang->line('shop_next_step'); ?> <i class="far fa-long-arrow-right"></i></button>
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