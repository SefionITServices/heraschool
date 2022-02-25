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
<!DOCTYPE html>
<html class="no-js" lang="en">
    
    <head>
        <meta name="google-site-verification" content="HQDufNhJDljipdKJ0-IChSp5NKliFKrAG9VDkqaD6dE" />
       <?php include 'metas.php'; ?>
      <title>
        <?php echo $page_title; ?> | <?php echo $school_title;?>
      </title>
          
    
        <?php include 'stylesheets.php'; ?>
    </head>
    <body>

   
        <?php include 'navigation.php'; ?>

        <?php include $page_name.'.php'; ?>

        <?php include 'footer.php'; ?>

        <?php include 'javascripts.php'; ?>

    </body>
</html>
