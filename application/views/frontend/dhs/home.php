<?php
  $slider = $this->frontend_model->get_frontend_general_settings('slider_images');
  $slider_images = json_decode($slider);
  $upcoming_events = $this->frontend_model->get_frontend_upcoming_events();
  include 'home_slider.php';
?>

         <!-- Service Start -->
        <div class="service-area two pt-150 pb-150">
            <div class="container">
                <div align="center" style="color: #000000;font-size: 25px"><h1>Overview of School </h1> </div>
                <br>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service" align="center">
                            <div>
                               <img style="max-height: 64px;" src="<?php echo base_url().'assets/ui/icon/blackboard.svg';?>">
                            </div>
                            <h3><a href="JavaScript:Void(0);">PRIMARY <h3>&nbsp;</h3></a></h3>
                            <h4>GUJARATI MEDIUM (ગુજરાતી માધ્યમ)</h4>
                            <p>STANDARD 6, 7 & 8 </p>
                             <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service" align="center">
                            <div>
                               <img style="max-height: 64px;" src="<?php echo base_url().'assets/ui/icon/seminar.svg';?>">
                            </div>
                            <h3><a href="JavaScript:Void(0);">SECONDARY <h3>&nbsp;</h3></a></h3>
                            <h4>GUJARATI MEDIUM (ગુજરાતી માધ્યમ)</h4>
                            <p>STANDARD 9 and 10 (SSC) </p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service" align="center">
                            <div>
                               <img style="max-height: 64px;" src="<?php echo base_url().'assets/ui/icon/lecture.svg';?>">
                            </div>
                            <h3><a href="JavaScript:Void(0);">HIGHER SECONDARY <h3>&nbsp;</h3></a></h3>
                             <h4>GUJARATI MEDIUM (ગુજરાતી માધ્યમ)</h4>
                            <p>&nbsp;&rarr; General Stream (Arts & Commerce)</p>
                            <p>&nbsp;&rarr; Science Stream (Group A & Group B)</p>
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service" align="center">
                            <div>
                               <img style="max-height: 64px;" src="<?php echo base_url().'assets/ui/icon/school-bus_face.svg';?>">
                            </div>
                            <h3><a href="JavaScript:Void(0);">BUS SERVICE <h3>&nbsp;</h3></a></h3>
                            <p>&nbsp;&rarr; Dayadara to Bharuch</p>
                            <p>&nbsp;&rarr; Dayadara to Tankariya</p>
                        </div>
                    </div>
                       <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service" align="center">
                            <div>
                               <img style="max-height: 64px;" src="<?php echo base_url().'assets/ui/icon/running-man.svg';?>">
                            </div>
                            <h3><a href="JavaScript:Void(0);">SPORTS & PHYSICAL ACTIVITY</a></h3>
                            <p>We encourage sports and physical activity</p>
                            <p>&nbsp;</p>
                          
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service" align="center">
                            <div>
                               <img style="max-height: 64px;" src="<?php echo base_url().'assets/ui/icon/education.svg';?>">
                            </div>
                            <h3><a href="JavaScript:Void(0);">TEACHERS <h3>&nbsp;</h3></a></h3>
                               <p>We have amazing team of talented teachers.</p>
                            <p>&nbsp;</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <!-- About Start -->
        <div class="about-area pb-155">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="about-content">
                            <h2>WELCOME TO <span><?php echo $institute_title; ?></span></h2>
                            <p>THE DAYADARA HIGH SCHOOL was established in 1959 by The Dayadara Educational Society. It is located in the rural area of the BHARUCH district of Gujarat. Initially, We started school only with one class (8th Standard).</p>
                            <a class="default-btn" href="<?php echo site_url('home/about'); ?>">view more</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="about-img">
                            <img style="max-height: 512px;" src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/img/logo/icon.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
      <!--   <?php //include 'blog.php'; ?> -->
        <!-- Event Area Start -->
        <div class="event-area one text-center pt-140 pb-150">
            <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <div class="section-title">
                            <img style="max-height: 70px;" src="<?php echo base_url();?>assets/ui/icon/calendar.svg" alt="section-title">
                            <h2>EVENTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <?php   


/*$this->db->where('status', 1);
$this->db->where('frontend_events_id %2=', 0);
  $this->db->order_by('timestamp', 'ASC');
  $query = $this->db->get('frontend_events');
  $events = $query->result_array();*/

  $this->db->select('*');

$this->db->from('frontend_events');
$this->db->where('status', 1);
$this->db->where('MOD(frontend_events_id ,2) = 0');
$query_result = $this->db->get();
$events = $query_result->result_array();

                           foreach ($events as $row) { ?>
                        <div class="single-event mb-35">
                            <div class="event-date">
                                <h3><a href="JavaScript:Void(0);"><?php echo date('d', $row['timestamp']); ?> <span><?php echo date('M', $row['timestamp']); ?></span></a></h3>
                            </div>
                            <div class="event-content text-left">
                                <div class="event-content-left">
                                    <h4><a href="JavaScript:Void(0);"><?php echo $row['title']; ?></a></h4>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i><?php echo $row['event_time']; ?></li>
                                        <li><i class="fa fa-map-marker"></i><?php echo $row['event_location']; ?></li>
                                    </ul>
                                </div>
                                <div class="event-content-right">
<!--                                     <a class="default-btn" href="JavaScript:Void(0);">View</a>
 -->                                </div>
                            </div>
                        </div>
                         <?php } ?>

                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                                       <?php   



  $this->db->select('*');

$this->db->from('frontend_events');
$this->db->where('status', 1);
$this->db->where('MOD(frontend_events_id ,2) != 0');
$query_result = $this->db->get();
$events = $query_result->result_array();

                           foreach ($events as $row) { ?>
                        <div class="single-event mb-35">
                            <div class="event-date">
                                <h3><a href="JavaScript:Void(0);"><?php echo date('d', $row['timestamp']); ?> <span><?php echo date('M', $row['timestamp']); ?></span></a></h3>
                            </div>
                            <div class="event-content text-left">
                                <div class="event-content-left">
                                    <h4><a href="JavaScript:Void(0);"><?php echo $row['title']; ?></a></h4>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i><?php echo $row['event_time']; ?></li>
                                        <li><i class="fa fa-map-marker"></i><?php echo $row['event_location']; ?></li>
                                    </ul>
                                </div>
                                <div class="event-content-right">
                                   <!--  <a class="default-btn" href="JavaScript:Void(0);">View</a> -->
                                </div>
                            </div>
                        </div>
                         <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Event Area End -->
         <!-- Testimonial Area Start -->
       <!--  <div class="testimonial-area pt-110 pb-105 text-center">
            <div class="container">
                <div class="row">
                    <div class="testimonial-owl owl-theme owl-carousel">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <div class="single-testimonial">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/img/testimonial/hasim.png" alt="testimonial">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I have developed 360Education System software which is currenctly used by THE DAYADARA HIGHER SECONDARY SCHOOL; and  I was the student of this school. It is honour to serve my school.</p>
                                        <h4>MUHAMMADHASIM MUSTAK TANDERJAWALA</h4>
                                        <h5>Former Student, Dayadara School</h5>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial Area End -->
     