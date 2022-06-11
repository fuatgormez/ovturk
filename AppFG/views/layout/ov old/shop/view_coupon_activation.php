<!--==============================
     Shop Area 
  ==============================-->
<section class="vs-product-wrapper product-details-layout1 pt-60 pt-lg-60 pb-30 pb-lg-90">
    <div class="container">
        <div class="row gutters-20">
            <div class="col-md-4 offset-md-4 justify-content-center text-center">
                <h5>Wie kann ich meine Auge fotografieren lassen?</h5>
                <ul class="mb-4">
                    <li>1. Online Produkt bestellen</li>
                    <li>2. Gutschein einlösen und Iris fortografieren</br>
                        ( Ein Iris-Shooting ist nur mit einem online gebuchten Gutschein möglich)</li>
                </ul>
                <h3>Das ist dein Geschenk</h3>
                <img src="<?php echo base_url('public/layout/iris/img/shop/upgrade/current-item.jpeg'); ?>">
                <p>20x30 cm Poster mit einer Iris<br>
                    <small>Versandkosten nur 2.90 €</small>
                </p>
                <div style="margin-top:-20px;">
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <input type="hidden" name="product_id" value="220">
                    <button class="btn btn-primary add-to-basket-button-upgrade">Poster 0.00€</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="row gutters-20 mt-60">
            <div class="col-md-12 text-center " style="background-color: #333;padding:25px;margin-bottom:50px">
                <h4 style="color:#fff !important;">Auf Wunsch ist es möglich, dein Geschenk gegen einen Aufpreis zu ändern.<br /><br />
                    Hinweis: Das ist eine einmalige Aktion, später ist es nicht mehr möglich, dein Produkt zu ändern.
                </h4>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo base_url('public/layout/iris/img/shop/upgrade/versetzt-item.jpeg'); ?>">
                <p>20x30 cm Paar Versetzt<br>
                    <small>inkl. Versand</small>
                </p>
                <div style="margin-top:-20px;">
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <input type="hidden" name="product_id" value="221">
                    <button class="btn btn-primary add-to-basket-button-upgrade">Versetz 15€</button>
                    <?php echo form_close(); ?>
                </div>
                <hr>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo base_url('public/layout/iris/img/shop/upgrade/explosion-item.jpeg'); ?>">
                <p>20x30 cm Paar Explosion<br>
                    <small>inkl. Versand</small>
                </p>
                <div style="margin-top:-20px;">
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <input type="hidden" name="product_id" value="222">
                    <button class="btn btn-primary add-to-basket-button-upgrade">Explosion 20€</button>
                    <?php echo form_close(); ?>
                </div>
                <hr>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo base_url('public/layout/iris/img/shop/upgrade/family-explosion-item.jpeg'); ?>">
                <p>20x30 cm Familie Explosion<br>
                    <small>inkl. Versand</small>
                </p>
                <div class="justify-content-center" style="margin-top:-20px; display:flex; ">
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <input type="hidden" name="product_id" value="223">
                    <button class="btn btn-primary add-to-basket-button-upgrade mr-10">3 Pers 25€</button>
                    <?php echo form_close(); ?>
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <input type="hidden" name="product_id" value="224">
                    <button class="btn btn-primary add-to-basket-button-upgrade mr-10">4 Pers 30€</button>
                    <?php echo form_close(); ?>
                    <?php echo form_open(base_url('shop/cart/add'), array('class' => 'form-horizontal', 'name' => 'basket')); ?>
                    <input type="hidden" name="product_id" value="225">
                    <button class="btn btn-primary add-to-basket-button-upgrade">5 Pers 35€</button>
                    <?php echo form_close(); ?>
                </div>
                <hr>
            </div>
            <div class="col-md-12 text-center pt-5">
                <h3>Deine store ist <span class="text-success"><?php echo $this->session->userdata('store_name'); ?></span></h3>
                <p><a href="<?php echo base_url('select_land/activation'); ?>">Store wechseln</a></p>
            </div>
        </div>
    </div>
</section>