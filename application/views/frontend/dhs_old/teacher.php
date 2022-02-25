<?php
  $this->db->where('show_on_website', 1);
  $query = $this->db->get('teacher', $per_page, $this->uri->segment(3));
  $teachers = $query->result_array();
?>

    <!-- START TEAM --> 
    <section class="our_team our_team_mbnone section-padding">      
      <div class="container">
        <div class="row text-center">
          <div class="section-title">
            <h2>Our Teachers</h2>
            <span></span>
            <p></p>
          </div>
          <?php foreach ($teachers as $row) { ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single_team single_team_page">
              <img src="<?php echo base_url(); ?>uploads/teacher_image/<?php echo $row['teacher_id'];?>.jpg" alt=""/>
              <h4><?php echo $row['name']; ?></h4>
              <h5><?php echo $row['designation']; ?></h5>
              
             
             
            </div><!--- END SINGLE TEAM -->                     
          </div><!-- END COL -->  
          
       <?php } ?>           
        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->      
    </section>
    <!-- END TEAM -->