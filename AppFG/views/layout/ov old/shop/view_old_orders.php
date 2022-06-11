<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/layout/iris/img/breadcrumb/breadcumb-img-1.jpg" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"></h1>
            
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

        <?php echo form_open_multipart(base_url() . 'shop/old_orders/add', array('class' => 'vs-billing-information input-style2')); ?>
        <div class="row">
            <!-- Order Info & Invoice -->
            <div class="col-xl-6">
                <h2 class="form-title heading3 text-bold mb-4"><?php echo $this->lang->line('payment_form_title_billing'); ?>
                </h2>
                <div class="row gutters-20">
                    <div class="col-md-6 form-group">
                        <label for="billingFirstName" class="sr-only"><?php echo $this->lang->line('payment_form_firstname'); ?></label>
                        <input type="text" name="billingFirstName" id="billingFirstName" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_firstname'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['billingFirstName']; ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="billingLastName" class="sr-only"><?php echo $this->lang->line('payment_form_lastname'); ?></label>
                        <input type="text" name="billingLastName" id="billingLastName" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_lastname'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['billingLastName']; ?>" required>
                    </div>
                    <div class="col-9 form-group">
                        <label for="billingStreet" class="sr-only"><?php echo $this->lang->line('payment_form_street'); ?></label>
                        <input type="text" name="billingStreet" id="billingStreet" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street'); ?>" value="<?php echo @$this->session->userdata['keep_input_value']['billingStreet']; ?>" required>
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" name="billingStreetNo" id="billingStreetno" class="form-control" placeholder="No" value="<?php echo @$this->session->userdata['keep_input_value']['billingStreetNo']; ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="billingPostCode" class="sr-only"><?php echo $this->lang->line('payment_form_postcode'); ?></label>
                        <input type="number" name="billingPostCode" id="billingPostCode" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_postcode'); ?>" value="<?php echo @$this->session->userdata['keep_input_value']['billingPostCode']; ?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="billingCity" class="sr-only"><?php echo $this->lang->line('payment_form_city'); ?></label>
                        <input type="text" name="billingCity" id="billingCity" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_city'); ?>" value="<?php echo @$this->session->userdata['keep_input_value']['billingCity']; ?>">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="billingCountry" class="sr-only"><?php echo $this->lang->line('payment_form_land'); ?></label>
                        <select name="billingCountry" id="billingCountry" class="form-select form-control">
                            <option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label for="billingEmail" class="sr-only"><?php echo $this->lang->line('payment_form_email'); ?></label>
                        <input type="email" name="billingEmail" id="billingEmail" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_email'); ?>" value="<?php echo @$this->session->userdata['keep_input_value']['billingEmail']; ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label for="billingPhone" class="sr-only"><?php echo $this->lang->line('payment_form_phone'); ?></label>
                        <input type="tel" name="billingPhone" id="billingPhone" class="form-control billingPhone" placeholder="Phone *" value="<?php echo @$this->session->userdata['keep_input_value']['billingPhone']; ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label class="form-label" for="billingStoreId">Store Name</label>
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
                        <div class="col-9 form-group">
                            <label for="shippingStreet" class="sr-only"><?php echo $this->lang->line('payment_form_street'); ?></label>
                            <input type="text" name="shippingStreet" id="shippingStreet" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street'); ?>" value="<?php echo @$this->session->userdata['keep_input_value']['shippingStreet']; ?>">
                        </div>
                        <div class="col-3 form-group">
                            <input type="text" name="shippingStreetNo" id="shippingStreetno" class="form-control" placeholder="No" value="<?php echo @$this->session->userdata['keep_input_value']['shippingStreetNo']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="shippingPostCode" class="sr-only"><?php echo $this->lang->line('payment_form_postcode'); ?></label>
                            <input type="number" name="shippingPostCode" id="shippingPostCode" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_postcode'); ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="shippingCity" class="sr-only"><?php echo $this->lang->line('payment_form_city'); ?></label>
                            <input type="text" name="shippingCity" id="shippingCity" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_city'); ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="shippingCountry" class="sr-only"><?php echo $this->lang->line('payment_form_land'); ?></label>
                            <select name="shippingCountry" id="shippingCountry" class="form-select form-control">
                                <option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="shippingEmail" class="sr-only"><?php echo $this->lang->line('payment_form_email'); ?></label>
                            <input type="email" name="shippingEmail" id="shippingEmail" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_email'); ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label for="shippingPhone" class="sr-only"><?php echo $this->lang->line('payment_form_phone'); ?></label>
                            <input type="number" name="shippingPhone" id="shippingPhone" class="form-control shippingPhone" placeholder="<?php echo $this->lang->line('payment_form_phone'); ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label class="form-label" for="shippingStoreId">Store Name</label>
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
            <!-- Submit button -->
            <div class="col-xl-12">
                <div class="vs-orderinfo-wrap bg-light mb-30 mt-1 mt-xl-0 py-4 px-4 bg-light-theme">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title"><?php echo $this->lang->line('payment_method'); ?></h4>
                        <div class="form-group mb-0">
                            <input type="radio" name="order_type" id="irisshot" checked value="irisshot">
                            <label for="irisshot">IRISSHOT</label>
                        </div>
                        <div class="form-group mb-0">
                            <input type="radio" name="order_type" id="groupon" value="groupon">
                            <label for="groupon">GROUPON</label>
                        </div>
                        <div class="form-group mb-0">
                            <input type="radio" name="order_type" id="social_deal" value="social_deal">
                            <label for="groupon">Social Deal</label>
                        </div>
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
                        <button type="submit" name="form1" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3"><?php echo $this->lang->line('order_now_button'); ?> <i class="far fa-long-arrow-right"></i></button>
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