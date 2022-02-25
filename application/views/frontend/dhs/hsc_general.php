
<br>
<div class="container">
    
        <link href="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/fw/css/smart_wizard.css" rel="stylesheet" type="text/css" />

    <!-- Optional SmartWizard theme -->
    <link href="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/fw/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/fw/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/fw/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Student Details</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Address</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>S.S.C Result</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Other details</small></a></li>
            </ul>

            <div>
                <div id="step-1">
                      
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="form-group">
                    <label class="control-label">Student Full Name / વિદ્યાર્થી નું નામ</label>
                    <input type="text" required class="form-control" id="full_name" name="full_name" placeholder="Full Name / વિદ્યાર્થી નું નામ"  />
                        <div class="help-block with-errors"></div>
                </div>
                </div>
                

              </div>

                <div class="row form-group">
                <div class="col-xs-12 col-lg-6">
                    <div class="form-group">
                    <label class="control-label">Father Name / પિતાનું  નામ </label>
                    <input type="text" class="form-control" name="father_name" placeholder="Father Name/ પિતાનું  નામ "  />
                </div>
                </div>
                <div class="col-xs-12 col-lg-6">
                    <div class="form-group">
                    <label class="control-label">Mother Name / માતાનું  નામ </label>
                    <input type="text" class="form-control" name="mother_name" placeholder="Mother Name/ માતાનું  નામ"  />
                </div>
                   </div>

              </div>
              <div class="row ">
                <div class="col-xs-12 col-lg-4">
                  <label class="control-label">Birthdate / જન્મ તારીખ</label><br>
                <input type="date" class="form-control" name="birthdate"  id="datepiker">
                  </div>
                  
                </div>
                <div class="row form-group"><br>

                  <div class="col-xs-12 col-lg-4">
                         <label class="control-label">Caste / જાતિ (એલ.સી મુજબ)</label><br>
                        <input type="radio" name="caste" value="sc">&nbsp;SC
                          &nbsp;&nbsp;
                          <input type="radio" name="caste" value="st">&nbsp;ST  &nbsp;&nbsp;
                          &nbsp;&nbsp;
                          <input type="radio" name="caste" value="obc">&nbsp;OBC&nbsp;&nbsp;
                          &nbsp;&nbsp;
                          <input type="radio" name="caste" value="other">&nbsp;OTHER&nbsp;&nbsp;
                     </div>
                     <div class="form-group col-lg-8 col-xs-12">
                      <label class="control-label">Do you have Caste certificate? / જાતિ પ્રમાણપત્ર છે કે કેમ ?</label><br>
                      <input type="radio" name="caste_certi" value="yes" >&nbsp;YES/ હા&nbsp;&nbsp;
                      <input type="radio" name="caste_certi" value="no" >&nbsp;NO/ ના&nbsp;&nbsp;
                     </div>

                </div>
                <div class="row form-group">
                  <div class="col-xs-12 col-lg-4">
                  <label class="control-label">Religion / ધર્મ / પેટાજાતિ </label><br>
                <input type="text" class="form-control" name="religion"  id="datepiker" placeholder="Religion/ ધર્મ / પેટાજાતિ ">
                  </div>
                  <div class="col-xs-12 col-lg-4">
                  <label class="control-label">Father Occupation / પિતા નો વ્યવસાય (ધંધો)</label><br>
                <input type="text" class="form-control" name="father_occupation" id="father_occupation" placeholder="Father Occupation / પિતા નો વ્યવસાય (ધંધો)">
                  </div>
                </div>
                
                <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="form-group">
                    <label class="control-label">Previous School / છેલ્લી શારાનું નામ અને સરનામું </label>  
                    <select id="school_list"  name="previous_school" class="school_list form-control">
                      <option>Select previous School</option>
                     <?php 
                     $query = $this->db->get_where('school_list',array('ssc' => 'yes'))->result_array();
                    
                     foreach ($query as $row) {
                     ?>
                     <option value="<?php echo $row['id']; ?>"><?php echo $row['school_name']; ?></option>
                     <?php } ?>
                    </select>


                </div>
                </div>
                </div>




 
              

  </div>

          
                </div>
                <div id="step-2">
                    <h2>Your Name</h2>
                    <div id="form-step-1" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div id="step-3">
                    <h2>Your Address</h2>
                    <div id="form-step-2" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div id="step-4" class="">
                    <h2>Terms and Conditions</h2>
                    <p>
                        Terms and conditions: Keep your smile :)
                    </p>
                    <div id="form-step-3" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="terms">I agree with the T&C</label>
                            <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/fw/js/jquery.smartWizard.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){
                                                    if( !$(this).hasClass('disabled')){
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Oops we still have error in the form');
                                                                return false;
                                                            }else{
                                                                alert('Great! we are ready to submit form');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){
                                                    $('#smartwizard').smartWizard("reset");
                                                    $('#myForm').find("input, textarea").val("");
                                                });



            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){
                    $('.btn-finish').removeClass('disabled');
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });

        });
    </script>
<br>
</div>
<script type="text/javascript">
  function validate()
  {
    event.preventDefault()
  var full_name = $(this).attr('full_name');
  if(full_name== ''){
  Swal.fire({
  title: 'Please enter full name',
  text: "Required..",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'OK'
}).then((result) => {
  if (result.value) {
    location.href = "#some"; 

    
  }
})
}}
</script>