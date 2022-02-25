<?php
$header_logo = $this->frontend_model->get_frontend_general_settings('header_logo');

?>

    <!-- START HEADER -->
    <header class="header_area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3 col-xs-12">
            <div class="top-info-left">
              <ul>
                <li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li>
                <li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li>
                <li><a href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div><!--- END COL --> 
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="top-info-right">
              <ul class="list-unstyled">
               <?php if($this->session->userdata('login_user_id') == '') { ?>
                <li><a href="<?php echo site_url('login');?>" >Login <i class="fas fa-sign-in-alt"></i></a></li>
              <?php } else {?>
                <li><a href="<?php echo site_url('login');?>" >Welcome, <?php echo $this->session->userdata('name') ?></a></li>
            

              <?php }?>
              </ul>
            </div>
          </div><!--- END COL -->
            <?php if($this->session->userdata('login_user_id') != '') { ?>
   <div class="col-md-4 col-sm-3 col-xs-12">
            <div class="item-language">
              <ul>
                <li role="presentation">
                  <a href="<?php echo site_url('login/logout'); ?>">
                      Logout <i class="fa fa-signout"></i>
                  </a>
            
                  </li>
                </ul> 
            </div>            
          </div><!--- END COL -->
<?php } ?>

                     
        </div><!--- END ROW -->       
      </div><!--- END CONTAINER -->
    </header>
    <!-- END HEADER -->
    <!-- START LOGO WITH CONTACT -->
    <section class="logo-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="logo-img">
              <a href="<?php echo base_url(); ?>"><img style="max-height: 100px; max-width: 100px;" src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/logo/dhs_logo.png" alt="DHS Logo" /></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-top-contact">
              <i class="fa fa-home"></i>
              <h4><strong><?php echo $phone; ?></strong></h4>
              <h6>CALL US TODAY</h6>  
            </div>
          </div><!--- END COL --> 
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-top-contact">              
              <i class="fa fa-envelope"></i>
              <h4><strong><?php echo $email; ?></strong></h4>
              <h6>GET IN TOUCH WITH EMAIL</h6>  
            </div>
          </div><!--- END COL --> 
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-top-contact">
              <i class="fa fa-clock-o"></i>
              <h4><strong><?php echo $time; ?></strong></h4>
              <h6>SCHOOL HOUR</h6>
            </div>
          </div><!--- END COL -->         
        </div><!--- END ROW -->
      </div><!--- END CONTAINER -->
    </section>
    <!-- END LOGO WITH CONTACT -->
    <!-- START NAVBAR -->
    <div class="navbar navbar-default menu-top menu_dropdown">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>   
        </div>
        <div class="navbar-collapse collapse">
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo site_url('home/gallery'); ?>">Gallery</a></li>
              <li><a href="<?php echo site_url('home/events'); ?>">Events</a></li>
              <li><a href="<?php echo site_url('home/teachers'); ?>">Teachers</a></li> 
              <li><a href="<?php echo site_url('home/about'); ?>">About</a></li>
              <li><a href="<?php echo site_url('home/admission'); ?>"><span <?php if($admission=='active'){ echo 'class="blinking"'; } ?> >Admission</span></a></li>
              <li><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
            </ul>
          </nav>
        </div> 
      </div><!--- END CONTAINER -->
    </div> 
    <!-- END NAVBAR -->
     <?php if($page_name != 'home') { ?> 
    <!-- START PROMOTION -->  
    <section class="section-padding" style="background: #110f1a;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="single_promo">
              <h1><strong><?php echo $page_title; ?></strong> </h1>
            </div>
          </div>
        </div>
     
      </div>
    </section>
    <!-- END PROMOTION -->

  <?php } ?>  