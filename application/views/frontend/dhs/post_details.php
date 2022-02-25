 <!-- Blog Start -->
        <div class="blog-details-area pt-150 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details">
                            <div class="blog-details-img">
                                <img src="<?php echo base_url().'uploads/post/'.$data->featured_image;?>" alt="blog-details">
                            </div>
                            <div class="blog-details-content">
                                <h2><?php echo $data->post_title; ?> </h2>
                                <h6>Posted <b><?php echo $data->created; ?></b></h6>
                                <p><?php echo $data->post_data; ?></p>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                            <div class="single-blog-widget mb-47">
                                <h3>search</h3>
                                <div class="blog-search">
                                    <form id="search" action="#">
                                        <input type="search" placeholder="Search..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                         <!--    <div class="single-blog-widget mb-47">
                                <h3>categories</h3>
                                <ul>
                                    <li><a href="#">CSS Engineering (10)</a></li>
                                    <li><a href="#">Political Science (12)</a></li>
                                    <li><a href="#">Micro Biology (08)</a></li>
                                    <li><a href="#">HTML5 &amp; CSS3 (15)</a></li>
                                    <li><a href="#">Web Design (20)</a></li>
                                    <li><a href="#">PHP (23)</a></li>
                                </ul>
                            </div>
                             -->
                            <div class="single-blog-widget mb-47">
                                <h3>latest post</h3>
                                <?php 
                                $query = $this->db->get('post')->result_array();

                                foreach ($query as $row) {
                                      ?>
                                <div class="single-post mb-30">
                                    
                                    <div class="single-post-content">
                                        <h4><a href="<?php echo base_url().'home/post_detail/'.$row['post_url']; ?>"><?php echo $row['post_title']; ?></a></h4>
                                        <p><?php echo $row['created']; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                              
                            </div>
                          <!--   <div class="single-blog-widget">
                                <h3>tags</h3>
                                <div class="single-tag">
                                    <a href="blog-details.html" class="mr-10 mb-10">course</a>
                                    <a href="blog-details.html" class="mr-10 mb-10">education</a>
                                    <a href="blog-details.html" class="mb-10">teachers</a>
                                    <a href="blog-details.html" class="mr-10">learning</a>
                                    <a href="blog-details.html" class="mr-10">university</a>
                                    <a href="blog-details.html">events</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->