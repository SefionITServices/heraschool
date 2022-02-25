
	
	 <style type="text/css">

	.main_class {
            font-family: Calibri;
            font-size: 16px;
        }
        
        .headerfont {
            font-size: 20px;
        }

        .subheaderfont {
            font-size: 18px;
        }

        .p0 {
            padding: 0;
        }

        .attempt {
            padding: 10px;
            border: 1px solid #000000;
            border-radius:10px;
        }

        .mb10 {
            margin-bottom: 10px;
        }
        .ctext{
            font-family:Calibri;
            font-size:2rem;
            padding: 0 10px;
            line-height:3em;
            text-align:justify;
            letter-spacing:1.5px;
        }
        .ptext{
            font-size:1.5rem;
        }
        .maindiv {
            /*border:2px double #000000;
            padding:10px;*/
            border: 10px solid transparent;
            padding: 20px;
            border-image: url(border.png) 80 stretch ;
            height:100vh;
            overflow-y:auto;
        }

       
        table { 
                border-collapse: collapse; 
                width: 100%;
            float: left;
            border: 0px solid #000000;

            } 
            
            } 
            th, td { 
                 
                text-align:center; 
                
                padding:5px 
             
           
	@page {
   size: A4;
   margin: 10mm 10mm 10mm 10mm;
   width: 21cm;
  min-height: 29.7cm;
  padding: 2cm;
  margin: 1cm auto;
  border: 1px #D3D3D3 solid;
  border-radius: 5px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); 
       }
