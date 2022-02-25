<?php
  $this->db->where('show_on_website', 1);
  $this->db->order_by('create_timestamp', 'DESC');
  $query = $this->db->get('noticeboard', $per_page, $this->uri->segment(3));
  $notices = $query->result_array();
?>



          <!-- Event Start -->
        <div class="event-area three text-center pt-150 pb-150">
            <div class="container">
                <div class="row">
                     <?php $i=0;foreach ($notices as $row) { $i++; ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-event mb-60">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="<?php echo base_url().'uploads/frontend/noticeboard/ui.jpg'; ?>" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3><?php echo date('d', $row['create_timestamp']); ?> <span><?php echo date('M', $row['create_timestamp']); ?></span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-left">
                                <h4><a href="<?php echo site_url('home/notice_details/'.$row['notice_id']);?>"><?php echo $row['notice_title'];?></a></h4>
                                <ul>
                                    <li><span>Date:</span> <?php echo date('d-m-Y', $row['create_timestamp']); ?></li>
                                     <p> <?php echo substr($row['notice'], 0, 30); ?> ... </p>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="<?php echo site_url('home/notice_details/'.$row['notice_id']);?>">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>      
        <!-- Event End -->




