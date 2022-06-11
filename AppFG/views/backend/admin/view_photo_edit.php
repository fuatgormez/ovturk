<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Photo</h1>
	</div>
	<div class="content-header-right">
		<a href="photo.php" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'backend/admin/photo/edit/'.$photo['photo_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Existing Photo</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <img src="<?php echo base_url(); ?>public/uploads/gallery/<?php echo $photo['photo_name']; ?>" class="existing-photo" style="width:300px;">
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload Photo Type <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<select class="form-control" name="tag">
									<option value="normal" <?php echo $photo['tag'] === 'normal' ? 'selected' : '' ?>>Normal</option>
									<option value="wedding" <?php echo $photo['tag'] === 'wedding' ? 'selected' : '' ?>>Wedding</option>
									<option value="products" <?php echo $photo['tag'] === 'products' ? 'selected' : '' ?>>Products</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Favorite? <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<select class="form-control" name="favorite">
									<option value="0" <?php echo $photo['favorite'] == 0 ? 'selected' : '' ?>>Unfavorite</option>
									<option value="1" <?php echo $photo['favorite'] == 1 ? 'selected' : '' ?>>Favorite</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload New Photo <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="photo"> (Only jpg, jpeg, gif and png are allowed 600x400px)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</section>