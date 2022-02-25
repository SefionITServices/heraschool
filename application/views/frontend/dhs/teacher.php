<?php
  $teacher = $this->db->get_where('teacher',array('show_on_website' => 1))->result_array();
?>

    <!-- Teacher Start -->
        <div class="teacher-area pt-150 pb-105">
            <div class="container">
                <div class="row">
                  <?php foreach ($teacher as $row) {
                    ?>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="JavaScript:Void(0)"><img style="max-height: 365px; max-width: 270px;" src="<?php echo base_url().'uploads/teacher_image/'.$row['teacher_id']; ?>.jpg" alt="teacher"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="JavaScript:Void(0)"><?php echo $row['name']; ?></a></h2>
                                <h4><?php echo $row['designation'] ?></h4>
                                <ul>
                                   Email: <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Teacher End -->