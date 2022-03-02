<main class="main checkout">
	<div class="page-content pt-7 pb-10 mb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/cart'); ?>">1. Warenkorb</a></h3>
			<h3 class="title title-simple title-step active"><a href="<?php echo base_url('shop/checkout/data'); ?>">2. Adress angeben</a></h3>
			<h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/payment'); ?>">3. Zahlungsmethode</a></h3>
			<h3 class="title title-simple title-step"><a href="<?php echo base_url('shop/checkout/overview'); ?>">4. Bestätigen</a></h3>
		</div>
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
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dark alert-round alert-inline">
						<h4 class="alert-title"><?php echo $this->session->flashdata('success'); ?></h4>
						<button type="button" class="btn btn-link btn-close">
							<i class="d-icon-times"></i>
						</button>
					</div>
				<?php endif; ?>
			</div>

			<?php echo form_open_multipart(base_url() . 'shop/checkout/add', array('class' => 'vs-billing-information input-style2', 'id' => 'checkout-submit')); ?>
			<div class="row">
				<!-- Billing --->
				<div class="col-lg-6 mb-6 mb-lg-0 pr-lg-4">
					<h3 class="title title-simple text-left"><?php echo $this->lang->line('payment_form_title_billing'); ?> <a class="customerShipAnother d-none d-md-inline" href="#"><?php echo $this->lang->line('payment_form_title_ship'); ?>aaa</a></h3>
					<div class="row">
						<div class="col-xs-6">
							<label><?php echo $this->lang->line('payment_form_firstname'); ?> *</label>
							<input type="text" class="form-control" name="billingFirstName" id="billingFirstName" value="<?php echo $billingFirstName; ?>" required />
						</div>
						<div class="col-xs-6">
							<label><?php echo $this->lang->line('payment_form_lastname'); ?> *</label>
							<input type="text" class="form-control" name="billingLastName" id="billingLastName" value="<?php echo $billingLastName; ?>" required />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8">
							<label for="billingStreet" class="sr-only"><?php echo $this->lang->line('payment_form_street'); ?></label>
							<input type="text" name="billingStreet" id="billingStreet" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street'); ?>*" value="<?php echo $billingStreet; ?>" required>
						</div>
						<div class="col-xs-4">
							<input type="text" name="billingStreetNo" id="billingStreetno" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street_no'); ?>*" value="<?php echo $billingStreetNo; ?>" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<label for="billingPostCode" class="sr-only"><?php echo $this->lang->line('payment_form_postcode'); ?></label>
							<input type="text" name="billingPostCode" id="billingPostCode" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_postcode'); ?>*" value="<?php echo $billingPostCode; ?>">
						</div>
						<div class="col-xs-8">
							<label for="billingCity" class="sr-only"><?php echo $this->lang->line('payment_form_city'); ?></label>
							<input type="text" name="billingCity" id="billingCity" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_city'); ?>*" value="<?php echo $billingCity; ?>">
						</div>
					</div>
					<label for="billingEmail" class="sr-only"><?php echo $this->lang->line('payment_form_email'); ?></label>
					<input type="email" name="billingEmail" id="billingEmail" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_email'); ?>*" value="<?php echo $billingEmail; ?>" required>

					<label for="billingPhone" class="sr-only"><?php echo $this->lang->line('payment_form_phone'); ?></label>
					<input type="tel" name="billingPhone" id="billingPhone" class="form-control billingPhone" placeholder="<?php echo $this->lang->line('payment_form_phone'); ?>*" value="<?php echo $billingPhone; ?>" required>

					<label for="billingCountry" class="sr-only"><?php echo $this->lang->line('payment_form_land'); ?></label>
					<div class="select-box">
						<select name="billingCountry" id="billingCountry" class="form-control">
							<option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
						</select>
					</div>

					<label for="billingStoreName" class="sr-only">Store Name</label>
					<select name="billingStoreName" id="billingStoreName" class="form-control">
						<option value="<?php if ($this->session->userdata('store_name')) {
											echo $this->session->userdata('store_name');
										} elseif ($order->store_name) {
											echo $order->store_name;
										}; ?>">Bevorzugter Standort: <?php if ($this->session->userdata('store_name')) {
																			echo $this->session->userdata('store_name');
																		} elseif ($order->store_name) {
																			echo $order->store_name;
																		}; ?></option>
					</select>
					<label for="billingComment" class="sr-only"><?php echo $this->lang->line('payment_form_comment'); ?></label>
					<textarea name="billingComment" id="billingComment" class="form-control" cols="30" rows="5" placeholder="<?php echo $this->lang->line('payment_form_comment'); ?>"><?php echo @$this->session->userdata['keep_input_value']['billingComment']; ?></textarea>
				</div>
				<!-- Billing End -->
				<!-- Shipping -->
				<div class="col-lg-6 mb-6 mb-lg-0 pr-lg-4 vs-billing-differentAddress input-style2" style="display:none">
					<h3 class="title title-simple text-left"><?php echo $this->lang->line('payment_form_title_shipping'); ?></h3>
					<div class="row">
						<div class="col-xs-6">
							<label><?php echo $this->lang->line('payment_form_firstname'); ?> *</label>
							<input type="text" class="form-control" name="shippingFirstName" id="shippingFirstName" value="<?php echo @$this->session->userdata['keep_input_value']['shippingFirstName']; ?>" />
						</div>
						<div class="col-xs-6">
							<label><?php echo $this->lang->line('payment_form_lastname'); ?> *</label>
							<input type="text" class="form-control" name="shippingLastName" id="shippingLastName" value="<?php echo @$this->session->userdata['keep_input_value']['shippingLastName']; ?>" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8">
							<label for="shippingStreet" class="sr-only"><?php echo $this->lang->line('payment_form_street'); ?></label>
							<input type="text" name="shippingStreet" id="shippingStreet" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingStreet']; ?>" >
						</div>
						<div class="col-xs-4">
							<input type="text" name="shippingStreetNo" id="shippingStreetno" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_street_no'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingStreetNo']; ?>" >
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<label for="shippingPostCode" class="sr-only"><?php echo $this->lang->line('payment_form_postcode'); ?></label>
							<input type="text" name="shippingPostCode" id="shippingPostCode" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_postcode'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['postCode']; ?>">
						</div>
						<div class="col-xs-8">
							<label for="shippingCity" class="sr-only"><?php echo $this->lang->line('payment_form_city'); ?></label>
							<input type="text" name="shippingCity" id="shippingCity" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_city'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingCity']; ?>">
						</div>
					</div>
					<label for="shippingEmail" class="sr-only"><?php echo $this->lang->line('payment_form_email'); ?></label>
					<input type="email" name="shippingEmail" id="shippingEmail" class="form-control" placeholder="<?php echo $this->lang->line('payment_form_email'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingEmail']; ?>" >

					<label for="shippingPhone" class="sr-only"><?php echo $this->lang->line('payment_form_phone'); ?></label>
					<input type="tel" name="shippingPhone" id="shippingPhone" class="form-control shippingPhone" placeholder="<?php echo $this->lang->line('payment_form_phone'); ?>*" value="<?php echo @$this->session->userdata['keep_input_value']['shippingPhone']; ?>">

					<label for="shippingCountry" class="sr-only"><?php echo $this->lang->line('payment_form_land'); ?></label>
					<div class="select-box">
						<select name="shippingCountry" id="shippingCountry" class="form-control">
							<option value="<?php echo $this->session->userdata('land_name'); ?>"><?php echo $this->session->userdata('land_name'); ?></option>
						</select>
					</div>

					<label for="shippingStoreName" class="sr-only">Store Name</label>
					<select name="shippingStoreName" id="shippingStoreName" class="form-control">
						<option value="<?php if ($this->session->userdata('store_name')) {
											echo $this->session->userdata('store_name');
										} elseif ($order->store_name) {
											echo $order->store_name;
										}; ?>">Bevorzugter Standort: <?php if ($this->session->userdata('store_name')) {
																			echo $this->session->userdata('store_name');
																		} elseif ($order->store_name) {
																			echo $order->store_name;
																		}; ?></option>
					</select>
					<label for="shippingComment" class="sr-only"><?php echo $this->lang->line('payment_form_comment'); ?></label>
					<textarea name="shippingComment" id="shippingComment" class="form-control" cols="30" rows="5" placeholder="<?php echo $this->lang->line('payment_form_comment'); ?>"><?php echo @$this->session->userdata['keep_input_value']['shippingComment']; ?></textarea>
				</div>
				<!-- Shipping End -->
				<div class="col-lg-12 mb-6 mb-lg-0 pr-lg-4">
				<button type="submit" name="form1" class="btn btn-dark btn-block btn-rounded btn-order"><?php echo $this->lang->line('shop_next_step'); ?> <i class="far fa-long-arrow-right"></i></button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</main>
<!-- End Main -->