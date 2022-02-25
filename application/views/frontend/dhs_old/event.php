<?php
  $this->db->where('status', 1);
  $this->db->order_by('timestamp', 'ASC');
  $query = $this->db->get('frontend_events', $per_page, $this->uri->segment(3));
  $events = $query->result_array();
  $recent_notices = $this->frontend_model->get_frontend_recent_noticeboard();
?>
<style type="text/css">
  .text-block {
  position: absolute;
  
  top: 20px;
  padding-top: 100px;
  background-color: transparent;
  color: white;
  padding-left: 90px;
 
}
.h2_white {
  color: white;
font-weight: bold;
}
</style>
  
    

    <!-- START EVENT -->
    <section class="our-event our-event-mbnone section-padding">
      <div class="container">
        <div class="row">
          <div class="section-title text-center">
            <h2>Our events</h2>
            <span></span>
            <p>Checkout event list.</p>
          </div>  
          <hr>      
           <?php foreach ($events as $row) { ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="event-slide event-slide-page">
              <div class="event-img">
                <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/ui/event_ui.jpg" alt="">
                <div class="event-date">
                  <span class="date"> <?php echo date('d', $row['timestamp']); ?></span>
                  <span class="month"><?php echo date('M', $row['timestamp']); ?></span>
                   <span class="date" style="float: right;"><?php echo date('Y', $row['timestamp']); ?></span>
                </div>
                     <div class="text-block">
                      <h2 class="h2_white"> <?php echo $row['title']; ?></h2>
                    </div>
              </div>
              <div class="event-content">
               
                <span><?php echo $row['description']; ?></span>
               
               
              </div>
            </div>
          </div><!--- END COL -->
           <?php } ?>
        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->      
    </section>
    <!-- END EVENT -->
