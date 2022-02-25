<?php
  $slider = $this->frontend_model->get_frontend_general_settings('slider_images');
  $slider_images = json_decode($slider);
?>
		
<!-- Revolution slider start -->
    <div class="tp-banner-container sliderWraper">
      <div class="tp-banner">
        <ul>
        	 <?php for ($i=0; $i < count($slider_images); $i++) { ?>
          <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php echo base_url(); ?>uploads/frontend/slider/<?php echo $slider_images[$i]->image;?>" data-lazyload="<?php echo base_url(); ?>uploads/frontend/slider/<?php echo $slider_images[$i]->image;?>">
            <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="140" data-speed="600" data-start="1000"> Welcome to</div>
            <div class="caption lfl tp-resizeme slidertext1" data-x="center" data-y="170" data-speed="600" data-start="1600"> <?php echo $slider_images[$i]->title; ?></div>
            <div class="caption lft large-title tp-resizeme slidertext3" data-x="center" data-y="285" data-speed="600" data-start="2200"> <?php echo $slider_images[$i]->description; ?>. </div>
            <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="350" data-speed="600" data-start="2800"><a href="#" class="slidebtn">Get Started <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
          </li>
          <?php } ?>
    <!--       <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="images/banner2.jpg">
            <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="140" data-speed="600" data-start="1000"> Education For</div>
            <div class="caption lfl large-title tp-resizeme slidertext1" data-x="center" data-y="170" data-speed="600" data-start="1600"> Your Children</div>
            <div class="caption lft large-title tp-resizeme slidertext3" data-x="center" data-y="285" data-speed="600" data-start="2200"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac magna nec mauris mattis<br/>
              semper. In cursus purus arcu, vitae auctor enim blandit vel. </div>
            <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="350" data-speed="600" data-start="2800"><a href="#" class="slidebtn">Get Started <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
          </li> -->
        </ul>
      </div>
    </div>
    <!-- Revolution slider end --> 

    <!-- Element Start -->
    <div class="element-wrap">
      <div class="container">
        <ul class="row">
          <li class="col-lg-4">
            <div class="elementInfo">
              <div class="element-icon"><img src="images/teacher.png" alt=""></div>
              <h3>Experience Teachers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </li>
          <li class="col-lg-4">
            <div class="elementInfo">
              <div class="element-icon"><img src="images/book.png" alt=""></div>
              <h3>Smart Courses</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </li>
          <li class="col-lg-4">
            <div class="elementInfo">
              <div class="element-icon"><img src="images/graduation-icon.png" alt=""></div>
              <h3>Scholarship News</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Element Endt --> 
