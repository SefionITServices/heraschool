<?php
  $slider = $this->frontend_model->get_frontend_general_settings('slider_images');
  $slider_images = json_decode($slider);
  $upcoming_events = $this->frontend_model->get_frontend_upcoming_events();
  include 'home_slider.php';
?>
 <!--About Start-->
    <div class="about-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title">
              <h1>Welcome To <span>Education</span></h1>
            </div>
            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac erat a diam rutrum laoreet. Cras vitae fringilla turpis. In laoreet nunc vel lacinia luctus. Nullam suscipit volutpat magna, vel tempus mauris auctor non. Duis nec orci egestas, hendrerit purus non, egestas diam. Donec viverra arcu quam, vel aliquam libero sagittis ut. Aenean non mauris vel nisl pulvinar malesuada ut non dui. </p>
            <ul class="row iconsWrp">
              <li class="col-lg-4 col-md-4">
                <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-home" aria-hidden="true"></i></a>
                  <h6>Active Learning</h6>
                </div>
              </li>
              <li class="col-lg-4 col-md-4">
                <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-university" aria-hidden="true"></i></a>
                  <h6>Books & Library</h6>
                </div>
              </li>
              <li class="col-lg-4 col-md-4">
                <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-building" aria-hidden="true"></i></a>
                  <h6>Learning & Fun</h6>
                </div>
              </li>
            </ul>
            <div class="readmore"><a href="#">Read More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
          </div>
          <div class="col-lg-6">
            <div class="aboutImg"><img src="images/about-sec-img.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <!--About End--> 


    <!--Classes Start-->
    <div class="classes class-wrap">
      <div class="container">
        <div class="section-header">
          <div class="title">
            <h1>Our Popular <span>Classes</span></h1>
          </div>
          <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis ipsum, vestibulum quis sagittis lacinia, ultrices eu est. Vivamus vel egestas nibh. In tellus mauris, sodales ac dui in, condimentum dignissim dolor.</p>
        </div>
        <ul class="owl-carousel classes-wrap">
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="images/class_01.jpg" alt="class image" class="img-responsive">
                <p><span>Class Time:</span> 08:00 am - 10:00 am</p>
              </div>
              <div class="content">
                <h4><a href="class-single.html">Art Drawing Classes</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.</p>
              </div>
              <ul class="schedule">
                <li> <span>Class Size</span> <span>30 - 40</span> </li>
                <li> <span>Years Old</span> <span>5 - 6</span> </li>
                <li> <span>Tution Fee</span> <span>$1500</span> </li>
              </ul>
            </div>
            <!-- class item --> 
          </li>
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="images/class_02.jpg" alt="class image" class="img-responsive">
                <p><span>Class Time:</span> 08:00 am - 10:00 am</p>
              </div>
              <div class="content">
                <h4><a href="class-single.html"> Imagination Classes</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur massa nibh, consequat eget gravida quis.</p>
              </div>
              <ul class="schedule">
                <li> <span>Class Size</span> <span>30 - 40</span> </li>
                <li> <span>Years Old</span> <span>5 - 6</span> </li>
                <li> <span>Tution Fee</span> <span>$1500</span> </li>
              </ul>
            </div>
            <!-- class item --> 
          </li>
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="images/class_03.jpg" alt="class image" class="img-responsive">
                <p><span>Class Time:</span> 08:00 am - 10:00 am</p>
              </div>
              <div class="content">
                <h4><a href="class-single.html">Learning Classes</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.</p>
              </div>
              <ul class="schedule">
                <li> <span>Class Size</span> <span>30 - 40</span> </li>
                <li> <span>Years Old</span> <span>5 - 6</span> </li>
                <li> <span>Tution Fee</span> <span>$1500</span> </li>
              </ul>
            </div>
            <!-- class item --> 
          </li>
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="images/class_01.jpg" alt="class image" class="img-responsive">
                <p><span>Class Time:</span> 08:00 am - 10:00 am</p>
              </div>
              <div class="content">
                <h4><a href="class-single.html">Drawing Classes</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur massa nibh, consequat eget gravida quis.</p>
              </div>
              <ul class="schedule">
                <li> <span>Class Size</span> <span>30 - 40</span> </li>
                <li> <span>Years Old</span> <span>5 - 6</span> </li>
                <li> <span>Tution Fee</span> <span>$1500</span> </li>
              </ul>
            </div>
            <!-- class item --> 
          </li>
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="images/class_02.jpg" alt="class image" class="img-responsive">
                <p><span>Class Time:</span> 08:00 am - 10:00 am</p>
              </div>
              <div class="content">
                <h4><a href="class-single.html"> Imagination Classes</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.</p>
              </div>
              <ul class="schedule">
                <li> <span>Class Size</span> <span>30 - 40</span> </li>
                <li> <span>Years Old</span> <span>5 - 6</span> </li>
                <li> <span>Tution Fee</span> <span>$1500</span> </li>
              </ul>
            </div>
            <!-- class item --> 
          </li>
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="images/class_03.jpg" alt="class image" class="img-responsive">
                <p><span>Class Time:</span> 08:00 am - 10:00 am</p>
              </div>
              <div class="content">
                <h4><a href="class-single.html">Learning Classes</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur massa nibh, consequat eget gravida quis.</p>  
              </div>
              <ul class="schedule">
                <li> <span>Class Size</span> <span>30 - 40</span> </li>
                <li> <span>Years Old</span> <span>5 - 6</span> </li>
                <li> <span>Tution Fee</span> <span>$1500</span> </li>
              </ul>
            </div>
            <!-- class item --> 
          </li>
        </ul>
        <!-- row --> 
        
      </div>
      <!-- container --> 
    </div>
    <!--Classes Start--> 
      <!--Counter Start-->
    <div id="counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
            <div class="counterbox">
              <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
              <span class="counter-number" data-from="1" data-to="399" data-speed="1000">399</span> <span class="counter-text">Happy Client</span> </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
            <div class="counterbox">
              <div class="counter-icon"><i class="fa fa-code" aria-hidden="true"></i></div>
              <span class="counter-number" data-from="1" data-to="8312" data-speed="2000">8312</span> <span class="counter-text">Code Line</span> </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
            <div class="counterbox">
              <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
              <span class="counter-number" data-from="1" data-to="1632" data-speed="3000">1632</span> <span class="counter-text">Project Finished</span> </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
            <div class="counterbox">
              <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
              <span class="counter-number" data-from="1" data-to="206" data-speed="4000">206</span> <span class="counter-text">Awards</span> </div>
          </div>
        </div>
      </div>
    </div>
    <!--Counter End--> 
    
    <!--Project Start-->
    <div class="project-wrap">
      <div class="container">
        <div class="project-heading">
          <div class="section-header">
            <div class="title">
              <h1>Our <span>Gallery</span></h1>
            </div>
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis ipsum, vestibulum quis sagittis lacinia, ultrices eu est. Vivamus vel egestas nibh. In tellus mauris, sodales ac dui in, condimentum dignissim dolor.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-4">
              <div class="projectImg"><img src="images/portfolio1.jpg" alt="">
                <div class="service-overlay">
                  <div class="heading"><a href="#">Gallery Heading</a></div>
                  <p>Art Drawing</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="projectImg"><img src="images/portfolio2.jpg" alt="">
                <div class="service-overlay">
                  <div class="heading"><a href="#">Gallery Heading</a></div>
                  <p>Art Drawing</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="projectImg"><img src="images/portfolio3.jpg" alt="">
                <div class="service-overlay">
                  <div class="heading"><a href="#">Gallery Heading</a></div>
                  <p>Art Drawing</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="projectImg"><img src="images/portfolio4.jpg" alt="">
                <div class="service-overlay">
                  <div class="heading"><a href="#">Gallery Heading</a></div>
                  <p>Art Drawing</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="projectImg"><img src="images/portfolio5.jpg" alt="">
                <div class="service-overlay">
                  <div class="heading"><a href="#">Gallery Heading</a></div>
                  <p>Art Drawing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="projectImg"><img src="images/portfolio6.jpg" alt="">
            <div class="service-overlay">
              <div class="heading"><a href="#">Gallery Heading</a></div>
              <p>Art Drawing</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="projectImg"><img src="images/portfolio7.jpg" alt="">
            <div class="service-overlay">
              <div class="heading"><a href="#">Gallery Heading</a></div>
              <p>Art Drawing</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="projectImg"><img src="images/portfolio8.jpg" alt="">
            <div class="service-overlay">
              <div class="heading"><a href="#">Gallery Heading</a></div>
              <p>Art Drawing</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="projectImg"><img src="images/portfolio9.jpg" alt="">
            <div class="service-overlay">
              <div class="heading"><a href="#">Gallery Heading</a></div>
              <p>Art Drawing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Project End--> 
    
    <!-- Team start -->
    <div class="team-wrap">
      <div class="container">
        <div class="section-header">
          <div class="title">
            <h1>Our <span>Teachers</span></h1>
          </div>
          <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis ipsum, vestibulum quis sagittis lacinia, ultrices eu est. Vivamus vel egestas nibh. In tellus mauris, sodales ac dui in, condimentum dignissim dolor.</p>
        </div>
        <ul class="row">
          <li class="col-lg-3 col-md-6">
            <div class="team">
              <div class="team-image"> <img src="images/team1.jpg" alt="">
                <div class="overlay">
                  <div class="socials">
                    <ul class="experts">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="team-list">
                <div class="team-info">
                  <h5><a href="#">Stella Roffin</a></h5>
                  <span>Drawing Teacher</span> </div>
              </div>
            </div>
          </li>
          <li class="col-lg-3 col-md-6">
            <div class="team">
              <div class="team-image"> <img src="images/team2.jpg" alt="">
                <div class="overlay">
                  <div class="socials">
                    <ul class="experts">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="team-list">
                <div class="team-info">
                  <h5><a href="#">Princy Flora</a></h5>
                  <span>English Tutor</span> </div>
              </div>
            </div>
          </li>
          <li class="col-lg-3 col-md-6">
            <div class="team">
              <div class="team-image"> <img src="images/team3.jpg" alt="">
                <div class="overlay">
                  <div class="socials">
                    <ul class="experts">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="team-list">
                <div class="team-info">
                  <h5><a href="#">Jesica Matt</a></h5>
                  <span>Art Teacher</span> </div>
              </div>
            </div>
          </li>
          <li class="col-lg-3 col-md-6">
            <div class="team">
            <div class="team-image"> <img src="images/team4.jpg" alt="">
              <div class="overlay">
                <div class="socials">
                  <ul class="experts">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="team-list">
              <div class="team-info">
                <h5><a href="#">Janaton Doe</a></h5>
                <span>Math Teacher</span> </div>
            </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Attorney start --> 
    
    <!-- Our Blog -->
    <section class="section-padding white-bg blog-wrap">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="main-heading-holder">
          <div class="section-header">
            <div class="title">
              <h1>Our School <span>Blog</span></h1>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis ipsum, vestibulum quis sagittis lacinia, ultrices eu est. Vivamus vel egestas nibh. In tellus mauris, sodales ac dui in, condimentum dignissim dolor.</p>
          </div>
        </div>
        <!-- Main Heading --> 
        
        <!-- Our Blogs -->
        <div class="our-blogs"> 
          
          <!-- Img Post -->
          <div class="blog-post-holder">
            <div class="row no-gutters"> 
              
              <!-- Post Img -->
              <div class="col-lg-6">
                <div class="post-img"> <img src="images/img-01.jpg" alt="img-01"></div>
              </div>
              <!-- Post Img --> 
              
              <!-- Post Detail -->
              <div class="col-lg-6 pull-right">
                <div class="blog-post-detail">
                  <h3>The world today takes everything</h3>
                  <ul class="meta-post">
                    <li><i class="fa fa-user"></i>My Admin</li>
                    <li><i class="fa fa-clock-o"></i>6 days ago</li>
                    <li><i class="fa fa-comment"></i>10 Comments</li>
                  </ul>
                  <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat 
                    viverra. Ut dictum sagittis finibus.</p>
                  <div class="readmore"><a href="#">read more</a></div>
                </div>
              </div>
              <!-- Post Detail --> 
              
            </div>
          </div>
          <!-- Img Post --> 
          
          <!-- Slider Post -->
          <div class="blog-post-holder">
            <div class="row no-gutters"> 
              
              <!-- Post Detail -->
              <div class="col-lg-6 pull-right">
                <div class="post-img"> <img src="images/img-02.jpg" alt="img-03">
                  <div class="video-title-holder">
                    <div class="video-titel">
                      <div class="youtube" id="lR4tJr7sMPM-2"> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="blog-post-detail">
                  <h3>The world today takes everything</h3>
                  <ul class="meta-post">
                    <li><i class="fa fa-user"></i>My Admin</li>
                    <li><i class="fa fa-clock-o"></i>6 days ago</li>
                    <li><i class="fa fa-comment"></i>10 Comments</li>
                  </ul>
                  <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat 
                    viverra. Ut dictum sagittis finibus.</p>
                  <div class="readmore"><a href="#">read more</a></div>
                </div>
              </div>
              
              <!-- Post Detail --> 
              
            </div>
          </div>
          <!-- Slider Post --> 
          
        </div>
        <!-- Our Blogs --> 
        
      </div>
    </section>
    <!-- Our Blog --> 