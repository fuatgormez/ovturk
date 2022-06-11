<section class="content-header">
	<div class="content-header-left">
		<h1>Edit How We Works</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>backend/admin/how_we_works" class="btn btn-primary btn-sm">View All</a>
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
			<?php if($this->session->flashdata('success')) :?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
			<?php endif;?>
			<?php echo form_open_multipart(base_url().'backend/admin/how_we_works/edit/'.$how_we_works['id'],array('class' => 'form-horizontal'));?>
				<div class="box box-info">
					<div class="box-body">						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $how_we_works['name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Content *</label>
							<div class="col-sm-8">
								<textarea class="form-control editor" name="content" style="height:140px;"><?php echo $how_we_works['content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Icon *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="icon" value="<?php echo $how_we_works['icon']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px;">
								<img src="<?php echo base_url(); ?>public/uploads/how_we_works/<?php echo $how_we_works['photo']; ?>" alt="How We Works Photo" style="width:200px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
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