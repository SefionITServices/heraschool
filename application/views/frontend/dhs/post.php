 <!-- Blog Start -->
        <div class="blog-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <?php 
                    $query = $this->db->get('post')->result_array(); 
                    foreach ($query as $row) {
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog mb-60">
                            <div class="blog-img">
                                <a href="<?php echo base_url().'home/post_details/'.$row['post_url']; ?>"><img src="<?php echo base_url().'uploads/post/'.$row['featured_image']; ?>" alt="blog"></a>
                                <div class="blog-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>Posted:  <?php echo $row['created']; ?> </p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="<?php echo base_url().'home/post_details/'.$row['post_url']; ?>"><?php echo $row['post_title']; ?> </a></h2>
                                    <a href="<?php echo base_url().'home/post_details/'.$row['post_url']; ?>">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
                </div>
                <!-- <div align="center" class="row">
                    <button class="btn btn-primary">Load More</button>
                </div> -->
            </div>
        </div>
        <!-- Blog End -->