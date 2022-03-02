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
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="vs-work-process pt-1">
                    <div class="process-body justify-content-center">
                        <div class="process-content blog-single-layout1">
                            <?php echo $setting['frontend_shop_body']; ?>
                            <?php if(base_url() === 'https://www.irispicture.com/' || base_url() === 'https://www.youririsfoto.com/' || base_url() === 'https://www.youririsfoto.nl/' || base_url() === 'https://www.youririsfoto.be/'):?>
                                <?php echo $this->lang->line('shop_body_slogan2');?>
                                <?php echo $this->lang->line('shop_body_slogan');?>
                            <?php endif;?>

                            <?php if ($setting['frontend_shop_countdown_status'] === 'Show') : ?>
                                <hr>
                                <div class="powr-countdown-timer" id="<?php echo $setting['frontend_shop_countdown_id']; ?>"></div>
                                <script src="<?php echo $setting['frontend_shop_countdown_link']; ?>"></script>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gutters-40 -->
        <div class="row gutters-40 pt-50">
            <?php foreach ($product_categories as $key => $row_category) : ?>
                <div class="col-lg-4">
                    <div class="product-img px-1 vs-carousel slick-dots-white" id="productSlide" data-dots-color="primary2" data-slidetoshow="1" data-dots="true" data-mldots="true" data-xldots="true" data-lgdots="true" data-mddots="true" data-smdots="true" data-xsdots="true">
                        <?php foreach ($product_category_photo as $category_photo) : ?>
                            <?php if ($row_category['category_id'] == $category_photo['product_category_id']) : ?>
                                <div>
                                    <img src="<?php echo base_url('public/uploads/product_category_photos/'.$category_photo['photo']); ?>" class="w-100 thumbnail<?php echo $row_category['category_id']; ?>">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0">
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <div class="product-content">
                        <h3 class="product-title heading4 mb-2">
                            <?php echo $row_category['category_name']; ?>
                        </h3>
                        <div class="form-group col-md-12 p-0 m-0">
                            <select name="product_id" class="select_product_price" data-counter="<?php echo $row_category['category_id']; ?>">
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
                        <div class="price text-bold mt-0">
                            <del class="text-xs text-danger" id="select_product_price<?php echo $row_category['category_id']; ?>"><?php echo $buttom_price_old !== "0.00" && $buttom_price_old != 0 ? $buttom_price_old : ''; ?></del>
                            <a href="<?php echo $product_first_url; ?>" class="product_link<?php echo $row_category['category_id']; ?>">
                                <i class="far fa-link float-end product_tooltip<?php echo $row_category['category_id']; ?>" style="font-size: initial;"  data-tooltip-location="left" data-tooltip="<?php echo $row_category['category_name']; ?>"></i>
                            </a>
                            <a href="<?php echo $product_first_url; ?>" class="product_link<?php echo $row_category['category_id']; ?>" style="float: right; font-size:12px;" title="Product Detail"><i class="far fa-link"></i></a>
                        </div>
                        <div class="mt-0">
                            <p><?php echo $row_category['short_description']; ?></p>
                            <p><?php echo $row_category['description']; ?></p>
                        </div>
                        <div>
                            <button class="vs-btn btn-block text-center style3 icon-none rounded-0 mt-0 add-to-basket-button" data-id=""><?php echo $this->lang->line('shop_add_to_cart'); ?>
                            </button>
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

        <div class="col-lg-12 mt-5 mb-5">
            <span class="heading6" data-tooltip="auf Keilrahmen gespannt.">#Leinwand</span>
            <span class="heading6" data-tooltip="echtes Massivglas, 10mm dick">#Glas</span>
            <span class="heading6" data-tooltip="mit hoher Auflösung als Jpg und Tiff (26 Mio. Pixel)">#Digitale Datei</span>
            <span class="heading6" data-tooltip="15mm dickes Acrylglas auf Echtholzaufsteller mit Lasergravur">#Acryl Holzaufsteller</span>
            <span class="heading6" data-tooltip="Canis Halskette
                    Durchmesser Anhänger 2 cm, Kettenlänge 45cm,
                    Material: Farbe Silber = Edelstahl / Farbe Gold = Messing / Farbe Rosegold = Messing, rose vergoldet">#Schmuck</span>
            <span class="heading6" data-tooltip="Durchmesser Anhänger 2 cm, Kettenlänge 18cm,
Material: Farbe Silber = Edelstahl / Farbe Rosegold = Messing, rose vergoldet">#Taurus Armband</span>
            <span class="heading6" data-tooltip="Länge Anhänger 4cm, Kettenlänge 48cm,
Material: Farbe Silber = Edelstahl / Farbe Gold = Messing / Farbe Rosegold = Messing, rose vergoldet
">#Ursa Halskette</span>
            <span class="heading6" data-tooltip="Durchmesser Anhänger 2cm, Durchmesser Armband ca. 6-8 cm (flexibel einstellbar),
Material: Farbe Silber = Edelstahl / Farbe Gold = Messing / Farbe Rosegold = Messing, rose vergoldet">#Alya Armband</span>
            <span class="heading6" data-tooltip="Durchmesser Anhänger 2cm, Länge Armband 18cm,
Material: Farbe Silber = Edelstahl / Farbe Gold = Messing / Farbe Rosegold = Messing, rose vergoldet">#Lyra Armband</span>
            <span class="heading6" data-tooltip="Durchmesser Anhänger 2 cm
Material: Farbe Silber = Edelstahl / Farbe Gold = Messing / Farbe Rosegold = Messing, rose vergoldet">#Ascella Ohrring</span>
            <span class="heading6" data-tooltip="Anhänger Länge 4,5 cm Breite 2,5 cm, Kettenlänge 45cm, Material: Farbe Silber = Edelstahl
">#Herrenkette</span>
        </div>

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