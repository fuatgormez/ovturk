<section class="content-header">
	<div class="content-header-left">
		<h1>View Clients</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>backend/admin/client/add" class="btn btn-primary btn-sm">Add Client</a>
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

	        
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">id</th>
								<th>photo</th>
								<th>name</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($clients as $i => $row) :?>
								<tr>
									<td><?php echo $i +1; ?></td>
									<td style="width:150px;"><img src="<?php echo base_url(); ?>public/uploads/client/<?php echo $row['photo'].'?v='.sha1(time()); ?>" style="width:140px;"></td>
									<td><?php echo $row['name']; ?></td>
									<td>										
										<a href="<?php echo base_url(); ?>backend/admin/client/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="<?php echo base_url(); ?>backend/admin/client/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
									</td>
								</tr>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>