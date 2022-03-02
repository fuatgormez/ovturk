<!--==============================
Work Process
============================== -->
<section class="vs-work-process gradient-overlay work-process-layout3 background-image pt-60 pt-lg-130" data-vs-img="<?php echo base_url('public/layout/iris/img/shop/shop-header-bg.jpg?v=' . time()); ?>" id="process">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title3 pb-0 mt-0">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <div class="d-none d-lg-block">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Work Process Area End
============================== -->
</section>
<!--==============================
Work Process End
============================== -->

<!--==============================
 Shop Area
==============================-->
<section class="vs-product-wrapper product-details-layout1 pt-20 pt-lg-20 pb-30 pb-lg-90">
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
        
        <!-- Gutters-40 -->
        <div class="row gutters-40 pt-50">
            <?php foreach ($product_categories as $key => $row_category) : ?>
                <?php if($row_category['category_sku'] === 'new_year_action'):?>
                    <?php foreach ($products as $key => $row_product) : ?>
                        <?php if (($row_category['category_id'] == $row_product['category_id']) && ($row_product['product_price'] != 0.00) && ($row_product['product_name'] != NULL)) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="vs-product">
                                <div class="product-header">
                                    <div class="product-img">
                                        <img src="<?php echo base_url('public/uploads/product_photos/thumbnail/'.$row_product['thumbnail']); ?>" alt="Product Image" class="w-100">
                                    </div>
                                    <div class="action-buttons">
                                        <a class="icon-btn bg-theme popup-image" href="assets/img/shop/shop-img-6.jpg"><i class="far fa-eye"></i></a>
                                        <a class="vs-btn style1 icon-none" href="checkout.html">Order Now</a>
                                        <a class="icon-btn bg-theme" href="#"><i class="far fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title heading4 mb-2"><a href="shop-details.html">Washroom Cleaner towel</a></h3>
                                    <div class="price text-bold">
                                        <span class="text-theme"><?php echo $row_product['product_price']; ?> <?php echo $this->session->userdata('currency_icon'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    <?php endforeach; ?>
                <?php endif;?>
            <?php endforeach; ?>
        </div>
        <!-- Gutters-40 End -->

        

    </div><!-- Container End -->
</section>
<!--==============================
 Shop Area end
==============================-->

<!--==============================
 Cart Area
==============================-->
<!-- Modal -->
<div class="modal fade" id="cart_details_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="responseMessage"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th class="cart-col-image" scope="col" width="30%"><?php echo $this->lang->line('cart_popup_table_image'); ?></th>
                                <th class="cart-col-productname" scope="col" width="55"><?php echo $this->lang->line('cart_popup_table_product'); ?></th>
                                <th class="cart-col-price" scope="col" width="15%"><?php echo $this->lang->line('cart_popup_table_price'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cartProductImage"></td>
                                <td class="cartProductName align-middle"></td>
                                <td class="cartProductPrice align-middle"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <a class="btn btn-warning" data-dismiss="modal"><?php echo $this->lang->line('cart_popup_table_continue_shopping'); ?></a>
                <a class="btn btn-primary" href="<?php echo base_url('shop/cart'); ?>"><?php echo $this->lang->line('cart_popup_table_checkout'); ?></a>
            </div>
        </div>
    </div>
</div>
<!--==============================
 Cart Area End
==============================-->



<a href="<?php echo base_url('shop/cart'); ?>" class="basket">
    <span id="cart_item_amounts"><?php echo $this->cart->total_items(); ?></span>
    <img src="<?php echo base_url('public/layout/iris/img/icon/cart-icon.svg'); ?>">
</a>