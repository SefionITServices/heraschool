<?php
$footer_logo = $this->frontend_model->get_frontend_general_settings('footer_logo');
$social = $this->frontend_model->get_frontend_general_settings('social_links');
$links = json_decode($social);
?>
    <!-- START FOOTER -->
        <section class="footer_area section-padding">
            <div class="container">
                <div class="row">           
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single_footer">
                            <img style="max-height: 90px; max-width: 90px;" src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/logo/dhs_logo.png" alt="DHS logo">
                            <p>The Dayadara higher secondary school.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single_footer">
                            <h4>Information</h4>
                            <ul class="link_mright">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="<?php echo site_url('home/teachers'); ?>">teacher info</a></li>
                                <li><a href="<?php echo site_url('home/contact'); ?>">Contact info</a></li>
                                <li><a href="<?php echo site_url('home/about'); ?>">about</a></li>
                            </ul>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single_footer">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="<?php echo site_url('home/gallery'); ?>">Gallery</a></li>
                                <li><a href="<?php echo site_url('home/teachers'); ?>">Events</a></li>
                                <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                                <li><a href="<?php echo site_url('home/about'); ?>">About</a></li>
                            </ul>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single_footer">
                            <h4>Latest news</h4>
                            <p></p>
                           <?php echo $news; ?>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->  
                <div class="row footer_bottom_mtop">                    
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="footer_copyright"><font color="#e31e24">The Dayadara Educational Society</font> &copy; 1959 - <?php echo date('Y') ?> | All Rights Reserved. Powered by <a href="http://360education.net">360 Education System</a>. Developed by <a href="http://www.sefion.com">Sefion IT Services</a></p>        
                    </div><!--- END COL --> 
                </div><!--- END ROW --> 
            </div><!--- END CONTAINER -->   
        </section>
        <!-- END FOOTER -->
