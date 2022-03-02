<!--==============================
     Shop Area 
  ==============================-->
<section class="vs-product-wrapper product-details-layout1 pt-60 pt-lg-60 pb-30 pb-lg-90">
    <div class="container">
        <div class="tab-content" id="productDetailsTab">
            <div class="tab-pane show active" id="review" aria-labelledby="review-tab">
                <div class="vs-comment-form comments-form-layout1 pt-30 mb-30">
                    <?php if(base_url() === 'https://www.irispicture.com/' || base_url() === 'https://irispicture.ch/' || base_url() === 'https://www.youririsfoto.com/'):?>
                        <h4 class="inner-title mb-lg-40 text-danger">Herzlich willkommen!</h4>
                        <h4 class="inner-title mb-lg-40">Heute haben wir für dich eine tolle Aktion am Start.</h4>
                        <h4 class="inner-title mb-lg-40">Für einen Upgrade klicke auf die Whatsappnummer und schreibe uns deinen Wunsch, sodass wir Dir ein individuelles Angebot machen können.</h4>
                        <h4 class="inner-title mb-lg-40"><a href="https://api.whatsapp.com/message/3ZT5GJ5XKPESO1" target="_blank">Whatsapp: +4915219306053</a></h4>
                    <?php endif;?>
                    <h5>Order nummer:#<span id="order_number"><?php echo $order->order_number; ?></span></h5>
                    <div class="row gutters-20 comment-form">
                        <div class="col-12 widget">
                            <?php foreach ($order_items as $items) : ?>
                                <p class="updatable_productCANCEL btn btn-primary" data-product-id="<?php echo $items['item_product_id']; ?>" data-product-name="<?php echo $items['item_name']; ?>" data-product-price="<?php echo $items['item_price']; ?>"><?php echo $items['item_name'] . ' ->' . $items['item_price']; ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row gutters-20 comment-form">
                        <div class="col-12 form-group mb-0 mt-xl-10">
                            <h1></h1>
                        </div>
                        <?php foreach ($order_images_with_watermak as $row_image) : ?>
                            <div class="col-12 form-group">
                                <img src="<?php echo base_url('public/watermark_order_images/') . $row_image; ?>">
                            </div>
                        <?php endforeach; ?>
                        <div class="col-12 widget">
                            <?php foreach ($order_items as $items) : ?>
                                <p class="updatable_productCANCEL btn btn-primary" data-product-id="<?php echo $items['item_product_id']; ?>" data-product-name="<?php echo $items['item_name']; ?>" data-product-price="<?php echo $items['item_price']; ?>"><?php echo $items['item_name'] . ' ->' . $items['item_price']; ?></p>
                            <?php endforeach; ?>
                        </div>

                        <div class="col-12 form-group">
                            <label for="commentMessage" class="sr-only">Write a Message</label>
                            <textarea name="commentMessage" id="commentMessage" class="form-control" cols="30" rows="10" placeholder="Write a Message" spellcheck="false"></textarea>
                            <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 2;" class="_1KJtL"></grammarly-extension>
                            <i class="fal fa-pencil-alt"></i>
                        </div>
                        <div class="col-6 form-group">
                            <input type="radio" name="confirm_order" class="confirm_order" id="trueConfirm" value="1" checked>
                            <label for="trueConfirm">Druck freigeben</label>
                        </div>
                        <div class="col-6 form-group">
                            <input type="radio" name="confirm_order" class="confirm_order" id="falseConfirm" value="0">
                            <label for="falseConfirm">Keine Druckfreigabe</label>
                        </div>
                        <div class="col-12 form-group mb-0 mt-xl-10">
                            <button type="submit" class="vs-btn btn-block style2 confirm_order_button">Save <i class="fal fa-comments"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="confirm_order_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="cart-table table-responsive">
                    <h1><?php echo $this->lang->line('shop_order_confirm_success_text'); ?></h1>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('shop'); ?>" class="btn btn-block btn-warning" data-dismiss="modal"><?php echo $this->lang->line('shop_order_confirm_success_button'); ?></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal End-->


<!-- Update Product Modal -->
<div class="modal fade" id="update_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Current Item: <span id="current_item"></span></h5>
                <section class="vs-product-wrapper product-details-layout1">
                    <div class="blog-comment-area  blog-comments-layout1 ">
                        <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                        <ul class="comment-list res_items">

                        </ul>
                        <?php echo form_close(); ?>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('shop'); ?>" class="btn btn-block btn-warning" data-dismiss="modal"><?php echo $this->lang->line('shop_order_confirm_success_button'); ?></a>
            </div>
        </div>
    </div>
</div>
<!-- Update Product Modal End-->





<a href="<?php echo base_url('shop/cart'); ?>" class="basket">
    <span id="cart_item_amounts"><?php echo $this->cart->total_items(); ?></span>
    <img src="<?php echo base_url('public/layout/iris/img/icon/cart-icon.svg'); ?>">
</a>