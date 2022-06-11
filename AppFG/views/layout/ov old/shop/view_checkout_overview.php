<main class="main checkout">
    <div class="page-content pt-7 pb-10 mb-10">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
                    <li class="text-transform-none me-2">
                        <a href="<?php echo base_url('shop/cart'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_shopping_cart');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten me-2">
                        <a href="<?php echo base_url('shop/checkout/data'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_specify_address');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="<?php echo base_url('shop/checkout/overview'); ?>" class="text-decoration-none text-color-grey-lighten"><?php echo $this->lang->line('shop_header_nav_payment_methods');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="<?php echo base_url('shop/checkout/payment'); ?>" class="text-decoration-none text-color-grey-primary text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_confirm');?></a>
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

            <?php echo form_open_multipart(base_url() . 'shop/checkout/payment_sent', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
            <div class="row">
                <div class="col-6">
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
                                <a href="<?php echo base_url('shop/checkout/payment'); ?>">payment
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
                <div class="col-6 d-none">
                    <div class="table-responsive">
                        <table class="shop_table cart">
                            <thead>
                                <tr class="text-color-dark">
                                    <th class="product-thumbnail" width="15%">
                                        &nbsp;
                                    </th>
                                    <th class="product-name text-uppercase" width="45%">
                                        Product
                                    </th>
                                    <th class="product-quantity text-uppercase" width="5%">
                                        Qty
                                    </th>
                                    <th class="product-subtotal text-uppercase text-end" width="20%">
                                        Subtotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->cart->contents() as $product) : ?>
                                    <tr class="cart_table_item" id="<?php echo $product['rowid']; ?>">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Photo Camera">
                                                    <img width="90" height="90" alt="" class="img-fluid" src="<?php echo base_url('public/uploads/product_photos/thumbnail/' . $product['image']); ?>">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">
                                                <?php echo $product['name']; ?>
                                                &nbsp;
                                                <?php echo $product['item_id_old'] ? '(Old Item:' . $product['item_id_old'] . ')' : ''; ?>
                                            </a>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <?php echo $product['qty']; ?>
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4 totalprice-<?php echo $product['rowid']; ?>"><?php echo number_format(($product['qty'] * $product['price']), 2) . " " . $this->session->userdata('currency_icon'); ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="row justify-content-end mx-0">
                                            <div class="col-md-auto px-0">
                                            <strong class="text-color-dark">Total: <span class="amount text-color-dark text-4" id="cart_total"><?php echo $this->session->userdata('coupon') ? number_format(($this->cart->total() - $this->session->userdata('coupon')) + $this->session->userdata('shipping_total'), 2) . " " . $this->session->userdata('currency_icon') : number_format(($this->cart->total() - $this->session->userdata('discount_amount')) + $this->session->userdata('shipping_total'), 2) . " " . $this->session->userdata('currency_icon'); ?></span></strong>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 form-group">
                    <button type="submit" name="form1" class="btn w-100 btn-dark btn-modern text-uppercase text-5 bg-color-hover-primary border-color-hover-primary"><?php echo $this->lang->line('order_now_button'); ?> <i class="far fa-long-arrow-right"></i></button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</main>