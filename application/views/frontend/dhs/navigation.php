


        <!-- Header Area Start -->
    <header class="top">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left" style="padding-top: 5px;">
                         <a style="color: white" href="<?php echo site_url('home/about'); ?>">About</a> |  <a style="color: white" href="<?php echo site_url('home/contact'); ?>">Contact Us</a> |  <a style="color: white" href="<?php echo site_url('home/academic_calendar'); ?>">Academic Calendar</a> |  <a style="color: white" href="<?php echo site_url('home/events'); ?>">Event(s)</a> | <a style="color: white" href="<?php echo site_url('home/hall_of_fame'); ?>">Hall of Fame</a>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <?php if($this->session->userdata('login_user_id') == '') { ?>
                                <li><a href="<?php echo site_url('login');?>">login</a></li>
                                
                                  <?php } else {?>
                                     <li><a href="<?php echo site_url('login');?>" >Welcome, <?php echo $this->session->userdata('name') ?></a></li>
                                   <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="header-area two header-sticky">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="logo">
                <a href="<?php echo base_url();?>"><img style="max-height: 70px" src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/img/logo/dhs_logo.png" alt="dhshome" /></a>
              </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="content-wrapper text-right">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>">Home</a></li>

                                            <li><a href="<?php echo site_url('home/noticeboard'); ?>">Noticeboard</a></li>
                                             <li><a href="<?php echo site_url('home/gallery'); ?>">Gallery</a></li>
                                             
                                            <li class="hidden-sm"><a href="<?php echo site_url('home/teachers'); ?>">teacher</a></li>

                                            <li><a href="<?php echo site_url('home/post'); ?>">post</a></li>
                                            <li><a href="<?php echo site_url('home/admission'); ?>"><span <?php if($admission=='active'){ echo 'class="blinking"'; } ?> >Admission</span></a>
                                        <li class="has-dropdown"><a href="#">More</a> <i class="fas fa-chevron-down"></i>
                                                                            <ul class="sub-menu">
                                                                              <li><a href="<?php echo site_url('home/events'); ?>">event</a></li>
                                                                              <li><a href="<?php echo site_url('home/about'); ?>">About Us</a></li>
                                                                              <li><a href="<?php echo site_url('home/hall_of_fame'); ?>">Hall of Fame</a></li>
                                                                              <li><a href="<?php echo site_url('home/contact'); ?>">Contact Us</a></li>
                                                                              
                                                                                   </ul>
                                                                                   </li>
                                        </ul>
                                    </nav>
                                </div>
                              
                                <!-- Main Menu End -->
                            </div>
            </div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div> 
                        </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Area End --> 
    <?php if($page_name != 'home')
    {?>
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
            <div class="banner-area text-center"> 
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2><?php echo $page_title; ?></h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    <!-- Banner Area End -->
    <?php } ?>