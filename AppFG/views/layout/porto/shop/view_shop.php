<!--==============================
Shop Header
============================== -->
<section role="main" class="main shop section border-0 p-relative" style="background: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_shop']; ?>); position: absolute; inset: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col py-5 text-center">
                <h1 class="text-color-dark font-weight-extra-bold text-10 line-height-5 mb-5 appear-animation animated fadeInDownShorterPlus appear-animation-visible" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                    
                </h1>
                <h1 class="text-color-dark text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation animated fadeInDownShorterPlus appear-animation-visible" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 100ms;">
                    
                </h1>
            </div>
        </div>
    </div>
</section>
<!--==============================
Shop Header End
============================== -->
<div class="container">
    <div class="masonry-loader masonry-loader-showing">
        <div class="row mt-5">
            <div class="col">
                <div class="ratio ratio-16x9">
                    <?php if(base_url() === 'https://www.youririsfoto.com/'):?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/p0xotyOVM2A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php elseif(base_url() === 'https://www.youririsfoto.be/' || base_url() === 'https://www.youririsfoto.nl/'):?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/malMdFGS-eg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php else:?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9GfE1f69xVM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 mb-4 mb-lg-0">							
            <h1 class="mb-2 text-center"><?php echo $this->lang->line("shop_body"); ?></h1>

            <?php if(base_url() === 'https://www.youririsfoto.com/' || base_url() === 'https://www.youririsfoto.nl/' || base_url() === 'https://www.youririsfoto.be/' || base_url() === 'https://www.fuatgormez.tech/irispicture/'):?>
                <img class="img-fluid" src="<?php echo base_url('valentines_day.jpg');?>">
            <?php endif;?>

            <?php if(base_url() === 'https://www.irispicture.com/' || base_url() === 'https://www.youririsfoto.com/' || base_url() === 'https://www.youririsfoto.nl/' || base_url() === 'https://www.youririsfoto.be/' || base_url() === 'https://www.fuatgormez.tech./irispicture/'):?>
                <div class="mt-5">
                    <?php echo $this->lang->line('shop_body_slogan2');?>
                    <?php echo $this->lang->line('shop_body_slogan');?>
                </div>
            <?php endif;?>


            <?php if(base_url() === 'https://www.youririsfoto.be/iptal'):?>
                <img class="img-fluid" src="<?php echo base_url('public/uploads/be-ead11d97-9c91-4439-8d10-fc9efe5bd38d.jpeg');?>">
            <?php endif;?>
            <?php if(base_url() === 'https://www.irispicture.com/iptal' || base_url() === 'https://www.youririsfoto.com/iptal' || base_url() === 'https://www.fuatgormez.tech/irispicture/'):?>
                <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow mt-5" id="accordionPrimary">
                    <div class="card card-default">
                        <div class="card-header" id="collapsePrimaryHeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePrimaryOne" aria-expanded="false" aria-controls="collapsePrimaryOne" style="background-color:#fdc109 !important">
                                    <?php echo $this->lang->line("locations"); ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsePrimaryOne" class="collapse" aria-labelledby="collapsePrimaryHeadingOne" data-bs-parent="#accordionPrimary" style="">
                            <div class="card-body">
                            <ul class="list list-icons list-icons-style-2">
                                <?php foreach ($stores as $row_store) : ?>
                                    <li><i class="fas fa-check"></i> <span class="text-3"><?php echo $row_store['store_name'] . ' ' . $row_store['store_address']; ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if(base_url() === 'https://www.youririsfoto.com/iptal' || base_url() === 'https://www.youririsfoto.nl/' || base_url() === 'https://www.youririsfoto.be/'):?>
                <div class="card-body">
                    <ul class="list list-icons list-icons-style-2">
                        <?php foreach ($stores as $row_store) : ?>
                            <li><i class="fas fa-check"></i> <span class="text-3"><?php echo $row_store['store_name'] . ' ' . $row_store['store_address']; ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif;?>
            </div>
        </div>
        <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
        
        </div>
    </div>
</div>
<!--==============================
 Shop Area
