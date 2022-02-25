<?php
  $slider = $this->frontend_model->get_frontend_general_settings('slider_images');
  $slider_images = json_decode($slider);
?>
		<!-- START HOME -->
		<div id="fw_al_005" class="carousel ps_spread ps_control_hradius swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">			
			<!-- Wrapper For Slides -->
			<div class="carousel-inner" role="listbox">
				<!-- First Slide -->
				 <?php for ($i=0; $i < count($slider_images); $i++) { ?>
				<div class="item <?php if($slider_images[$i]->slide_no == 1) {echo 'active'; } ?>">
					<!-- Slide Background -->
					<img src="<?php echo base_url(); ?>uploads/frontend/slider/<?php echo $slider_images[$i]->image;?>" alt="image" />
					<!-- Slide Text Layer -->
					<div class="fw_al_005_slide <?php if ($i==1) {echo 'fw_al_005_slide_right';} ?>">
						<h1 data-animation="animated zoomIn"><?php echo $slider_images[$i]->title; ?></h1>
						<p data-animation="animated zoomIn"><?php echo $slider_images[$i]->description; ?>.</p>
						<a href="about.html" data-animation="animated zoomIn">learn more</a>
						<a href="course.html" data-animation="animated zoomIn">view course</a>
					</div>
				</div>
				<?php } ?>
				<!-- End of Slide -->
				
			</div><!-- End of Wrapper For Slides -->
			<!-- Left Control -->
			<a class="left carousel-control" href="#fw_al_005" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<!-- Right Control -->
			<a class="right carousel-control" href="#fw_al_005" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div> 
		<!-- END  HOME DESIGN -->
