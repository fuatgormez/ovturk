<main class="main checkout">
    <div class="page-content pt-7 pb-10 mb-10">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
                    <li class="text-transform-none me-2">
                        <a href="<?php echo base_url('shop/cart'); ?>" class="text-decoration-none text-color-grey-lighten"><?php echo $this->lang->line('shop_header_nav_shopping_cart');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten me-2">
                        <a href="<?php echo base_url('shop/checkout/data'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_specify_address');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="<?php echo base_url('shop/checkout/overview'); ?>" class="text-decoration-none text-color-grey-primary text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_payment_methods');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="<?php echo base_url('shop/checkout/payment'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_confirm');?></a>
                    </li>
                </ul>
            </div>
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

            <?php echo form_open_multipart(base_url() . 'shop/checkout/overview', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
            <div class="row">
                <!-- Submit button -->
                <div class="col-xl-12">
                    <div class="vs-checkout-payment pt-2 pb-2">
                        <h4 class="title"><?php echo $this->lang->line('payment_method'); ?></h4>
                        <div class="form-group mb-0">
                            <?php $method_list = '';
                            foreach ($methods as $method_desc) : ?>
                                <?php $method_list .= $method_desc->description . ' | '; ?>
                            <?php endforeach; ?>
                            <?php if(in_array($this->session->userdata('id'), [1,15,37])):?>
                                <label><?php echo $method_list; ?> Auf Rechnung</label>
                            <?php else:?>
                                <?php if (base_url() === 'https://www.youririsfoto.com/' && in_array($this->session->userdata('id'), [1,15])) : ?>
                                <label><?php echo $method_list; ?> Auf Rechnung</label>
                                <?php endif; ?>
                            <?php endif; ?>
                            
                            <div style="line-height:40px; vertical-align:top; ">
                                <?php foreach ($methods as $key => $method) : ?>
                                    <input type="radio" name="payment_method" id="__<?php echo $method->id; ?>" class="__mollie_select_payment_method" value="<?php echo $method->id; ?>" <?php echo $key == 0 ? 'checked' : ''; ?>>
                                    <img src="<?php echo htmlspecialchars($method->image->size2x); ?>" srcset="<?php echo htmlspecialchars($method->image->size2x); ?> 1x" class="m-1 mollie-payment-method" data-method="<?php echo $method->id; ?>" <?php echo $key == 0 ? 'style="zoom: 1; filter: alpha(opacity=50);opacity: 0.2;"' : ''; ?>>
                                <?php endforeach; ?>
                                
                                <?php if(in_array($this->session->userdata('id'), [1,15,37])):?>
                                    <img src="<?php echo base_url('public/layout/iris/img/shop/voo.png'); ?>" class="m-1 voo">
                                <?php else:?>
                                    <?php if (base_url() === 'https://www.youririsfoto.com/' && in_array($this->session->userdata('id'), [1,15])) : ?>
                                        <img src="<?php echo base_url('public/layout/iris/img/shop/voo.png'); ?>" class="m-1 voo">
                                    <?php endif; ?>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        <?php if(in_array($this->session->userdata('id'), [1,15])):?>
                        <div class="form-group mb-0">
                            <div class="voo-text" style="display: none;">
                                <hr>
                                <div class="custom-radio">
                                    <input type="radio" name="payment_method" id="bankTransfer" class="__mollie_select_payment_method custom-control-input" value="bankTransfer">
                                    <label for="bankTransfer"><?php echo $this->lang->line('direct_bank_transfer'); ?></label>
                                </div>
                                <p class="mt-3">HINWEIS:</p>
                                Bestellungen per Sofort, Gripay oder Kreditkarte werden bevorzugt.
                                Daher bitten wir Sie um Verständnis, falls es zu Schwierigkeiten bei der Terminvergabe etc kommen könnte.
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Submit button End -->
            </div>
            <div class="row">
                <!-- Submit button -->
                <div class="col">
                    <div class="form-group mt-3 mb-0">
                        <input type="checkbox" name="checkoutTerms1" id="checkoutTerms1">
                        <label for="checkoutTerms1" class="checkoutTerms1"><?php echo $this->lang->line('checkoutTerms1'); ?></label>
                    </div>
                    <div class="form-group mb-4">
                        <input type="checkbox" name="checkoutTerms2" id="checkoutTerms2">
                        <label for="checkoutTerms2" class="checkoutTerms2"><?php echo $this->lang->line('checkoutTerms2'); ?></label>
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" name="form1" class="btn btn-dark btn-block btn-rounded btn-order checkout-submit-check"><?php echo $this->lang->line('shop_next_step'); ?> <i class="far fa-long-arrow-right"></i></button>
                    </div>
                </div>
                <!-- Submit button End -->
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</main>