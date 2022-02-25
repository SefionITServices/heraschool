<?php
  $slider = $this->frontend_model->get_frontend_general_settings('slider_images');
  $slider_images = json_decode($slider);
  $upcoming_events = $this->frontend_model->get_frontend_upcoming_events();
  include 'home_slider.php';
?>

        <!-- START PROMOTION -->    
        <section class="promotion section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="single_promo">
                            <h1>Welcome to <strong><?php echo $institute_title; ?></strong> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PROMOTION -->  
            <!-- START ABOUT CONTENT -->    
        <section class="about_content section-padding">         
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single_about_content">
                            <h1>More details</h1>
                            <p></p>
                            <p> </p>
                            <a href="<?php echo site_url('home/about');?>">Read more <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-12 col-xs-12">  
                        <div class="single_about_content_img">
                            <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/img/about-home-img.jpg" class="img-responsive" alt="" />
                        </div>
                    </div><!-- END COL -->  
                </div><!-- END ROW -->
            </div><!-- END CONTAINER -->            
        </section>
        <!-- END ABOUT CONTENT -->
            <!-- START ACTIVITES  -->
        <section class="our_activites">
            <div class="container">
                <div class="row text-center">
                    <div class="section-title wow zoomIn">
                        <h2>Overview of School</h2>
                        <span></span>
                        <p>.</p>
                    </div>
                   <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_activites single_activites_color_one">
                           <i class="fas fa-graduation-cap"></i>
                            <h4>Primary</h4>
                            <p>&nbsp;&rarr; Standard 6, 7 & 8</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div><!--END COL -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_activites single_activites_color_four">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Seconadary</h4>
                            <p>&nbsp;&rarr; Standard 9 & 10 (SSC)</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div><!--END COL -->
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_activites single_activites_color_nine">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Higher Secondary</h4>
                            <p>&nbsp;&rarr; General Stream (Arts & Commerce)</p>
                            <p>&nbsp;&rarr; Science Stream (Group A & Group B)</p>
                        </div>
                    </div><!--END COL -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_activites single_activites_color_seven">
                            <i class="fas fa-bus"></i>
                            <h4>Bus service</h4>
                            <p>&nbsp;&rarr; Dayadara to Bharuch</p>
                            <p>&nbsp;&rarr; Dayadara to Tankariya</p>
                        </div>
                    </div><!--END COL -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_activites single_activites_color_eight">
                            <i class="fas fa-volleyball-ball"></i>
                            <h4>Sports / Physical activity</h4>
                            <p>We encourage sports and physical activity</p>
                        </div>
                    </div><!--END COL -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_activites single_activites_color_ten">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h4>Teachers</h4>
                            <p>We have amazing team of talented teachers.</p>
                            
                        </div>
                    </div><!--END COL -->

                    <!--END  ROW -->
                </div>
            <!-- END CONTAINER -->
        </section>
        <!-- END ACTIVITES-->
        <!-- START COUNDOWN --> 
        <section class="counter_feature section-padding" style="background-image: url(<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/img/bg/counter-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="counter">
                            <div class="single_counter">
    <h2 class="timer"> <?php echo $this->crud_model->get_total_teachers(); ?></h2> 
                            </div> 
                            <p>Teacher & stuff</p>
                         </div>
                    </div> <!--- END COL -->   
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="counter">
                            <div class="single_counter">
                                <h2 class="timer"><?php echo $this->crud_model->get_total_students(); ?></h2>
                            </div>                          
                            <p>Students</p>
                        </div>
                    </div><!--- END COL -->   
                  
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="counter">
                            <div class="single_counter">
                                <h2 class="timer"><?php echo $this->crud_model->get_total_classes(); ?></h2> 
                            </div>      
                            <p>Classes</p>
                         </div>
                    </div> <!--- END COL -->                
              </div><!--- END ROW -->
           </div><!--- END CONTAINER -->
        </section>
        <!-- END COUNDOWN -->
     
     <!-- START EVENT -->
        <section class="our-event section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h2>Our events</h2>
                        <span></span>
                        <p>Upcomming events.</p>
                    </div>              
                    <div class="col-md-12 col-sm-12 col-xs-12">
                       <div id="event-slider" class="owl-carousel">
                         <?php   $this->db->where('status', 1);
  $this->db->order_by('timestamp', 'ASC');
  $query = $this->db->get('frontend_events');
  $events = $query->result_array();
                           foreach ($events as $row) { ?>
                       
                            <div class="event-slide">
                                <div class="event-img">
                                    <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/ui/event_ui.jpg" alt="<?php echo $row['title']; ?>">
                                    <div class="event-date">
                                       <span class="date"> <?php echo date('d', $row['timestamp']); ?></span>
                  <span class="month"><?php echo date('M', $row['timestamp']); ?></span>
                   <span class="date" style="float: right;"><?php echo date('Y', $row['timestamp']); ?></span>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <h3><?php echo $row['title']; ?></h3>
                                    <span><i class="fa fa-calendar"></i><?php echo date('d-M-Y', $row['timestamp']); ?></span>
                                    <span><i class="fa fa-clock-o"></i>10.00AM</span>
                                    <span><i class="fa fa-table"></i><strong>At PlayStone School</strong></span>
                                    <p><?php echo $row['description']; ?>.</p>
                                   
                                </div>
                            </div>

                       
                           <?php } ?>
                            </div>
                    </div><!--- END COL --> 
                </div><!-- END ROW -->
            </div><!-- END CONTAINER -->            
        </section>
        <!-- END EVENT -->
