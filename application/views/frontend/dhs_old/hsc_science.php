<style type="text/css">
	/* Latest compiled and minified CSS included as External Resource*/

/* Optional theme */

/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/
 body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
<br>
<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Student Details</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Address</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>S.S.C Result</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Other details</small></p>
            </div>
        </div>
    </div>
    
    <form role="form" action="<?php echo site_url('home/hsc_admission'); ?>" method="post">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Student details</h3>
            </div>
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

          <div align="center"><button class="btn btn-primary nextBtn" type="button">Next</button></div>
                <br>
            </div>
        
               
            	
            		
            		

              


           
           


        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Address</h3>
            </div>
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
                           <div align="center">
                           	<a href="#step-1" class="btn btn-primary">Previous</a> 
                            <button class="btn btn-primary nextBtn" type="button">Next</button></div>
                <br> 
            	             </div> 
        

                        




        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">S.S.C Result / એસ.એસ.સી.નું પરિણામ </h3>
            </div>
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
                <div align="center"> <button class="btn btn-primary nextBtn" type="button">Next</button></div>
 
                </div>
               
            </div>
        
        








        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Other detail(s)</h3>
            </div>
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
            <div align="center"><button class="btn btn-success" type="submit">Finish!</button></div>
            
        </div>
    </div>
    </form>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#school_list').select2();
});
</script>