</style>
        <div class="header row mb10" style="margin-bottom:40px;">
            <div class="col-md-2" style="float:left;">
                <div style="width:200px;height:150px;overflow:hidden;">
                    <img src=" logo.png" style="height:100%;width:100%;" />
                </div>
            </div>

            <div class="col-md-10" style="text-align:center;margin-top:20px;">
                <h3 >THE DAYADRA HIGHER SECONDARY SCHOOL, DAYADRA</h3>
                <h4>
                	AT. & POST. DAYADRA-392 020, TA.& DIST. BHARUCH
                	
                </h4> 
                   <span style="font-size: 18px">
                           <b>Phone No. :1234566 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	       Email :abcxxccv@dhs.ac.in</b>
                    </span>
            </div>
        </div>
        <hr style="padding: 5px;">
        
            
            <div class="row mb10" style="margin-bottom:20px;">
            <h4 style="margin:0 auto;">
                <span class="attempt" style="font-size: 28px">Addmission From</span>
            </h4>
         </div>

        <div class="row mb10" style="margin-bottom:20px;">
            <div class="col-md-6 col-sm-6 ptext" style="float:left;">
                <b><br>Form No.</b> : abc222
            </div>
            <div class="col-md-6 col-sm-6 ptext" style="text-align:right;">
                <img src="<?php echo base_url(); ?>assets/themes/dhs/assets/form_img/photo.jpg" style="height: 150px; width: 150px; ">
            </div>
        </div>

        
        <div class="row mb10" style="margin-bottom:30px;">
            <div class="col-md-6 col-sm-6 ptext" style="float:left;">
                <b>Stream</b> : General(11th standard)</sub>
            </div>
            <div class="col-md-6 col-sm-6 ptext" style="text-align:right;">
                <b>Date</b> : <?php echo date(); ?>
            </div>
        </div>
           
            
        
   

	<table align="center" cellpadding="4px" border="1" style="font-size: 20px">

		<tr>
		    <td colspan="2"><b>Student Name (ગુજરાતી)</b> </td>
		    <td colspan="4"></td>
		</tr>
		<tr>
		    <td colspan="2"><b>Student Name (English)</b> </td>
		    <td colspan="4"><?php echo $data['student_name']; ?></td>
		</tr>
		<tr>
			<td colspan="2"><b>Birth Date</b> </td>
			<td colspan="4"><?php echo $birthdate; ?></td>
		</tr>
		<tr>
			<td colspan="2" ><b>Address</b> </td>
			<td colspan="4">1070, Vadi Street, Dayadara<br>Gujarat,<br>XTASDFCFGF 
				<b>Pin code :</b><?php echo $pin_code; ?></td>
		</tr>
		<tr>
		    <td colspan="2"><b>Father Name</b> : <?php echo $father_name; ?> </td>
		    <td colspan="4"><b>Mother Name </b> : <?php echo $mother_name; ?> </td>
		</tr>
		<tr>
		    <td colspan="2"><b>Mobile </b></td>
		    <td colspan="4"><?php echo $mobile; ?></td>
		</tr>
		<tr>
		    <td colspan="2"><b>Previous School</b> </td>
		    <td colspan="4"><?php echo $previous_school; ?></td>
		</tr>
		<tr>
		    <td colspan="2"><b>Caste</b> : <?php echo $caste; ?> </td>
		    <td colspan="4"><b>Do you have Caste certificate?</b> : <?php echo $caste_certi; ?></td>
			
		</tr>
		
		<tr>
			<td colspan="2"><b>Religion </b></td>
			<td colspan="4"><?php echo $religion; ?></td>
		</tr>

		<tr>
			<td colspan="2"><b>Father Occupation </b></td>
			<td colspan="4"><?php echo $father_occupation; ?></td>
		</tr>
            
                 <tr>
					<td colspan="2"><b>BPL Card Number</b></td>
					<td colspan="4"><?php echo $bpl_card; ?></td>
				</tr>


	    </table>  	
			<table align="center" cellpadding="3px" border="1" style="font-size: 20px">
				<tr>
			<td rowspan="2"><b>S.S.C Result</b></td>

			<td><b>Subject</b></td><td align="center"><b>Maths</b></td><td align="center"><b>Science</b></td><td align="center"><b>English</b></td><td align="center"><b>Total</b></td>
			<tr>
				<th>Marks</th><td align="center"><?php echo $Maths; ?></td><td align="center"><?php echo $science; ?></td><td align="center"><?php echo $english; ?></td><td align="center"><?php echo ($Maths+$science+$english); ?></td>
			</tr>
			</tr>
			</table>

			<table align="center" cellpadding="3px" border="1" style="font-size: 20px" >
				<tr>
				<td colspan="2" align="center"><b>Bank Details</b></td>
				</tr>
				<tr>
					<th>Bank Name</th>
					<td><?php echo $bank_name; ?></td>
				</tr>
				<tr>
					<th>Account Number</th>
					<td><?php echo $account_number; ?></td>
				</tr>
				<tr>
					<th>IFSC Code</th>
					<td><?php echo $ifsc_code; ?></td>
				</tr>
				<tr>
					<th>Aadhar Card Number</th>
					<td><?php echo $aadhar; ?></td>
				</tr>
				<tr>
					<td align="center"><br><br><b>________________<br>Parents Signature</b></td>
					<td align="center"><br><br><b>________________<br>Student Signature</b></td>
				</tr>
				
			</table>



			<div class="maindiv">
            
			<p style="text-align: center;font-size: 22px;"><b>Note : Submit following document copy with Registration from</b></p>

			<table align="center"  width="80%" style="font-size: 20px">
				<tr>
					<th><button type="button" class="btn" style="background-color:black; color: white; font-size: 18px;">1.L.C(Leaving Certificate)</button></th>
					<th><button type="button" class="btn" style="font-size: 16px;background-color:black; color: white;">2.10th Marksheet</button></th>
					<th><button type="button" class="btn" style="font-size: 16px;background-color:black; color: white;">3.Aadhar Card</button></th>
					
					<th><button type="button" class="btn" style="font-size: 16px;background-color:black; color: white;">4.Caste certificate</button></th>
					<th><button type="button" class="btn" style="font-size: 16px;background-color:black; color: white;">5.Copy of Bank passbook (Bake details page)</button></th>
					
				</tr>
				</div>
				
			</table>
        

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
