<?php
  $school_title = $this->frontend_model->get_frontend_general_settings('school_title');
  $institute_title = $this->frontend_model->get_frontend_general_settings('school_title');
  $facebook = $this->frontend_model->get_frontend_general_settings('facebook');
$instagram = $this->frontend_model->get_frontend_general_settings('instagram');
$youtube =  $this->frontend_model->get_frontend_general_settings('youtube');
$phone =  $this->frontend_model->get_frontend_general_settings('phone');
$email =  $this->frontend_model->get_frontend_general_settings('email');

  $theme = $this->frontend_model->get_frontend_general_settings('theme');
?>
<!doctype html>
<html lang="zxx">
    <head>
       <?php include 'metas.php'; ?>
      <title>
        <?php echo $page_title; ?> | <?php echo $school_title;?>
      </title>
          <!-- select2-->
    
        <?php include 'stylesheets.php'; ?>
    </head>
    <body data-spy="scroll" data-offset="80">

    <!-- START PRELOADER -->
  <!--  <div class="preloader">
      <div class="status">
        <div class="status-mes"></div>
      </div>
    </div>  -->
    <!-- START COLOR -->  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
          <div class="color_one"></div>
        </div><!--- END COL -->   
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
          <div class="color_two"></div>
        </div><!--- END COL -->   
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
          <div class="color_three"></div>
        </div><!--- END COL -->   
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
          <div class="color_four"></div>
        </div><!--- END COL -->   
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
          <div class="color_five"></div>
        </div><!--- END COL -->   
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
          <div class="color_six"></div>
        </div><!--- END COL -->         
      </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
    <!-- END COLOR -->  
    <!-- END PRELOADER -->
        <?php include 'navigation.php'; ?>

        <?php include $page_name . '.php'; ?>

        <?php include 'footer.php'; ?>

        <?php include 'javascripts.php'; ?>

    </body>
</html>
