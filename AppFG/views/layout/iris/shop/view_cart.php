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
                <?php echo $this->lang->line('shop_specify_address'); ?> <i class="far fa-times bg-red"></i>
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
    Checkout Area
    ==============================-->
<section class="vs-cart-wrapper pt-60 pt-lg-20 pb-30 pb-lg-90">
    <div class="container">
        <div class="cart-table table-responsive">
            <div id="shopping_cart_output">
                <?php foreach ($products as $product) : ?>
                    <div class="d-flex flex-sm-row flex-column justify-content-between align-items-center bg-white mt-4 rounded" id="<?php echo $product['rowid']; ?>">
                        <div class="pl-1 pt-1 mb-2 justify-content-center align-items-center" style="display:flex">
                            <img class="rounded" src="<?php echo base_url('public/uploads/product_photos/thumbnail/'); ?><?php echo $product['image']; ?>" width="70">
                            <span class="pl-1"><?php echo $product['name']; ?></span>&nbsp;
                            <?php echo $product['item_id_old'] ? '(Old Item:' . $product['item_id_old'] . ')' : ''; ?>
                        </div>
                        <div class="p-2 justify-content-center align-items-center">
                            <div class="quantity-box">
                                <button class="quantity-minus subtruct_itm_qty" data-action="0" data-rowid="<?php echo $product['rowid']; ?>" data-product-id="<?php echo $product['id']; ?>"><i class="far fa-minus"></i></button>
                                <input type="text" value="<?php echo $product['qty']; ?>" class="qty-input quantity">
                                <button class="quantity-plus add_itm_qty" data-action="1" data-rowid="<?php echo $product['rowid']; ?>" data-product-id="<?php echo $product['id']; ?>"><i class="far fa-plus"></i></button>
                                <span class="cart-price ml-3 totalprice-<?php echo $product['rowid']; ?>"><?php echo number_format(($product['qty'] * $product['price']), 2) . " " . $this->session->userdata('currency_icon'); ?></span>
                                <button class="ml-3 cart-removeproduct"><i class="text-danger fas fa-times remove_item" data-rowid="<?php echo $product['rowid']; ?>"></i></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div><!-- shopping_cart_output end -->
        </div><!-- cart-table table-responsive end -->
        <div class="vs-cart-bottom mt-4">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <form action="#" class="vs-cart-coupon">
                        <label for="coupon-field" class="sr-only"><?php echo $this->lang->line('have_a_coupon_code'); ?></label>
                        <input class="form-control coupon" type="text" id="coupon-field" placeholder="<?php echo $this->lang->line('enter_coupon_code'); ?>" required="required">
                        <button class="vs-btn style3 coupon_button"><?php echo $this->lang->line('cart_coupon_submit_button'); ?></button>
                    </form>
                </div>
                <div class="col-md-6 col-lg-6 justify-content-end">
                    <div class="vs-cart-summary">
                        <h3 class="summary-title" style="display:none"><?php echo $this->lang->line('cart_table_total_title'); ?></h3>
                        <table class="table table-totals">
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
                        <p><a href="<?php echo base_url('shop/checkout/data'); ?>" class="vs-btn style3"><?php echo $this->lang->line('cart_proceed_to_checkout'); ?></a></p>
                        <p><a href="<?php echo base_url('shop'); ?>" class="style3"><?php echo $this->lang->line('cart_continue_shopping'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
    Checkout Area End
    ==============================-->



<a href="<?php echo base_url('shop/checkout'); ?>" class="basket">
    <span id="cart_item_amounts"><?php echo $this->cart->total_items(); ?></span>
    <img src="<?php echo base_url('public/layout/iris/img/icon/cart-icon.svg'); ?>">
</a>




<script>
    fbq('track', 'AddToCart', {
        value: 1,
        currency: 'EUR',
    });
</script>