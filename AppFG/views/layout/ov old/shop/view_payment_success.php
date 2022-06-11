<!--==============================
    page-header
============================== -->

<!--==============================
page-header end
============================== -->

<main class="main checkout">
    <div class="page-content pt-7 pb-10 mb-10">
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
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h3><a href="<?php echo base_url('shop'); ?>"><?php echo $this->lang->line('payment_success_message');?></a></h3>
                        <strong class="text-black"><?php echo $success_message; ?></strong>
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>

                <div class="col-12">
                    <?php 
                        echo 'Name: ' . $this->session->userdata('payment_form')['billing_firstname'] .'<br>';
                        echo 'Email: ' . $this->session->userdata('payment_form')['billing_email'] .'<br>';
                    ?>
                </div>
                <div class="col-12">
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
    </div>
</main>