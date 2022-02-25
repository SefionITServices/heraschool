    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/ui/'; ?>grid-gallery.css">
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
    <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2><?php  echo $row['title']; ?></h2>
                    <p><?php  echo $row['description']; ?></p>

                </div>
                <br>
                <div class="row">
                   <?php foreach ($images as $image) { ?>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="<?php echo base_url(); ?>uploads/frontend/gallery_images/<?php echo $image['image'];?>">
                            <img class="img-fluid image scale-on-hover" src="<?php echo base_url(); ?>uploads/frontend/gallery_images/<?php echo $image['image'];?>">
                        </a>
                    </div>
                                           <?php } ?>

                </div>
                   <?php echo $this->pagination->create_links(); ?>

            </div>
        </section>
        <?php } ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>