<?php
$footer_logo = $this->frontend_model->get_frontend_general_settings('footer_logo');
$social = $this->frontend_model->get_frontend_general_settings('social_links');
$links = json_decode($social);
?>
    <hr>
    <!-- Footer Start -->
        <footer class="footer-area">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="index.html"><img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/img/logo/dhs_logo.png" alt="DHS"></a>
                                </div>
 <p>THE DAYADARA HIGH SCHOOL was established in 1959 by The Dayadara Educational Society. It is located in the rural area of the BHARUCH district of Gujarat. Initially, We started school only with one class (8th Standard).</p>
                                                            <div class="footer-social">
                                    <ul>
                                        <li><a href="<?php echo $facebook; ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>information</h3>
                                <ul>
                                    <li><a href="<?php echo site_url('home/event'); ?>">Event</a></li>
                                    <li><a href="<?php echo site_url('home/noticeboard'); ?>">Noticeboard</a></li>
                                    <li><a href="<?php echo site_url('home/post'); ?>">School Post</a></li>
                                    <li><a href="<?php echo site_url('home/about'); ?>">About</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="<?php echo site_url('home/addmission'); ?>">addmission</a></li>
                                    <li><a href="<?php echo site_url('home/teachers'); ?>">teachers &amp; faculty</a></li>
                                    <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                                    <li><a href="#">teams &amp; conditions</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>get in touch</h3>
                                <p><?php echo $this->frontend_model->get_frontend_general_settings('address'); ?></p>
                                <p><?php echo $this->frontend_model->get_frontend_general_settings('phone'); ?></p>
                                <p><?php echo $this->frontend_model->get_frontend_general_settings('email'); ?><br><a href="http://dhs.ac.in">dhs.ac.in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <a href="#" target="_blank">The Dayadara Educational Society</a> 1959 - <?php echo date('Y'); ?>. Powered by <a href="#">360 Educastion System</a>. Develpoed by <a href="http://sefion.com">Sefion IT Services</a></p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->