<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'backend/admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Product Type</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url('backend/shop/product/product_type'); ?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php
			if($this->session->flashdata('error')) {
				?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
				<?php
			}
			if($this->session->flashdata('success')) {
				?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
				<?php
			}
			?>

			<?php echo form_open_multipart(base_url().'backend/shop/product/product_add_type',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Product Type Name <span>*</span></label>
                            <div class="col-sm-6">
                                <input type="text" autocomplete="on" class="form-control" name="product_type" required>
                            </div>
                        </div>

                        <!-- Status & Row -->
                        <h3 class="seo-info">Status & Row</h3>
                        <div class="form-group">

                            <label for="" class="col-sm-2 control-label">Row</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="row">
                            </div>
                        </div>
                        <!-- Status & Row End -->

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>