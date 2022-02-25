
<style type="text/css">
  .wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>
<div class="container">
  <div class="row">
    <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Student Details - Step 1">
                            <span class="round-tab">
                               1
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Address - Step 2">
                            <span class="round-tab">
                               2
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="S.S.C Result - Step 3">
                            <span class="round-tab">
                              3
                            </span>
                        </a>
                    </li>
                      <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab" title="Other details - Step 4">
                            <span class="round-tab">
                              4
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

    <form role="form" action="<?php echo site_url('home/hsc_admission/science'); ?>" method="post">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="panel-body">
              <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="form-group">
                    <label class="control-label">Student Full Name / વિદ્યાર્થી નું નામ</label>
                    <input type="text" required="required" class="form-control" name="full_name" placeholder="Full Name / વિદ્યાર્થી નું નામ"  />
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

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                       <div class="panel-body">
            <div class="row form-group">
                <div class="col-lg-4 col-xs-12">
                  
                           <label class="control-label">Full Address / પૂરેપૂરું સરનામું</label>
                               <input type="text" name="address_line1" class="form-control" required="required" placeholder="Address line 1" >
                        
                    </div>
              
                <div class="col-lg-4 col-xs-12">
                  
                           <label class="control-label"></label>
                               <input type="text" name="address_line2"  class="form-control"  placeholder="Address line 3" >
                        
                    </div>
                

                 <div class="col-lg-4 col-xs-12">
                  
                           <label class="control-label"></label>
                               <input type="text" name="address_line3" class="form-control" placeholder="Address line 3" >
                        
                    </div>
                </div>


                    <div class="row">
                      <div class="col-lg-4 col-xs-12 form-group">
                      
                       <label class="control-label">Village / ગામ </label><br>
                        <input type="text" name="village" class="form-control"  placeholder="Village / ગામ">

                        
                </div>  

                  <div class="col-lg-4 col-xs-12">
              
                
                    <label class="control-label">District / જિલ્લો </label>
                    <input maxlength="100" type="text" class="form-control" name="district" id="district" placeholder="District / જિલ્લો" />
                        
                               
                </div>
                
                <div class="col-lg-4 col-xs-12s">
              
                
                    <label class="control-label">PIN Code / પીનકોડ </label>
                    <input maxlength="100" type="text"  class="form-control" name="pin_code" id="pin_code" placeholder="Enter PIN Code / પીનકોડ" />
                        
                               
                </div>
                </div>
               <br>
                <div class="row form-group">
                  <div class="col-lg-4 col-xs-12s">
              
                
                    <label class="control-label">Mobile Number / મોબાઈલ નંબર </label>
                    <input maxlength="100" type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile Number / મોબાઈલ નંબર" />
                        
                               
                </div>
                </div>


                

                

                </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                          <div class="panel-body">

                <div class="row form-group">
                <div class="col-lg-4 col-xs-12">
                  
                           <label class="control-label">Maths / ગણિત </label>
                               <input type="text" name="maths" required="required" class="form-control"  placeholder="Marks out of 70" >
                        
                    </div>
              
                <div class="col-lg-4 col-xs-12">
                  
                           <label class="control-label">Science / વિજ્ઞાન અને ટેક. </label>
                               <input type="text" name="science"  class="form-control"  placeholder="Marks out of 70" required="required" >
                        
                    </div>
                

                 <div class="col-lg-4 col-xs-12">
                  
                           <label class="control-label">English / અંગ્રેજી </label>
                               <input type="text" name="english" class="form-control" placeholder="Marks out of 70" required="required" >
                        
                    </div>

                </div>
 
                </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                     <div class="tab-pane" role="tabpanel" id="step4">
                           <div class="panel-body">

              <div class="row form-group">
                <div class="col-lg-6 col-xs-12">
                  
                           <label class="control-label">Bank Name / બેન્કનું નામ </label>
                               <input type="text" name="bank_name"  class="form-control"  placeholder="Bank Name / બેન્કનું નામ" >
                        
                    </div>
                    

                     <div class="col-lg-6 col-xs-12">
                  
                           <label class="control-label">Account Number / ખાતા નંબર </label>
                               <input type="text" name="account_number"  class="form-control"  placeholder="Account Number / ખાતા નંબર" >
                        
                    </div>


                <div class="col-lg-6 col-xs-12">
                  
                           <label class="control-label">IFSC Code /IFSC કોડ નંબર </label>
                               <input type="text" name="ifsc_code"  class="form-control"  placeholder="IFSC Code / IFSC કોડ નંબર" >
                        
                    </div>
                       </div>

                       <div class="row form-group">
                <div class="col-lg-6 col-xs-12">
                  
                           <label class="control-label">Aadhar card number / આધાર કાર્ડ નંબર </label>
                               <input type="text" name="aadhar"  class="form-control"  placeholder="Aadhar number / આધાર કાર્ડ નંબર" >
                        
                    </div>
              
                <div class="col-lg-6 col-xs-12">
                  
                           <label class="control-label">BPL card number(Optional) /BPL કાર્ડ નંબર </label>
                               <input type="text" name="bpl_card"  class="form-control"  placeholder="BPL card number / BPL કાર્ડ નંબર" >
                        
                    </div>
                       </div>
            
        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="submit" class="btn btn-primary btn-info-full next-step">Submit</button></li>
                        </ul>
                    </div>
                        </form>

                   
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>