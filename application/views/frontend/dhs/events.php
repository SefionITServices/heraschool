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

    <!-- Event Start -->
        <div class="event-area three text-center pt-150 pb-150">
            <div class="container">
                <div class="row">
                     <?php foreach ($events as $row) { ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">
                            <div class="event-img">
                                <a href="#">
                                   <div style="height: 150px;
 background-image: linear-gradient(to right, #ec1c23 , #2c2b5e);"></div>
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3><?php echo date('d', $row['timestamp']); ?> <span><?php echo date('M', $row['timestamp']); ?></span></h3>
                                </div>
                            </div>
                            <div class="event-content text-left">
                                <h4><a href="event-details.html"><?php echo $row['title']; ?></a></h4>
                                <ul>
                                    <li><span>time:</span> <?php echo date('h:m A', $row['timestamp']); ?></li>
                                  <?php if($row['event_location'] != '') { ?>  <li><span>location</span> <?php echo $row['event_location']; ?></li><?php } ?>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- Event End -->
