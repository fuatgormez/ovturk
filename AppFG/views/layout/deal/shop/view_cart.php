<main class="main cart">
    <div class="page-content pt-7 pb-10">
        <div class="step-by pr-4 pl-4">
            <h3 class="title title-simple title-step active"><a href="<?php echo base_url('shop/cart'); ?>">1. Warenkorb</a></h3>
            <h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/data'); ?>">2. Adress angeben</a></h3>
            <h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/payment'); ?>">3. Zahlungsmethode</a></h3>
            <h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/overview'); ?>">4. Bestätigen</a></h3>
        </div>
        <div class="container mt-7 mb-2">
            <div class="row">
                <div class="col-lg-12 col-md-12 pr-lg-12">
                    <table class="shop-table cart-table">
                        <thead>
                            <tr>
                                <th><span>Product</span></th>
                                <th></th>
                                <th><span>Price</span></th>
                                <th><span>quantity</span></th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                                <tr id="<?php echo $product['rowid']; ?>">
                                    <td class="product-thumbnail">
                                        <figure>
                                            <a href="product-simple.html">
                                                <img src="<?php echo base_url('public/uploads/product_photos/thumbnail/'); ?><?php echo $product['image']; ?>" width="100" height="100">
                                            </a>
                                        </figure>
                                    </td>
                                    <td class="product-name">
                                        <div class="product-name-section">
                                            <?php echo $product['name']; ?>
                                            &nbsp;
                                            <?php echo $product['item_id_old'] ? '(Old Item:' . $product['item_id_old'] . ')' : ''; ?>
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount"><?php echo number_format($product['price'], 2) . " " . $this->session->userdata('currency_icon'); ?></span>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="input-group">
                                            <button class="quantity-minus d-icon-minus subtruct_itm_qty" data-action="0" data-rowid="<?php echo $product['rowid']; ?>" data-product-id="<?php echo $product['id']; ?>"><i class="far fa-minus"></i></button>
                                            <input type="number" value="<?php echo $product['qty']; ?>" class="quantity form-control">
                                            <button class="quantity-plus d-icon-plus add_itm_qty" data-action="1" data-rowid="<?php echo $product['rowid']; ?>" data-product-id="<?php echo $product['id']; ?>"><i class="far fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount cart-price ml-3 totalprice-<?php echo $product['rowid']; ?>"><?php echo number_format(($product['qty'] * $product['price']), 2) . " " . $this->session->userdata('currency_icon'); ?></span>
                                    </td>
                                    <td class="product-close">
                                        <button class="ml-3 cart-removeproduct product-remove"><i class="text-danger fas fa-times remove_item" data-rowid="<?php echo $product['rowid']; ?>"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="cart-actions mb-6 pt-4">
                        <a href="<?php echo base_url('shop'); ?>" class="btn btn-dark btn-md btn-rounded btn-icon-left mr-4 mb-4"><i class="d-icon-arrow-left"></i>Weiter einkaufen</a>
                        <a href="<?php echo base_url('shop/checkout/data'); ?>" class="btn btn-dark btn-md btn-rounded"><?php echo $this->lang->line('cart_proceed_to_checkout'); ?></a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cart-coupon-box mb-8">
                                <h4 class="title coupon-title text-uppercase ls-m">Coupon Discount</h4>
                                <form action="#" class="vs-cart-coupon">
                                    <input type="text" name="coupon_code" class="input-text form-control text-grey ls-m mb-4" id="coupon_code" value="" placeholder="<?php echo $this->lang->line('enter_coupon_code'); ?>">
                                    <button type="submit" class="btn btn-md btn-dark btn-rounded btn-outline coupon_button"><?php echo $this->lang->line('cart_coupon_submit_button'); ?></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-coupon-box mb-8">
                                <div class="cart-actions mb-6">
                                    <table class="table table-totals text-right">
                                        <tbody>
                                            <tr>
                                                <td><?php echo $this->lang->line('cart_table_subtotal'); ?></td>
                                                <td id="cart_subtotal"><?php echo number_format($this->cart->total(), 2) . " " . $this->session->userdata('currency_icon'); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('cart_table_shipping_tax'); ?></td>
                                                <td id="shipping_total"><?php echo $this->session->userdata('shipping_total'); ?> <?php echo $this->session->userdata('currency_icon'); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('cart_table_coupon'); ?>:</td>
                                                <td id="cart_coupon"><?php echo number_format($this->session->userdata('coupon'), 2) . " " . $this->session->userdata('currency_icon') ?: 0.00; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('cart_table_discount'); ?>:</td>
                                                <td id="cart_discount"><?php echo number_format($this->session->userdata('discount_amount'), 2) . " " . $this->session->userdata('currency_icon') ?: 0.00; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('cart_table_total'); ?> <small>inkl. MwSt</small></td>
                                                <td id="cart_total">
                                                    <?php echo $this->session->userdata('coupon') ? number_format(($this->cart->total() - $this->session->userdata('coupon')) + $this->session->userdata('shipping_total'), 2) . " " . $this->session->userdata('currency_icon') : number_format(($this->cart->total() - $this->session->userdata('discount_amount')) + $this->session->userdata('shipping_total'), 2) . " " . $this->session->userdata('currency_icon'); //coupon code u varsa discount dahil olacak mi sor
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot style="display: none;">
                                            <tr>
                                                <td><?php echo $this->lang->line('cart_table_proportion'); ?></td>
                                                <?php
                                                $_tax = '1.' . $this->session->userdata('tax');
                                                if (!empty($this->session->userdata('coupon'))) {
                                                    $coupon = $this->cart->total() - $this->session->userdata('coupon');
                                                    $tax = $coupon - ($coupon / $_tax);
                                                } else {
                                                    $tax = $this->cart->total() - ($this->cart->total() / $_tax);
                                                }
                                                ?>
                                                <td id="cart_proportion"><?php echo number_format($tax, 2) . " " . $this->session->userdata('currency_icon'); ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- End Main -->