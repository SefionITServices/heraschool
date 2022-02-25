
  <!-- Event Start -->
        <div class="event-area  pt-150 pb-150">
            <div class="container">
                <div class="row">
                     
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-event mb-60">
                         
                            <div class="text-center">
          <div> <span style="size: 90px;color: black;font-size: 60px;"><i class="far fa-check-circle"></i> Success!</span></div>
                              <hr>
                               <div style="font-size: 25px; color: black">
                               	Well done, <b><?php echo $data[0]['full_name']; ?>!</b></div>
                               	<div style="font-size: 25px; color: black">
                               	<span>Your form Number: <b><?php echo $data[0]['form_number']; ?></b></span>
                               	<p>We have received your <?php echo $data[0]['stream']; ?> admission application</p>
                               </div>
                               <hr>
                                <div>
                                    <a class="default-btn" href="<?php echo site_url().'/home/print_form/'.$data[0]['form_number']; ?>">Print from</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>      
        <!-- Event End -->