<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 background-image " data-vs-img="<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>" data-overlay="primary3" data-opacity="7">
    <div class="container">
        <div class="breadcumb-content py-100 py-lg-140">
            <h1 class="breadcumb-title title1 text-white mb-0"><?php echo $service['name']; ?></h1>
            <ul class="bg-white text-primary3">
                <li><a href="index.html">Startseite </a></li>
                <li class="active"><?php echo $service['name']; ?></li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Breadcumb end
============================== -->





<!--==============================
Service Details
============================== -->

<section class="vs-service-wrapper service-details-layout1 pt-60 pt-lg-130 pb-30 pb-lg-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="widget">
                    <div class="service-details">
                    <div class="service-img mb-30">
                        <img src="<?php echo base_url(); ?>public/uploads/service_photos/<?php echo $service['photo']; ?>" alt="<?php echo $service['name']; ?>">
                    </div>
                    <h2 class="service-title heading3"><?php echo $service['name']; ?></h2>
                    <p class="service-text"><?php echo $service['description']; ?></p>


                    <div class="row">
                        <?php foreach ($service_photo as $row_service_photo): ?>
                        <div class="col-md-6">
                            <div class="img-box mb-30">
                                <img src="<?php echo base_url(); ?>/public/uploads/service_photos/<?php echo $row_service_photo['photo']; ?>" alt="<?php echo $service['name']; ?>" class="w-100">
                            </div>
                        </div>
                    <?php endforeach;?>
                    </div>

                    <?php echo form_open(base_url() . 'service/send_email', array('class' => '')); ?>
                    <div class="sidebar-contact-form ">
                        <h3 class="form-title border-primary"><?php echo $setting['sidebar_service_heading_quick_contact']; ?></h3>
                        <?php
                        if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        }
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        }
                        ?>
                        <input type="hidden" name="service" value="<?php echo $service['name']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('service_form_name'); ?>" name="name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="<?php echo $this->lang->line('service_form_email'); ?>"
                                   name="email">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('service_form_phone'); ?>"
                                   name="phone">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="<?php echo $this->lang->line('service_form_message'); ?>"
                                      name="message"></textarea>
                            <i class="fal fa-pencil-alt"></i>
                        </div>
                        <div class="form-group pt-10">
                            <button type="submit" class="vs-btn style3 icon-none w-100" name="form_service"><?php echo $this->lang->line('service_form_send_button'); ?></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar pt-10 pt-lg-0">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Leistungen</h3>
                        <ul>
                            <?php foreach ($services as $row):?>
                                <li>
                                    <a href="<?php echo base_url(); ?>service/<?php echo $row['id']; ?>/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a>
                                    <span><?php echo $row['row']; ?></span>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!--==============================
Service Details End
============================== -->