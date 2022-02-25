<?php
  $slider = $this->frontend_model->get_frontend_general_settings('slider_images');
  $slider_images = json_decode($slider);
?>

		<!-- Background Area Start -->
        <section id="slider-container" class="slider-area two"> 
            <div class="slider-owl owl-theme owl-carousel"> 
               
<?php for ($i=0; $i < count($slider_images); $i++) { ?>
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(<?php echo base_url(); ?>uploads/frontend/slider/<?php echo $slider_images[$i]->image;?>)">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">  
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1"> 
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content text-center">
                                            <h2><?php echo $slider_images[$i]->title; ?> </h2>
                                            <p><?php echo $slider_images[$i]->description; ?> </p>
                                            <a class="default-btn" href="<?php echo site_url('home/about'); ?>">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
<?php } ?>
               								
            </div>
        </section>
		<!-- Background Area End -->
