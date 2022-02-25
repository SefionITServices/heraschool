<?php
  $info = $this->frontend_model->get_frontend_notice_by_id($notice_id);
  $recent_notices = $this->frontend_model->get_frontend_recent_noticeboard();
  $upcoming_events = $this->frontend_model->get_frontend_upcoming_events();
?>

<!-- Notice Start -->
        <section class="notice-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="notice-right">
                            <?php foreach ($info as $row) { ?>
                            <div class="single-notice-right mb-25 pb-25">
                                <h3><?php echo $row['notice_title'].' - '.date('d M, Y', $row['create_timestamp']); ?></h3>
                               
                                   <p><?php echo $row['notice']; ?> </p>
                                 
                                
                                <p><?php if(!empty($row['file'])){?>
                                  <br>
                                    Attachments:<br>
                                <a class="btn" style=" background-image: linear-gradient(to right, #8E2DE2 , #232526);
    color: white;" target="_blank" href="<?php echo base_url().'uploads/frontend/noticeboard/'.$row['file'];?>">View File</a> 
                   <?php }?></p>
                            </div> 
                          <?php } ?>
                             <a href="<?php echo site_url().'/home/noticeboard'; ?>" style=" background-image: linear-gradient(to right, #c31432 , #240b36);
    color: white;" class="btn btn-primary btn-icon btn-lg"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                     
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Notice End -->