<div role="main" class="main shop pb-4">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
					<li class="text-transform-none me-2">
						<a href="<?php echo base_url('shop/cart'); ?>" class="text-decoration-none text-color-grey-lighten"><?php echo $this->lang->line('shop_header_nav_shopping_cart');?></a>
					</li>
					<li class="text-transform-none text-color-grey-lighten me-2">
						<a href="<?php echo base_url('shop/checkout/data'); ?>" class="text-decoration-none text-color-primary text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_specify_address');?></a>
					</li>
					<li class="text-transform-none text-color-grey-lighten">
						<a href="<?php echo base_url('shop/checkout/overview'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_payment_methods');?></a>
					</li>
					<li class="text-transform-none text-color-grey-lighten">
						<a href="<?php echo base_url('shop/checkout/payment'); ?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary"><?php echo $this->lang->line('shop_header_nav_confirm');?></a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<?php if ($this->session->flashdata('error')) : ?>
					<div class="alert alert-danger">
						<p><?php echo $this->session->flashdata('error'); ?></p>
					</div>
				<?php endif; ?>
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success">
						<p><?php echo $this->session->flashdata('success'); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<?php echo form_open_multipart(base_url() . 'shop/checkout/add', array('class' => 'needs-validation', 'id' => 'checkout-submit', 'role' => 'form')); ?>
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<h2 class="text-color-dark font-weight-bold text-5-5 mb-3">
					<?php echo $this->lang->line('payment_form_title_billing'); ?> 
					<label class="custom-checkbox-1" data-bs-toggle="collapse" data-bs-target=".shipping-field-wrapper"><?php echo $this->lang->line('payment_form_title_ship'); ?></label>
				</h2>


				<div class="row">
					<div class="form-group col-md-6">
						<label class="form-label" for="billingFirstName"><?php echo $this->lang->line('payment_form_firstname'); ?> <span class="text-color-danger">*</span></label>
						<input type="text" class="form-control h-auto py-2" name="billingFirstName" id="billingFirstName" value="<?php echo $this->session->userdata('keep_input_value')['billingFirstName'] ?? '';?>" required />
					</div>
					<div class="form-group col-md-6">
						<label class="form-label" for="billingLastName"><?php echo $this->lang->line('payment_form_lastname'); ?> <span class="text-color-danger">*</span></label>
						<input type="text" class="form-control h-auto py-2" name="billingLastName" id="billingLastName" value="<?php echo $this->session->userdata('keep_input_value')['billingLastName'] ?? '';?>" required />
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-8">
						<label class="form-label" for="billingStreet"><?php echo $this->lang->line('payment_form_street'); ?> <span class="text-color-danger">*</span></label>
						<input type="text" class="form-control h-auto py-2" name="billingStreet" id="billingStreet" value="<?php echo $this->session->userdata('keep_input_value')['billingStreet'] ?? '';?>" required />
					</div>
					<div class="form-group col-md-4">
						<label class="form-label" for="billingStreetNo"><?php echo $this->lang->line('payment_form_street_no'); ?> <span class="text-color-danger">*</span></label>
						<input type="text" class="form-control h-auto py-2" name="billingStreetNo" id="billingStreetNo" value="<?php echo $this->session->userdata('keep_input_value')['billingStreetNo'] ?? '';?>" required />
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label class="form-label" for="billingPostCode"><?php echo $this->lang->line('payment_form_postcode'); ?> <span class="text-color-danger">*</span></label>
						<input type="text" class="form-control h-auto py-2" name="billingPostCode" id="billingPostCode" value="<?php echo $this->session->userdata('keep_input_value')['billingPostCode'] ?? '';?>" required />
					</div>
					<div class="form-group col-md-6">
						<label class="form-label" for="billingCity"><?php echo $this->lang->line('payment_form_city'); ?> <span class="text-color-danger">*</span></label>
						<input type="text" class="form-control h-auto py-2" name="billingCity" id="billingCity" value="<?php echo $this->session->userdata('keep_input_value')['billingCity'] ?? '';?>" required />
					</div>
				</div>

				<div class="row">
					<div class="form-group col">
						<label class="form-label" for="billingCountry">Land</label>
						<select name="billingCountry" id="billingCountry" class="form-select form-control">
							<option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col">
						<label class="form-label" for="billingEmail"><?php echo $this->lang->line('payment_form_email'); ?></label>
						<input type="text" class="form-control h-auto py-2" name="billingEmail" id="billingEmail" value="<?php echo $this->session->userdata('keep_input_value')['billingEmail'] ?? '';?>" required />
					</div>
				</div>

				<div class="row">
					<div class="form-group col">
						<label class="form-label" for="billingPhone"><?php echo $this->lang->line('payment_form_phone'); ?></label>
						<input type="text" class="form-control h-auto py-2" name="billingPhone" id="billingPhone" value="<?php echo $this->session->userdata('keep_input_value')['billingPhone'] ?? '';?>" required />
					</div>
				</div>

				<div class="row">
					<div class="form-group col">
						<label class="form-label" for="billingStoreId">Store Name <?php echo $this->session->userdata('store_name');?></label>
						<select name="billingStoreId" id="billingStoreId" class="form-select form-control">
							<?php foreach($stores as $row_store):?>
								<option value="<?php echo $row_store['id'];?>" <?php echo $this->session->userdata('store_name') === $row_store['store_name'] ? 'selected' : '' ?>><?php echo $row_store['store_name']?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col">
						<label class="form-label" for="billingComment"><?php echo $this->lang->line('payment_form_comment'); ?></label>
						<textarea class="form-control h-auto py-2" name="billingComment" id="billingComment" rows="5" placeholder="<?php echo $this->lang->line('payment_form_comment'); ?>"><?php echo @$this->session->userdata['keep_input_value']['billingComment']; ?></textarea>
					</div>
				</div>
			</div>

			<!-- Ship to a differente address fields -->
			<div class="col-lg-6 mb-4 mb-lg-0">
				<div class="shipping-field-wrapper collapse">

					<h2 class="text-color-dark font-weight-bold text-5-5 mb-3">
						<span class="customerShipAnother d-none d-md-inline" href="#"><?php echo $this->lang->line('payment_form_title_ship'); ?></span>
					</h2>
					<div class="row">
						<div class="form-group col-md-6">
							<label class="form-label" for="shippingFirstName"><?php echo $this->lang->line('payment_form_firstname'); ?> <span class="text-color-danger">*</span></label>
							<input type="text" class="form-control h-auto py-2" name="shippingFirstName" id="shippingFirstName" value="" required />
						</div>
						<div class="form-group col-md-6">
							<label class="form-label" for="shippingLastName"><?php echo $this->lang->line('payment_form_lastname'); ?> <span class="text-color-danger">*</span></label>
							<input type="text" class="form-control h-auto py-2" name="shippingLastName" id="shippingLastName" value="" required />
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-8">
							<label class="form-label" for="shippingStreet"><?php echo $this->lang->line('payment_form_street'); ?> <span class="text-color-danger">*</span></label>
							<input type="text" class="form-control h-auto py-2" name="shippingStreet" id="shippingStreet" value="" required />
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="shippingStreetNo"><?php echo $this->lang->line('payment_form_street_no'); ?> <span class="text-color-danger">*</span></label>
							<input type="text" class="form-control h-auto py-2" name="shippingStreetNo" id="shippingStreetNo" value="" required />
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label class="form-label" for="shippingPostCode"><?php echo $this->lang->line('payment_form_postcode'); ?> <span class="text-color-danger">*</span></label>
							<input type="text" class="form-control h-auto py-2" name="shippingPostCode" id="shippingPostCode" value="" required />
						</div>
						<div class="form-group col-md-6">
							<label class="form-label" for="shippingCity"><?php echo $this->lang->line('payment_form_city'); ?> <span class="text-color-danger">*</span></label>
							<input type="text" class="form-control h-auto py-2" name="shippingCity" id="shippingCity" value="" required />
						</div>
					</div>


					<div class="row">
						<div class="form-group col">
							<label class="form-label" for="shippingCountry">Land</label>
							<select name="shippingCountry" id="shippingCountry" class="form-select form-control">
								<option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="form-group col">
							<label class="form-label" for="shippingEmail"><?php echo $this->lang->line('payment_form_email'); ?></label>
							<input type="text" class="form-control h-auto py-2" name="shippingEmail" id="shippingEmail" value="" required />
						</div>
					</div>

					<div class="row">
						<div class="form-group col">
							<label class="form-label" for="shippingPhone"><?php echo $this->lang->line('payment_form_phone'); ?></label>
							<input type="text" class="form-control h-auto py-2" name="shippingPhone" id="shippingPhone" value="" required />
						</div>
					</div>

					<div class="row">
						<div class="form-group col">
							<label for="shippingStoreId" class="sr-only">Store Name</label>
                            <select name="shippingStoreId" id="shippingStoreId" class="form-select form-control">
                                <?php foreach($stores as $row_store):?>
                                    <option value="<?php echo $row_store['id'];?>" <?php echo $this->session->userdata('store_name') === $row_store['store_name'] ? 'selected' : '' ?>><?php echo $row_store['store_name']?></option>
                                <?php endforeach;?>
                            </select>
						</div>
					</div>

					<div class="row">
						<div class="form-group col">
							<label class="form-label" for="shippingComment"><?php echo $this->lang->line('payment_form_comment'); ?></label>
							<textarea class="form-control h-auto py-2" name="shippingComment" id="shippingComment" rows="5" placeholder="<?php echo $this->lang->line('payment_form_comment'); ?>"><?php echo @$this->session->userdata['keep_input_value']['shippingComment']; ?></textarea>
						</div>
					</div>

				</div>
			</div>

			<div class="col-12 form-group">
				<button type="submit" name="form1" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3"><?php echo $this->lang->line('shop_next_step'); ?> <i class="far fa-long-arrow-right"></i></button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>