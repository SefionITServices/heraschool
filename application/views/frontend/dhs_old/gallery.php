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


    <!-- START EVENT -->
    <section class="our-event our-event-mbnone section-padding">
      <div class="container">
        <div class="row">
          <div class="section-title text-center">
            <h2>Albums</h2>
            <span></span>
            <p>Checkout Gallery Album.</p>
          </div>  
          <hr>      
           <?php foreach ($galleries as $row) {
                  $images = $this->frontend_model->get_frontend_gallery_images_limited($row['frontend_gallery_id']);
                ?>
 <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="event-slide event-slide-page">
              <div class="event-img">
                <img src="<?php echo base_url(); ?>uploads/frontend/gallery_images/<?php echo $row['image'];?>" alt="View">
                    
              </div>
              <div class="event-content">
               <h2><?php echo $row['title']; ?></h3>
                 <p> Posted: <?php echo date('d-m-Y', $row['date_added']); ?></p>
              <span><?php echo $row['description']; ?></span>
              <a href="<?php echo site_url('home/gallery_view/'.$row['frontend_gallery_id']);?>">View Album <i class="fas fa-eye"></i></a>
              </div>
            </div>
          </div><!--- END COL -->
           <?php } ?>
        </div><!-- END ROW -->
      </div><!-- END CONTAINER -->      
    </section>
    <!-- END EVENT -->




