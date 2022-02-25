<hr />
<div align="center">
    <button data-loading-text="Saving..."
    class="save_form btn btn-primary  btn-lg">
        <i class="entypo-floppy"></i>
        <?php echo get_phrase('save');?>
    </button></div>
<br>

<div class="row">
    <div class="col-md-12">

        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#home" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-users"></i></span>
                    <span class="hidden-xs"><?php echo get_phrase('all_students');?></span>
                </a>
            </li>
        <?php
           $query = $this->db->get_where('admission' , array('stream' => 'science' , 'village' => 'dayadara'));
            if ($query->num_rows() > 0):
                $std = $query->result_array();
                
        ?>
            <li>
                <a href="#dayadara" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                    <span class="hidden-xs">Dayadara Student(s)</span>
                </a>
            </li>
        <?php endif;?>

        <?php
           $query = $this->db->get_where('admission' , array('stream' => 'science' , 'status' => 1));
            if ($query->num_rows() > 0):
                $std = $query->result_array();
                
        ?>
            <li>
                <a href="#approved" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                    <span class="hidden-xs">Approved Student(s)</span>
                </a>
            </li>
        <?php endif;?>



        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">

                                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="40"><div><?php echo get_phrase('sr');?></div></th>
                            <th width="80"><div><?php echo get_phrase('Form_no');?></div></th>
                            <th width="80"><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('total');?></div></th>
                            <th class="span3"><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('decision')?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//$students   =   $this->db->get_where('admission' , array('stream' => 'science'))->result_array();
         
         $query = "SELECT * FROM admission WHERE stream='science'";

                        $students = $this->db->query($query)->result_array();
                                $sr = 0;
                                //var_dump($students);die;
                                foreach($students as $row)
{
    $sr++;
                                    ?>
                                     <form method="post" id="admission_form" action="<?php echo base_url().'admin/admission_approve'; ?>">
                       
                        <tr>
                            <td><?php echo $sr;  ?>
                          </td>

                            <td><?php echo $row['form_number']; ?><input type="hidden" value="<?php echo $row['form_number']; ?>" name="form_number"></td>
                            <td>
                                <?php
                                    echo $row['full_name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    
                                 echo $row['maths']+$row['science']+$row['english'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['address_line1'].', '.$row['address_line2'].', '.$row['address_line3']
                                ?>
                            </td>

                            <td>
                               <!--  <button class="btn btn-success">Approve</button> 
                                <button class="btn btn-danger">Disapprove</button> -->
                                <input class="approve" type="checkbox" name="status" id="status" value="1" <?php if($row['status'] == 1) { echo 'checked';} ?>> Approve
                            </td>

                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT MARKSHEET LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_marksheet/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('mark_sheet');?>
                                                </a>
                                        </li>


                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_profile/'.$row['student_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['student_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/student_id/'.$row['student_id']);?>');">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_id');?>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo site_url('modal/popup/student_attempt_certificate/'.$row['student_id'].'/'.$class_id);?>">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_attemtp_certificate');?>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('admin/delete_student/'.$row['student_id'].'/'.$class_id);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php }?>
                    </form>
                    </tbody>
                </table>

            </div>
        <?php
            /*$query = $this->db->get_where('section' , array('class_id' => $class_id));
            if ($query->num_rows() > 0):
                $sections = $query->result_array();
                foreach ($sections as $row):
*/        ?>
            <div class="tab-pane" id="dayadara">

                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="40"><div><?php echo get_phrase('sr');?></div></th>
                            <th width="80"><div><?php echo get_phrase('Form_no');?></div></th>
                            <th width="80"><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('total');?></div></th>
                            <th class="span3"><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('decision')?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//$students   =   $this->db->get_where('admission' , array('stream' => 'science'))->result_array();
         
         $query = "SELECT * FROM admission WHERE stream='science' AND village='dayadara'";

                        $students = $this->db->query($query)->result_array();
                                $sr = 0;
                                //var_dump($students);die;
                                foreach($students as $row)
{
    $sr++;
                                    ?>
                        <tr>
                            <td><?php echo $sr;  ?>
                          </td>

                            <td><?php echo $row['form_number']; ?></td>
                            <td>
                                <?php
                                    echo $row['full_name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    
                                 echo $row['maths']+$row['science']+$row['english'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['address_line1'].', '.$row['address_line2'].', '.$row['address_line3']
                                ?>
                            </td>

                            <td>
                               <!--  <button class="btn btn-success">Approve</button> 
                                <button class="btn btn-danger">Disapprove</button> -->
                                <input type="checkbox" name="decision"> Approve
                            </td>

                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT MARKSHEET LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_marksheet/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('mark_sheet');?>
                                                </a>
                                        </li>


                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_profile/'.$row['student_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['student_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/student_id/'.$row['student_id']);?>');">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_id');?>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo site_url('modal/popup/student_attempt_certificate/'.$row['student_id'].'/'.$class_id);?>">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_attemtp_certificate');?>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('admin/delete_student/'.$row['student_id'].'/'.$class_id);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                           </div>
        


        <div class="tab-pane" id="approved">

                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="40"><div><?php echo get_phrase('sr');?></div></th>
                            <th width="80"><div><?php echo get_phrase('Form_no');?></div></th>
                            <th width="80"><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('total');?></div></th>
                            <th class="span3"><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('decision')?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//$students   =   $this->db->get_where('admission' , array('stream' => 'science'))->result_array();
         
         $query = "SELECT * FROM admission WHERE stream='science' AND status='1'";

                        $students = $this->db->query($query)->result_array();
                                $sr = 0;
                                //var_dump($students);die;
                                foreach($students as $row)
{
    $sr++;
                                    ?>
                        <tr>
                            <td><?php echo $sr;  ?>
                          </td>

                            <td><?php echo $row['form_number']; ?></td>
                            <td>
                                <?php
                                    echo $row['full_name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    
                                 echo $row['maths']+$row['science']+$row['english'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['address_line1'].', '.$row['address_line2'].', '.$row['address_line3']
                                ?>
                            </td>

                            <td>
                               <!--  <button class="btn btn-success">Approve</button> 
                                <button class="btn btn-danger">Disapprove</button> -->
                                <input type="checkbox" name="decision"> Approve
                            </td>

                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- STUDENT MARKSHEET LINK  -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_marksheet/'.$row['student_id']);?>">
                                                <i class="entypo-chart-bar"></i>
                                                    <?php echo get_phrase('mark_sheet');?>
                                                </a>
                                        </li>


                                        <!-- STUDENT PROFILE LINK -->
                                        <li>
                                            <a href="<?php echo site_url('admin/student_profile/'.$row['student_id']);?>">
                                                <i class="entypo-user"></i>
                                                    <?php echo get_phrase('profile');?>
                                                </a>
                                        </li>

                                        <!-- STUDENT EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_student_edit/'.$row['student_id']);?>');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/student_id/'.$row['student_id']);?>');">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_id');?>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo site_url('modal/popup/student_attempt_certificate/'.$row['student_id'].'/'.$class_id);?>">
                                                <i class="entypo-vcard"></i>
                                                <?php echo get_phrase('generate_attemtp_certificate');?>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="#" onclick="confirm_modal('<?php echo site_url('admin/delete_student/'.$row['student_id'].'/'.$class_id);?>');">
                                            <i class="entypo-trash"></i>
                                              <?php echo get_phrase('delete');?>
                                          </a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                           </div>
        

        </div>


    </div>
</div>
<hr />
<div align="center">
    <button data-loading-text="Saving..."
    class="save_form btn btn-primary  btn-lg">
        <i class="entypo-floppy"></i>
        <?php echo get_phrase('save');?>
    </button></div>


<script type="text/javascript">

	jQuery(document).ready(function($) {
        $('.datatable').DataTable();
	});

</script>
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-green',
    radioClass: 'iradio_square-green',
    increaseArea: '20%' // optional
  });
});
</script>

<script type="text/javascript">
    
 $(function () {
       $('.save_form').click(function(){


       
 // console.log(Status);
    let faction = "<?php echo base_url().'admin/admission_approve' ?>";
    // console.log('insubmit', $(this).serialize());
    $.ajax({
        url:faction,
        type:'POST',
        data : $('#admission_form').serialize(),
        // contentType:false,
        // cache: false,
        // processData:false,
         beforeSend: function(){

   },
        success:function(res){
            //$("#loader").hide();
        //$("#submit").show();
      //  console.log(res);
            let ares = JSON.parse(res);
          //  console.log(ares.status);
            if (ares.status) {
           
                 toastr["success"](ares.message)

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "500",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
/*Swal.fire({
  position: 'top-end',
  type: 'success',
  title: 'Invoice Created',
  showConfirmButton: false,
  timer: 1500
})*/
                //window.location.href = ares.return_url;
        } else {
                if (ares.message) {

                     //$(".loader").hide();
alert(ares.message);




                } else {
                   alert('error');
                }
            }
        },
        error:function() {
            console.log('inerror');
        }
    });
});

});

</script>