<?php
$header_logo = $this->frontend_model->get_frontend_general_settings('header_logo');

?>
<!--Header Start-->
    <div class="header-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="logo"><a href="index-2.html"><img style="max-height: 100px" src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/logo/dhs_logo.png" alt="DHS Logo"></a></div>
          </div>
          <div class="col-lg-8"> 
            
            <!--Navegation Start-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container"> <a class="navbar-brand" href="#">Menu</a>
                <div class="navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="index-2.html">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"> <a class="nav-link" href="about.html">About</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="classes.html">Classes</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="classes.html">Classes</a></li>
                        <li><a href="class-details.html">Singal Classes</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="gallery.html">Gallery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#.">Pages</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="about.html">About</a> </li>
                        <li><a href="teachers.html">Our Teacher</a></li>
                        <li><a href="pricing-table.html">Our Pricing</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="typoghrapy.html">Typoghrapy</a></li>
                        <li><a href="404-page.html">404</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="teachers.html">Teachers</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="teachers.html">Teachers</a></li>
                        <li><a href="teacher-details.html">Teachers Details</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="blog.html">Blog</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="blog.html">Blog with Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="contact-us.html">Contact</a> </li>
                  </ul>
                </div>
              </div>
            </nav>
            
            <!--Navegation End--> 
          </div>
        </div>
      </div>
    </div>
    <!--Header End--> 