<div role="main" class="main shop pb-4">

    <div class="container">

        <div class="row">
            <div class="col">
                <ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
                    <li class="text-transform-none me-2">
                        <a href="<?php echo base_url('shop/cart'); ?>" class="text-decoration-none text-color-primary"><?php echo $this->lang->line('shop_header_nav_shopping_cart');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten me-2">
                        <a href="<?php echo base_url('shop/checkout/data'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_specify_address');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="<?php echo base_url('shop/checkout/overview'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_payment_methods');?></a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="<?php echo base_url('shop/checkout/payment'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_confirm');?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pb-4 mb-5">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <form method="post" action="">
                    <div class="table-responsive">
                        <table class="shop_table cart">
                            <thead>
                                <tr class="text-color-dark">
                                    <th class="product-thumbnail" width="15%">
                                        &nbsp;
                                    </th>
                                    <th class="product-name text-uppercase" width="30%">
                                        Product
                                    </th>
                                    <th class="product-price text-uppercase" width="15%">
                                        Price
                                    </th>
                                    <th class="product-quantity text-uppercase" width="20%">
                                        Quantity
                                    </th>
                                    <th class="product-subtotal text-uppercase text-end" width="20%">
                                        Subtotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) : ?>
                                    <tr class="cart_table_item" id="<?php echo $product['rowid']; ?>">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="#" class="product-thumbnail-remove remove_item" title="Remove Product" data-rowid="<?php echo $product['rowid']; ?>">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <img width="90" height="90" alt="" class="img-fluid" src="<?php echo base_url('public/uploads/product_photos/thumbnail/' . $product['image']); ?>">
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">
                                                <?php echo $product['name']; ?>
                                                &nbsp;
                                                <?php echo $product['item_id_old'] ? '(Old Item:' . $product['item_id_old'] . ')' : ''; ?>
                                            </a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount font-weight-medium text-color-grey"><?php echo number_format($product['price'], 2) . " " . $this->session->userdata('currency_icon'); ?></span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <input type="button" class="subtruct_itm_qty minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-" data-action="0" data-rowid="<?php echo $product['rowid']; ?>" data-product-id="<?php echo $product['id']; ?>">
                                                <input type="text" class="input-text qty text" title="Qty" value="<?php echo $product['qty']; ?>" name="quantity" min="1" step="1">
                                                <input type="button" class="add_itm_qty plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+" data-action="1" data-rowid="<?php echo $product['rowid']; ?>" data-product-id="<?php echo $product['id']; ?>">
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4 totalprice-<?php echo $product['rowid']; ?>"><?php echo number_format(($product['qty'] * $product['price']), 2) . " " . $this->session->userdata('currency_icon'); ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="row justify-content-between mx-0">
                                            <div class="col-md-auto px-0 mb-3 mb-md-0">
                                                <div class="d-flex align-items-center">

                                                    <form action="#" class="vs-cart-coupon">
                                                        <input type="text" name="coupon_code" class="form-control h-auto border-radius-0 line-height-1 py-3 coupon" id="coupon_code" value="" placeholder="<?php echo $this->lang->line('enter_coupon_code'); ?>">
                                                        <button type="submit" class="btn btn-md btn-dark btn-rounded btn-outline btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2 coupon_button"><?php echo $this->lang->line('cart_coupon_submit_button'); ?></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-auto px-0">
                                                <a href="<?php echo base_url('shop'); ?>" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 btn-px-4 py-3"><i class="d-icon-arrow-left"></i><?php echo $this->lang->line('cart_continue_shopping');?></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 position-relative">
                <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                    <div class="card-body">
                        <h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
                        <table class="shop_table cart-totals mb-4">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <td class="border-top-0">
                                        <strong class="text-color-dark"><?php echo $this->lang->line('cart_table_subtotal'); ?></strong>
                                    </td>
                                    <td class="border-top-0 text-end">
                                        <strong><span class="amount font-weight-medium" id="cart_subtotal"><?php echo number_format($this->cart->total(), 2, ',','.') . " " . $this->session->userdata('currency_icon'); ?></span></strong>
                                    </td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <td class="border-top-0">
                                        <strong class="text-color-dark"><?php echo $this->lang->line('cart_table_shipping_tax'); ?></strong>
                                    </td>
                                    <td class="border-top-0 text-end">
                                        <strong><span class="amount font-weight-medium" id="shipping_total"><?php echo $this->session->userdata('shipping_total'); ?> <?php echo $this->session->userdata('currency_icon'); ?></span></strong>
                                    </td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <td class="border-top-0">
                                        <strong class="text-color-dark"><?php echo $this->lang->line('cart_table_coupon'); ?></strong>
                                    </td>
                                    <td class="border-top-0 text-end">
                                        <strong><span class="amount font-weight-medium" id="cart_coupon"><?php echo number_format($this->session->userdata('coupon'), 2) . " " . $this->session->userdata('currency_icon') ?: 0.00; ?></span></strong>
                                    </td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <td class="border-top-0">
                                        <strong class="text-color-dark"><?php echo $this->lang->line('cart_table_discount'); ?></strong>
                                    </td>
                                    <td class="border-top-0 text-end">
                                        <strong><span class="amount font-weight-medium" id="cart_discount"><?php echo number_format($this->session->userdata('discount_amount'), 2) . " " . $this->session->userdata('currency_icon') ?: 0.00; ?></span></strong>
                                    </td>
                                </tr>

                                <tr class="total">
                                    <td>
                                        <strong class="text-color-dark text-2-4"><?php echo $this->lang->line('cart_table_total'); ?> <small>inkl. MwSt</small></strong>
                                    </td>
                                    <td class="text-end">
                                        <strong class="text-color-dark"><span class="amount text-color-dark text-4" id="cart_total"><?php echo $this->session->userdata('coupon') ? number_format(($this->cart->total() - $this->session->userdata('coupon')) + $this->session->userdata('shipping_total'), 2, ',','.') . " " . $this->session->userdata('currency_icon') : number_format(($this->cart->total() - $this->session->userdata('discount_amount')) + $this->session->userdata('shipping_total'), 2, ',','.') . " " . $this->session->userdata('currency_icon'); ?></span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url('shop/checkout/data'); ?>" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3"><?php echo $this->lang->line('cart_proceed_to_checkout'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>