==============================-->
<section class="vs-product-wrapper product-details-layout1 pt-20 pt-lg-20 pb-30 pb-lg-90">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <div class="vs-work-process pt-1">
                    <div class="process-body justify-content-center">
                        <div class="process-content blog-single-layout1">
                            <?php if ($setting['frontend_shop_countdown_status'] === 'Show') : ?>
                                <hr>
                                <h1><?php echo $this->lang->line('shop_countdown_widget_text'); ?></h1>
                                <div class="powr-countdown-timer" id="<?php echo $setting['frontend_shop_countdown_id']; ?>"></div>
                                <script src="<?php echo $setting['frontend_shop_countdown_link']; ?>"></script>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gutters-40 -->
        <div class="row">
            <?php foreach ($product_categories as $key => $row_category) : ?>
                <div class="col-lg-4">
                    <!-- Product Gallery -->
                    <div class="thumb-gallery-wrapper">
                        <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3 owl-loaded owl-drag">
                            <div class="owl-stage-outer owl-height" style="height: 403.5px;">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2068px;">
                                <?php foreach ($product_category_photo as $category_photo) : ?>
                                    <?php if ($row_category['category_id'] == $category_photo['product_category_id']) : ?>
                                        <div class="owl-item" style="width: 403.5px; margin-right: 10px;">
                                            <div>
                                                <img alt="" class="img-fluid thumbnail<?php echo $row_category['category_id']; ?>" src="<?php echo base_url('public/uploads/product_category_photos/' . $category_photo['photo']); ?>" data-zoom-image="<?php echo base_url('public/uploads/product_category_photos/' . $category_photo['photo']); ?>">
                                                <div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:403.5px;width:403.5px;">
                                                    <div class="zoomWindowContainer" style="width: 400px;">
                                                        <div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px -151.5px; width: 403.5px; height: 403.5px; float: left; cursor: grab; background-repeat: no-repeat; position: absolute; background-image: url(&quot;<?php echo base_url('public/uploads/product_category_photos/' . $category_photo['photo']); ?>&quot;); top: 0px; left: 0px; display: none;" class="zoomWindow">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>    
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"></button><button type="button" role="presentation" class="owl-next"></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 524px;">
                                <?php foreach ($product_category_photo as $category_photo) : ?>
                                    <?php if ($row_category['category_id'] == $category_photo['product_category_id']) : ?>
                                        <div class="owl-item" style="width: 89.625px; margin-right: 15px;">
                                            <div class="cur-pointer">
                                                <img alt="" class="img-fluid thumbnail<?php echo $row_category['category_id']; ?>" src="<?php echo base_url('public/uploads/product_category_photos/' . $category_photo['photo']); ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                    <!-- Product Gallery End -->
                </div>
                <div class="col-lg-8">
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <div class="product-content">
                        <h3 class="product-title heading4 mb-2">
                            <a href="<?php echo base_url($slug->url($row_category['category_name']).'/'.$row_category['category_id']);?>">
                                <?php echo $row_category['category_name']; ?>
                            </a>
                        </h3>
                        <div class="form-group col-md-12 p-0 m-0">
                            <select name="product_id" class="form-control form-select text-3 h-auto py-2 text-black font-weight-bold select_product_price" data-counter="<?php echo $row_category['category_id']; ?>">
                                <?php $buttom_price = 0;
                                $buttom_price_old = 0;
                                $counter = 0;
                                $product_id = ''; ?>
                                <?php foreach ($products as $key => $row_product) : ?>
                                    <?php if (($row_category['category_id'] == $row_product['category_id']) && ($row_product['product_price'] != 0.00) && ($row_product['product_name'] != NULL)) : ?>
                                        <?php if ($counter == 0) {
                                            $buttom_price_old = $row_product['product_price_old'];
                                            $product_id = $row_product['id'];
                                            $product_first_url = 'product/'.$slug->url($row_category['category_name']).'/'.$slug->url($row_product['product_name']).'/'. $row_product['id']; 
                                        } ?>
                                        <?php $buttom_price = $row_product['product_price']; ?>
                                        <option value="<?php echo $row_product['id']; ?>" data-product-price-old="<?php echo $row_product['product_price_old']; ?>" data-product-thumbnail="<?php echo $row_product['thumbnail']; ?>" data-product-category-id="<?php echo $row_product['category_id']; ?>" data-product-id="<?php echo $row_product['id']; ?>" data-url="<?php echo 'product/'.$slug->url($row_category['category_name']).'/'.$slug->url($row_product['product_name']).'/'. $row_product['id']; ?>" data-product-name="<?php echo $row_category['category_name'].' '.$row_product['product_name'];?>">
                                            <?php echo $row_product['product_name']; ?> <?php echo $row_product['product_price']; ?> <?php echo $this->session->userdata('currency_icon'); ?>
                                        </option>
                                        <?php $counter = $counter + 1; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="price text-bold mt-3 d-flex justify-content-between">
                            <del class="text-3" id="select_product_price<?php echo $row_category['category_id']; ?>"><?php echo $buttom_price_old !== "0.00" && $buttom_price_old != 0 ? $buttom_price_old : ''; ?></del>
                            <a href="<?php echo $product_first_url; ?>" class="product_link<?php echo $row_category['category_id']; ?>">
                                <i class="icon-link icons float-end product_tooltip<?php echo $row_category['category_id']; ?>" style="font-size: initial;" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="left" data-bs-original-title="<?php echo $row_category['category_name']; ?>"></i>
                            </a>
                        </div>
                        <div class="mt-0">
                            <p><?php echo $row_category['short_description']; ?></p>
                            <p><?php echo $row_category['description']; ?></p>
                        </div>
                        <div class=" d-none">
                            <strong class="text-2 text-color-dark">
                                <?php $progress = rand(4, 13); ?>
                                <p class="appear-animation animated flash appear-animation-visible" data-appear-animation="flash" data-appear-animation-delay="0" data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms;"><?php echo $this->lang->line('shop_product_availability'); ?> <b><?php echo $progress; ?></b></p>
                            </strong>
                            <div class="progress progress-border-radius mb-2" style="margin-top:-20px; background:#333">
                                <div class="progress-bar progress-bar-navy" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress; ?>%; background:#ffc108">
                                    <span class="sr-only" style="background:#ffc108"><?php echo $progress; ?>% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn w-100 btn-dark btn-modern text-uppercase text-5 bg-color-hover-primary border-color-hover-primary add-to-basket-button" data-id=""><?php echo $this->lang->line('shop_add_to_cart'); ?></button>
                        </div>
                    </div><!-- Product-content End -->
                    <?php echo form_close(); ?>
                </div>
                <div class="col-lg-12 mt-1 mb-1">
                    <hr>
                </div>
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
<!--==============================
 Cart Area End
==============================-->