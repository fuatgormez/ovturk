<section class="content-header">
	<div class="content-header-left">
		<h1>Add Photo</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>backend/admin/photo" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($this->session->flashdata('error')) : ?>
	            <div class="callout callout-danger">
	                <p><?php echo $this->session->flashdata('error'); ?></p>
	            </div>
			<?php endif; ?>
	        <?php if($this->session->flashdata('success')) : ?>
	            <div class="callout callout-success">
	                <p><?php echo $this->session->flashdata('success'); ?></p>
	            </div>
	        <?php endif; ?>

			<?php echo form_open_multipart(base_url().'backend/admin/photo/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload Photo Type <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<select class="form-control" name="tag">
									<option value="normal">Normal</option>
									<option value="wedding">Wedding</option>
									<option value="products">Products</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Favorite? <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<select class="form-control" name="favorite">
									<option value="0">Unfavorite</option>
									<option value="1">Favorite</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload Photo (Multiple)<span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="photos[]" multiple> (Only jpg, jpeg, gif and png are allowed 600x400px)
							</div>
						</div>
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