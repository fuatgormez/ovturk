<main class="main mt-8 single-product">
    <div class="page-content mb-10 pb-6">
        <div class="container">
            <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
            <div class="product product-single row mb-8">
                <div class="col-md-6">
                    <div class="product-gallery pg-vertical">
                        <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
                            <?php foreach ($category_photos as $category_photo) : ?>
                                <?php if ($category_id == $category_photo['product_category_id']) : ?>
                                    <figure class="product-image">
                                        <img src="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>" class="w-100 thumbnail<?php echo $category_id; ?>" data-zoom-image="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>" width="800" height="900">
                                    </figure>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="product-thumbs-wrap">
                            <div class="product-thumbs">
                                <?php foreach ($category_photos as $category_photo) : ?>
                                    <?php if ($category_id == $category_photo['product_category_id']) : ?>
                                        <div class="product-thumb">
                                            <img src="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>" class="w-100 thumbnail<?php echo $category_id; ?>" data-zoom-image="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>" width="109" height="122">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                            <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details">
                        <h1 class="product-name"><?php echo $category['category_name']; ?></h1>
                        <p class="product-short-desc"> <?php echo $category['short_description']; ?></p>
                        <p class="product-short-desc"> <?php echo $category['description']; ?></p>

                        <div class="hurryup-bar mb-6">
                            <p>Beeil Dich! Nur noch <b><?php echo rand(4, 13); ?></b> Gutscheine verfügbar.</p>
                            <span class="bar">
                                <span class="stock-bar" style="width: 50%;"></span>
                            </span>
                        </div>


                        <div class="product-form product-variations product-color">
                            <div class="select-box">
                                <select name="product_id" class="select_product_price block" data-counter="<?php echo $category_id;?>">
                                    <?php $buttom_price = 0;
                                    $buttom_price_old = 0;
                                    $counter = 0;
                                    $product_id = ''; ?>
                                    <?php foreach ($products as $key => $row_product) : ?>
                                        <?php if ($counter == 0) {
                                            $buttom_price_old = $row_product['product_price_old'];
                                            $product_id = $row_product['id'];
                                        } ?>
                                        <?php $buttom_price = $row_product['product_price']; ?>
                                        <option value="<?php echo $row_product['id']; ?>" data-product-price-old="<?php echo $row_product['product_price_old']; ?>" data-product-thumbnail="<?php echo $row_product['thumbnail']; ?>" data-product-category-id="<?php echo $row_product['category_id']; ?>" data-product-id="<?php echo $row_product['id']; ?>">
                                            <?php echo $row_product['product_name']; ?> <?php echo $row_product['product_price']; ?> <?php echo $this->session->userdata('currency_icon'); ?>
                                        </option>
                                        <?php $counter = $counter + 1; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <hr class="product-divider">

                        <div class="product-price">
                            <del class="price" id="select_product_price<?php echo $category_id; ?>"><?php echo $buttom_price_old !== "0.00" && $buttom_price_old != 0 ? $buttom_price_old : ''; ?></del>
                            <a href="<?php echo base_url('shop/product/detail/' . $product_id); ?>" class="product_link<?php echo $category_id; ?>" style="float: right; font-size:12px;" title="Product Detail"><i class="far fa-link"></i></a>
                        </div>

                        <div class="product-form product-qty">
                            <div class="product-form-group">
                                <button class="btn-product btn-block btn-cart text-normal ls-normal font-weight-semi-bold add-to-basket-button" data-id=""><i class="d-icon-bag"></i> In den Warenkorb</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>

            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-08466c52-c687-4b69-b253-926cb3912c6f"></div>

        </div>
    </div>

</main>
<!-- End Main -->

<!-- Main JS File -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/main.js"></script>


<!-- Main Js File -->
<script src="<?php echo base_url(); ?>public/layout/assets/js/main.js?v=<?php echo uniqid(); ?>"></script>
<script src="<?php echo base_url(); ?>public/layout/assets/js/shop.js?v=<?php echo uniqid(); ?>"></script>