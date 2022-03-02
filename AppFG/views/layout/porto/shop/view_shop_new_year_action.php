<!--==============================
Work Process
============================== -->
<section role="main" class="main shop section border-0 p-relative" style="background: url(<?php echo base_url('public/layout/iris/img/shop/shop-header-bg.jpg?v=' . time()); ?>); position: absolute; inset: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <div class="particles-wrapper z-index-1">
        <div id="particles-1"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="3454" height="1066"></canvas></div>
    </div>
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col py-5 text-center d-none">
                <h1 class="text-color-dark font-weight-extra-bold text-10 line-height-5 mb-5 appear-animation animated fadeInDownShorterPlus appear-animation-visible" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                    <span class="p-2" style="background-color:rgba(235,193,8,0.9)"></span>
                </h1>
                <h1 class="text-color-dark text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation animated fadeInDownShorterPlus appear-animation-visible" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 100ms;">
                    <span class="p-2" style="background-color:rgba(235,193,8,0.9)"></span>
                </h1>
            </div>
        </div>
    </div>
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
    </div><!-- Container End -->
</section>




<div role="main" class="main shop pt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="masonry-loader masonry-loader-showing">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                    <?php foreach ($product_categories as $key => $row_category) : ?>
                        <?php if($row_category['category_sku'] === 'new_year_action'):?>
                            <?php foreach ($products as $key => $row_product) : ?>
                                <?php if (($row_category['category_id'] == $row_product['category_id']) && ($row_product['product_price'] != 0.00) && ($row_product['product_name'] != NULL)) : ?>
                                    <div class="col-sm-2 col-lg-4 mt-5">
                                            <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket', 'data-param' => 'new_year_action')); ?>
                                            <div class="product mb-0">
                                                <div class="product-thumb-info border-0 mb-3">
                                                    <div class="product-thumb-info-badges-wrapper">
                                                        <span class="badge badge-ecommerce badge-success">NEW</span>
                                                    </div>
                                                    <div class="product-thumb-info-image">
                                                        <img alt="" class="img-fluid" src="<?php echo base_url('public/uploads/product_photos/thumbnail/' . $row_product['thumbnail']); ?>">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                            <a href="#" class="text-color-dark text-color-hover-primary">
                                                            <?php echo $row_product['product_name']; ?>
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div title="Rated 5 out of 5">
                                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                                </div>
                                                <p class="price text-5 mb-3">
                                                    <span class="sale text-color-dark font-weight-semi-bold">
                                                        <?php echo $row_product['product_price']; ?> <?php echo $this->session->userdata('currency_icon'); ?>
                                                    </span>
                                                </p>
                                                <input type="hidden" name="product_id" value="<?php echo $row_product['id']; ?>">
                                                <button class="btn w-100 btn-dark btn-modern text-uppercase text-5 bg-color-hover-primary border-color-hover-primary add-to-basket-button" data-id=""><?php echo $this->lang->line('shop_add_to_cart'); ?></button>
                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                <?php endif;?>
                            <?php endforeach; ?>
                        <?php endif;?>
                    <?php endforeach; ?>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
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
                <a class="btn btn-warning" href="<?php echo base_url('shop'); ?>"><?php echo $this->lang->line('cart_popup_table_continue_shopping'); ?></a>
                <a class="btn btn-primary" href="<?php echo base_url('shop/cart'); ?>"><?php echo $this->lang->line('cart_popup_table_checkout'); ?></a>
            </div>
        </div>
    </div>
</div>
<!--==============================
 Cart Area End
==============================-->