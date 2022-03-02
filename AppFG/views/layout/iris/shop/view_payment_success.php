<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url('public/layout/iris/img/shop/shop-header-bg.jpg?v=' . time()); ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0">Shop</h1>
            <ul class="bg-white text-primary3">
                <li><a href="<?php echo base_url('shop'); ?>">Home </a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->

<!--==============================
    Checkout Arae
    ==============================-->
<section class="vs-checkout-area py-60 py-lg-30">
    <div class="container">
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="row">
                <!-- Order Info & Shipping -->
                <div class="col-xl-12">
                    <div class="vs-orderinfo-wrap bg-light mb-30 mt-5 mt-xl-0 py-4 px-4 bg-light-theme">

                        <div class="alert alert-danger">
                            <span><?php echo $this->session->flashdata('error'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- Order Info & Shipping End -->
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success text-center">
                    <h1>Hurraa !</h1>
                    <h3><a href="<?php echo base_url('shop'); ?>"><?php echo $this->lang->line('payment_success_message');?></a></h3>
                    <h5 class="mt-4"><a href="<?php echo base_url('shop'); ?>"><?php echo $success_message; ?></a></h3>
                </div>
            </div>
            <div class="col-md-12">
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
                                            <a href="" class="product-thumbnail-image" title="Photo Camera">
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
                                        <strong class="text-color-dark">Total: <span class="amount text-color-dark text-4" id="cart_total"><?php echo $this->session->userdata('coupon') ? number_format(($this->cart->total() - $this->session->userdata('coupon')) + $this->session->userdata('shipping_total'), 2) : number_format(($this->cart->total() - $this->session->userdata('discount_amount')) + $this->session->userdata('shipping_total'), 2); ?></span> <?php echo $this->session->userdata('currency_icon');?></strong>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
    Checkout Area End
    ==============================-->