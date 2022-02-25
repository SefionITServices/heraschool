<?php
if($gallery_id == '')
{
    redirect(site_url('home/gallery'), 'refresh');
}
  $gallery_info = $this->frontend_model->get_gallery_info_by_id($gallery_id);
  foreach ($gallery_info as $row) {
    $this->db->where('frontend_gallery_id', $row['frontend_gallery_id']);
    $this->db->order_by('frontend_gallery_image_id', 'DESC');
    $query = $this->db->get('frontend_gallery_image', $per_page, $this->uri->segment(4));
    $images = $query->result_array();
?>
  <nav aria-label="breadcrumb"">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo site_url('home/').$page_name; ?>"><?php echo $page_title; ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title']; ?></li>
  </ol>
</nav>

        <!-- START PORTFOLIO -->
        <section id="portfolio" class="template_portfolio template_portfolio_mbnone section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h2>Album: <?php  echo $row['title']; ?></h2>
                        
                        <p><?php  echo $row['description']; ?>.</p>
                        <span></span>
                    </div>                      
                  
                    <!-- END PORTFOLIO FILTER-->
                    <div class="grid">
                        <?php foreach ($images as $image) { ?>
                        <div class="col-md-4 col-sm-4 mix class painting">
                               <div class="image-wrapper">
                                    <img src="<?php echo base_url(); ?>uploads/frontend/gallery_images/<?php echo $image['image'];?>" class="img-responsive" alt="work">
                               <div class="image-overlay">
                                   <span>
                                   <a href="<?php echo base_url(); ?>uploads/frontend/gallery_images/<?php echo $image['image'];?>" class="image-popup"><i class="fa fa-picture-o"></i></a>
                                   </span>
                                </div>
                              </div>
                        </div> <!--work item-->
                         <?php } ?>
                     </div><!--/.grid-->        
                </div><!--- END ROW -->             
            </div><!--- END CONTAINER -->
        </section>
        <!-- START PORTFOLIO -->
        <span><hr></span>
    
<div align="center">
        <nav>
  <ul class="pagination justify-content-center">
     
   <?php echo $this->pagination->create_links(); ?>
  </ul>
</nav>
</div>
<?php } ?>