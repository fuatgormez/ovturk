<!--==============================
    page-header
============================== -->
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(<?php echo base_url('public/uploads/' . $setting['banner_contact']); ?>);">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-9 font-weight-bold">İletişim</h1>
				<span class="sub-title">Izmir PLUS REKLAMCILIK</span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb breadcrumb-light d-block text-center">
					<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
					<li class="active">İletişim</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--==============================
page-header end
============================== -->



<!--==============================
Contact Form Area
============================== -->

<section class="contact-section mt-5 mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 col-xl-6">
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <strong><i class="far fa-thumbs-up"></i> Upps!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success">
                        <strong><i class="far fa-thumbs-up"></i> Tebrikler!</strong> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open(base_url() . 'contact/send_email', array('class' => 'contact-form input-style3')); ?>
                <div class="form-title-area mt-5 mb-5">
                    <p class="text text-md"><strong><?php echo $this->lang->line('contact_form_title_text'); ?></strong>
                    </p>
                </div>
                <div class="row gutters-10">
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_name'); ?>" name="name" required>
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_email'); ?>" name="email" required>
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_phone'); ?>" name="phone" required>
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('contact_form_subject'); ?>" name="subject" required>
                    </div>

                    <div class="form-group col-12 mb-4">
                        <textarea class="form-control" placeholder="<?php echo $this->lang->line('contact_form_message'); ?>" name="message" required></textarea>
                    </div>
                    <div class="form-group mb-0 col-12 mt-20">
                        <button type="submit" class="btn btn-block btn-dark btn-rounded" name="form_contact"><?php echo $this->lang->line('contact_form_send_button'); ?> <i class="far fa-angle-right"></i></button>
                    </div>
                </div>
                <p class="form-messages mt-20"></p>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="widget bg-white mt-50">

                    <p><?php echo $page_contact['contact_email']; ?></p>

                    <p><?php echo $page_contact['contact_phone']; ?></p>

                    <p><?php echo $page_contact['contact_address']; ?></p>
                </div>
            </div>
        </div><!-- first row end -->

    </div>
</section>

<!--==============================
Contact Form Area
============================== -->