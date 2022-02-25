
 <!-- Contact Start -->
        <div class="map-area">
            <!-- google-map-area start -->
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.419263572651!2d72.9296953153403!3d21.80272596628038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f88ce5b029b83%3A0xaad81badd8491824!2sThe%20Dayadara%20High%20School!5e0!3m2!1sen!2sin!4v1574763288475!5m2!1sen!2sin" width="100%" height="440" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <div class="contact-area pt-150 pb-140"> 
            <div class="container">     
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/img/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>address</h3>
                                    <p><?php echo $this->frontend_model->get_frontend_general_settings('address'); ?></p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/img/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Contact</h3>
                                    <p><?php echo $this->frontend_model->get_frontend_general_settings('phone'); ?></p>
                                   
                                   
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <img style="max-height: 23px;" src="<?php echo base_url();?>assets/ui/icon/email.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Email</h3>
                                    <p> <?php echo $this->frontend_model->get_frontend_general_settings('email'); ?></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <!--   <div class="reply-area">
                            <h3>LEAVE A message</h3>
                            <p> </p>
                            <form id="contact-form" action="<?php echo site_url('home/contact/send');?>" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Massage</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>send message</span></a>
                                <p class="form-messege"></p>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
