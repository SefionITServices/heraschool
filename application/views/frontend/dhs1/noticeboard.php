<?php
  $this->db->where('show_on_website', 1);
  $this->db->order_by('create_timestamp', 'DESC');
  $query = $this->db->get('noticeboard', $per_page, $this->uri->segment(3));
  $notices = $query->result_array();
?>
<!-- <div class="news-area page-content-area">
    <div class="container">
        <div class="row page-title">
            <div class="col-md-6">
                <div>
                    <h1><?php echo $page_title; ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <nav aria-label="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </nav>
            </div>
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row">
          <?php foreach ($notices as $row) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card ekattor-grid-news">
                    <img class="card-img-top img-fluid" alt="" src="<?php echo base_url(); ?>uploads/frontend/noticeboard/<?php echo $row['image'];?>">
                    <div class="card-body">
                        <h3 class="card-title"><a href="<?php echo site_url('home/notice_details/'.$row['notice_id'].'/'.$row['notice_title']);?></a></h3>
                        <p class="card-text">
                          <?php echo substr($row['notice'], 0, 100); ?> ...
                        </p>
                        <hr>
                        <p class="card-text pull-left"><small class="text-muted"><?php echo date('d M, Y', $row['create_timestamp']); ?></small></p>
                        <a href="<?php echo site_url('home/notice_details/'.$row['notice_id']);?>" class="pull-right btn">
                          <?php echo get_phrase('read_more'); ?>..
                        </a>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <div class="news-grid-pagination">
                    <nav aria-label="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div> -->


   <!-- Notice Start -->
        <section class="notice-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="notice-left">
                            <h3>notice board</h3>
                              <?php foreach ($notices as $row) { ?>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>5, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                              <?php } ?>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>4, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left pb-75">
                                <h4>3, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>5, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>4, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left pb-70">
                                <h4>3, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>5, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4>4, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left pb-70">
                                <h4>3, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- Notice End -->

