<section class="content-header">
	<div class="content-header-left">
		<h1><a href="<?php echo base_url('backend/admin/photo');?>">View Photos</a> | <a href="<?php echo base_url('backend/admin/photo/index/products');?>">Products</a> | <a href="<?php echo base_url('backend/admin/photo/index/wedding');?>">Wedding</a></h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>backend/admin/photo/add" class="btn btn-primary btn-sm">Add New</a>
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
			        <th>SL</th>
			        <th>Photo</th>
			        <th>Tag</th>
			        <th>Favorite</th>
			        <th>Action</th>
			    </tr>
			</thead>
            <tbody>
            	<?php foreach ($photo as $key => $row) : ?>
	                <tr>
	                    <td><?php echo $key+1; ?></td>
	                    <td>
	                    	<img src="<?php echo base_url(); ?>public/uploads/gallery/<?php echo $row['photo_name']; ?>" width="140">
	                    </td>
						<td><?php echo $row['tag'];?></td>
						<td><i class="fa fa-heart favorite" <?php echo $row['favorite'] == 1 ? 'style="color:coral"' : 'style="color:black"';?> data-id="<?php echo $row['photo_id'];?>" data-fav="<?php echo $row['favorite'];?>"></i></td>
	                    <td>
	                        <a href="<?php echo base_url(); ?>backend/admin/photo/edit/<?php echo $row['photo_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                            <a href="<?php echo base_url(); ?>backend/admin/photo/delete/<?php echo $row['photo_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a> 
	                    </td>
	                </tr>
	            <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div> 
</section>