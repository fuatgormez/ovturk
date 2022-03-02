<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_search']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $description; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Event-Area Start-->
<div class="event-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="table-responsive">
                    <h3 align="center">Codeigniter Shopping Cart with Ajax JQuery</h3><br />
                    <?php
                    foreach($product as $row)
                    {
                        echo '
                            <div class="col-md-4">
                             <h4>'.$row['product_name'].'</h4>
                             <h3 class="text-danger">$'.$row['product_price'].'</h3>
                             <textarea class="add_cart"  id="item_comment">aaa</textarea>
                             <button type="button" name="add_cart" class="btn btn-success add_cart" data-productid="'.$row['product_id'].'" />Add to Cart</button>
                            </div>
                            ';
                    }
                    ?>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div id="cart_details">
                    <h3 align="center">Cart is Empty</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Event-Area End -->