<!--==============================
    page-header
============================== -->
<div class="page-header" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_shop']; ?>)">
    <h1 class="page-title font-weight-bold text-capitalize ls-l"></h1>
</div>
<!--==============================
page-header end
============================== -->

<main class="main checkout">
    <div class="page-content pt-7 pb-10 mb-10">
        <div class="container mt-7">
            <div class="card accordion">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                    <div class="alert alert-danger alert-dark alert-round alert-inline">
                        <h4 class="alert-title"><?php echo $this->session->flashdata('error'); ?></h4>
                        <button type="button" class="btn btn-link btn-close">
                            <i class="d-icon-times"></i>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Hurraa !</h1>

                    <div class="alert alert-success text-center">
                        <h3><a href="<?php echo base_url('shop'); ?>">Vielen Dank für Ihre Bestellung</a></h3>
                        <strong class="text-black"><?php echo $success_message; ?></strong>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>