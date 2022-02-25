<?php
$footer_logo = $this->frontend_model->get_frontend_general_settings('footer_logo');
$social = $this->frontend_model->get_frontend_general_settings('social_links');
$links = json_decode($social);
?>
       <!--Footer Start-->
    <footer class="footer bg-style">
      <div class="container">
        <div class="footer-upper">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget about-widget"> <a href="#"> <img src="images/logo2.png" alt="Awesome Image"> </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean urna magna, mattis at ullamcorper in, pharetra in lorem. Etiam mollis.</p>
                <ul class="social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
                  <li><a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a> </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="footer-widget contact">
                <h3 class="title">Get in Touch</h3>
                <div class="widget-content">
                  <p>Lorem ipsum dolor sit amet, consectetur <br>
                    adipisicing elit sed do eiusmod. </p>
                  <ul class="contact-info">
                    <li><span class="icon fa fa-home"></span>1234 Lorem street, dollor <br>
                      Avenue,</li>
                    <li><span class="icon fa fa-phone"></span>(777) 123 4567</li>
                    <li><span class="icon fa fa-envelope"></span>info@school.com</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="footer-widget quick-links">
                <h3 class="title">Useful Link</h3>
                <ul>
                  <li><a href="about.html">About us</a> </li>
                  <li><a href="classes.html">Class Schedule</a> </li>
                  <li><a href="teacher.html">Teacher &amp; Staff</a> </li>
                  <li><a href="contact-us.html">Contact us</a> </li>
                  <li><a href="#.">Privacy policy </a> </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget opening-hour">
                <h3 class="title">Oppening Hours</h3>
                <ul class="day-time">
                  <li>Mon-Wed<span>08:00-02:00 </span> </li>
                  <li>Thr-Fri<span> 08:00-02:00</span> </li>
                  <li>Saturday<span>Closed</span> </li>
                  <li>Sunday<span>Closed</span> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer End--> 
 <!--Copyright Start-->
    <div class="footer-bottom text-center">
      <div class="container">
        <div class="copyright-text"><font color="#e31e24">The Dayadara Educational Society</font> &copy; 1959 - <?php echo date('Y') ?> | All Rights Reserved. Powered by <a href="http://360education.net">360 Education System</a>. Developed by <a href="http://www.sefion.com">Sefion IT Services</a></div>
      </div>
    </div>
    <!--Copyright Start--> 