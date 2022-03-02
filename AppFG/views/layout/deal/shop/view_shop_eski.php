<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image "
     data-vs-img="<?php echo base_url(); ?>public/layout/iris/img/breadcrumb/breadcumb-img-1.jpg"
     data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0">Shop Details</h1>
            <ul class="bg-white text-primary3">
                <li><a href="index.html">Home </a></li>
                <li class="active">Shop Details</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->

<!--==============================
 Shop Area
==============================-->
<section class="vs-product-wrapper vs-product-layout1  pt-60 pt-lg-120 pb-30 pb-lg-90">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($product_category as $key => $row): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="vs-product">
                        <div class="product-header">
                            <div class="product-img vs-carousel" data-dots-color="primary3" data-slidetoshow="1"
                                 data-arrows="true" data-prevarrow="far fa-arrow-left"
                                 data-nextarrow="far fa-arrow-right" data-dots="true" data-mldots="true"
                                 data-xldots="true" data-lgdots="true" data-mddots="true" data-smdots="true"
                                 data-xsdots="true" data-mlarrows="true" data-xlarrows="true" data-lgarrows="true"
                                 data-mdarrows="true" data-smarrows="true" data-xsarrows="true">
                                <?php foreach ($product_category_photo as $category_photo): ?>
                                    <?php if ($row['category_id'] == $category_photo['product_category_id']): ?>
                                        <div>
                                            <span class="discount">-20%</span>
                                            <img src="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>"
                                                 class="w-100">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>

                            <?php $discount = ($product['product_price_old'] - $product['product_price']) / $product['product_price'] * 100; ?>
                            <span class="discount">-<?php echo $discount; ?>%</span>

                        </div><!-- Product-header End -->

                        <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                        <div class="product-content">
                            <h3 class="product-title heading4 mb-2"><?php echo $row['category_name']; ?></h3>
                            <div class="form-group col-md-12 select-box p-0 m-0">
                                <select name="product_id">
                                    <?php $buttom_price = 0; $buttom_price_old = 0; ?>
                                    <?php foreach ($products as $product_row): ?>
                                        <?php if (($row['category_id'] == $product_row['category_id']) && ($product_row['product_price'] != 0.00) && ($product_row['product_name'] != NULL)): ?>
                                            <?php $buttom_price = $product_row['product_price']; $buttom_price_old = $product_row['product_price_old']; ?>
                                            <option value="<?php echo $product_row['id']; ?>"><?php echo $product_row['product_name']; ?><?php echo $product_row['product_price']; ?><?php echo $product_row['currency_icon']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="price text-bold mt-20">
                                <span class="text-theme"><?php echo $buttom_price; ?></span>
                                <del class="text-xs"><?php echo $buttom_price_old; ?></del>
                            </div>
                            <div>
                                <button class="vs-btn btn-block text-center style3 icon-none rounded-0 mt-10 add-to-basket-button"
                                        data-id="">Order Now
                                </button>
                            </div>
                        </div><!-- Product-content End -->
                        <?php echo form_close(); ?>

                    </div><!-- Vs-product End -->
                </div><!-- col-md-6 col-lg-4 End -->
            <?php endforeach; ?>
        </div><!-- Row End -->
    </div><!-- Container End -->
</section>
<!--==============================
 Shop Area end
==============================-->

<!--==============================
 Cart Area
==============================-->
<!-- Modal -->
<div class="modal fade" id="cart_details_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                            <th class="cart-col-image" scope="col">Image</th>
                            <th class="cart-col-productname" scope="col">Product</th>
                            <th class="cart-col-price" scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="cartProductImage"></td>
                            <td class="cartProductName"></td>
                            <td class="cartProductPrice"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <a class="btn btn-secondary" data-dismiss="modal">Weiter Einkaufen</a>
                <a class="btn btn-primary" href="<?php echo base_url('shop/checkout'); ?>">checkout</a>
            </div>
        </div>
    </div>
</div>
<!--==============================
 Cart Area End
==============================-->
