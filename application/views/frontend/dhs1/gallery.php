<?php
  $this->db->where('show_on_website', 1);
  $this->db->order_by('date_added', 'DESC');
  $query = $this->db->get('frontend_gallery', $per_page, $this->uri->segment(3));
  $galleries = $query->result_array();
?>
<style type="text/css">
  .text-block {
  position: absolute;
  
  top: 20px;
  padding-top: 150px;
  background-color: transparent;
  color: white;
  padding-left: 90px;
 
}
.h2_white {
  color: white;
font-weight: bold;
}
</style>


    


     <div class="course-area pt-150 pb-150">
            <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="course-title">
                        <h3>search courses</h3>
                    </div>
                    <div class="course-form">
                        <form id="search" action="#">
                            <input type="search" placeholder="Search..." name="search" />
                            <button type="submit">search</button>
                        </form>
                    </div>
                </div>
            </div>     
            <div class="row">
              <?php foreach ($galleries as $row) {
                  $images = $this->frontend_model->get_frontend_gallery_images_limited($row['frontend_gallery_id']);
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="<?php echo site_url('home/gallery_view/'.$row['frontend_gallery_id']);?>"><img src="<?php echo base_url(); ?>uploads/frontend/gallery_images/<?php echo $row['image'];?>" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">CSE ENGINEERING</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="<?php echo site_url('home/gallery_view/'.$row['frontend_gallery_id']);?>">View</a>
                        </div>   
                    </div>
                </div>
                  <?php } ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course2.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">political science</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course3.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">micro biology</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course4.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">English history</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course5.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">digital marketing</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course6.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">html5 &amp; css3</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course7.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">learn php5</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course8.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">social science</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img src="img/course/course9.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">applied mathematics</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>   
                    </div>
                </div>
            </div>
        </div> 
        </div> 




