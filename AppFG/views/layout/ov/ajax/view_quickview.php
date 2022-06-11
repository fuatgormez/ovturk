<div class="shop dialog dialog-lg fadeIn animated" style="animation-duration: 300ms;">
    <div class="row">
        <div class="col-lg-6">
            <div class="thumb-gallery-wrapper">
                <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                    <?php foreach ($category_photos as $category_photo) : ?>
                        <?php if ($category_id == $category_photo['product_category_id']) : ?>
                            <div class="product-image">
                                <img alt="" class="img-fluid" src="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>" data-zoom-image="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                    <?php foreach ($category_photos as $category_photo) : ?>
                        <?php if ($category_id == $category_photo['product_category_id']) : ?>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="<?php echo base_url(); ?>public/uploads/product_category_photos/<?php echo $category_photo['photo']; ?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="summary entry-summary position-relative">
                <h1 class="font-weight-bold text-7 mb-0"><?php echo $category['category_name']; ?></h1>
                <p class="text-3-5 mb-3"><?php echo $category['short_description']; ?></p>
                <p class="text-3-5 mb-3"><?php echo $category['description']; ?></p>

                <strong class="text-2 text-color-dark">
                <?php $progress = rand(4, 13); ?>
                    <p class="appear-animation animated flash appear-animation-visible" data-appear-animation="flash" data-appear-animation-delay="0" data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms;">Beeil Dich! Nur noch <b><?php echo $progress; ?></b> Gutscheine verfügbar.</p>
                </strong>

                <div class="progress progress-border-radius mb-2" style="margin-top:-20px; background:#333">
                    <div class="progress-bar progress-bar-navy" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress; ?>%; background:#ffc108">
                        <span class="sr-only" style="background:#ffc108"><?php echo $progress; ?>% Complete</span>
                    </div>
                </div>

                <table class="table table-borderless" style="max-width: 500px;">
                    <tbody>
                        <tr>
                            <td class="px-0 py-2">
                                <div class="custom-select-1">
                                    <select name="product_id" class="form-control form-select text-3 h-auto py-2 bg-primary text-black select_product_price" data-counter="<?php echo $category_id; ?>">
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
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="price mb-4 justify-content-between">
                    <del class="text-black p-1" id="select_product_price<?php echo $category_id; ?>"><?php echo $buttom_price_old !== "0.00" && $buttom_price_old != 0 ? $buttom_price_old : ''; ?></del>
                    <a href="<?php echo base_url('shop/product/detail/' . $product_id); ?>" class="product_link<?php echo $category_id; ?>" title="Product Detail"><i class="icon-link icons" style="font-size: initial;"></i></a>
                </div>
                <button class="btn w-100 btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary add-to-basket-button" data-id=""><i class="d-icon-bag"></i> In den Warenkorb</button>
            </div>


        </div>
        <hr>
        <iframe src="<?php echo base_url('testimonial/popup_testimonial'); ?>" height="500px"></iframe>




    </div>
</div>


<script src="<?php echo base_url(); ?>public/layout/assets/js/main.js?v=<?php echo uniqid(); ?>"></script>
<script src="<?php echo base_url(); ?>public/layout/assets/js/shop.js?v=<?php echo uniqid(); ?>"></script>