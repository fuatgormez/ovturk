<div class="shop dialog dialog-lg fadeIn animated" style="animation-duration: 300ms;">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumb-gallery-wrapper">
                <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                    <?php foreach ($category_photos as $category_photo) : ?>
                        <?php if ($category_id == $category_photo['product_category_id']) : ?>
                            <div class="product-image">
                                <img alt="" class="img-fluid thumbnail<?php echo $category_id; ?>" src="<?php echo base_url('public/uploads/product_category_photos/'.$category_photo['photo']); ?>" data-zoom-image="<?php echo base_url('public/uploads/product_category_photos/'.$category_photo['photo']); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                    <?php foreach ($category_photos as $category_photo) : ?>
                        <?php if ($category_id == $category_photo['product_category_id']) : ?>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="<?php echo base_url('public/uploads/product_category_photos/'.$category_photo['photo']); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <div class="col-lg-8">
            <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
            <div class="summary entry-summary position-relative">
                <h1 class="font-weight-bold text-7 mb-0"><?php echo !isset($product['category_name']) ?: @$category['category_name']; ?> <?php echo $product['product_name']; ?></h1>
                <p class="price mb-3">
					<span class="sale text-color-dark"><?php echo $product['product_price'].$store_currency_icon; ?></span>
					<span class="amount"><?php echo $product['product_price_old'].$store_currency_icon; ?></span>
				</p>
                <p class="text-3-5 mb-3"><?php echo !isset($product['short_content']) ?: @$category['short_description']; ?></p>
                <p class="text-3-5 mb-3"><?php echo !isset($product['content']) ?: @$category['description']; ?></p>
                <p class="text-3-5 mb-3"></p>
                
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <a href="#" class="btn w-100 btn-dark btn-modern text-uppercase text-5 bg-color-hover-primary border-color-hover-primary add-to-basket-button" data-id=""><i class="d-icon-bag"></i> In den Warenkorb</a>
            </div>
            <?php echo form_close(); ?>

        </div>
        <hr>
        <div class="col-lg-12">
            <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 6000}" style="height: auto;">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1638px, 0px, 0px); transition: all 0.25s ease 0s; width: 3276px;">
                        <?php foreach ($testimonials as $row) : ?>
                            <div class="owl-item " style="width: 546px;">
                                <div>
                                    <div class="testimonial testimonial-style-2">
                                        <div class="testimonial-arrow-down"></div>
                                        <div class="testimonial-author">
                                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="img-fluid rounded-circle" alt="">
                                            <p><strong class="font-weight-extra-bold"><?php echo $row['name']; ?></strong></p>
                                        </div>
                                        <blockquote>
                                            <p class="mb-0"><?php echo $row['comment']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cart_details_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="responseMessage"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                <a class="btn btn-warning" href="<?php echo base_url('shop'); ?>"><?php echo $this->lang->line('cart_popup_table_continue_shopping'); ?></a>
                <a class="btn btn-primary" href="<?php echo base_url('shop/cart'); ?>"><?php echo $this->lang->line('cart_popup_table_checkout'); ?></a>
            </div>
        </div>
    </div>
</div>