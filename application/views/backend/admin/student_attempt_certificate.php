<?php 
$theme = $this->frontend_model->get_frontend_general_settings('theme');

    $id = $param2;
    $student = $this->db->get_where('student',array('student_id'=>$id))->row();
    $class_id = $this->db->get_where('enroll',array('student_id'=>$id))->row()->class_id;

 ?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <div id="certificate" class="container-fluid maindiv" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
    @media print {
  @page { margin-top: 20px; margin-bottom: 20px  margin-left: 30px;margin-right: 30px; }
 
}
</style>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <style>
        body {
            font-family: Calibri;
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
            font-size:20px;
            padding: 0 10px;
            line-height:3em;
            text-align:justify;
            letter-spacing:1.5px;
        }
        .ptext{
            font-size:20px;
        }
        .maindiv {
            /*border:2px double #000000;
            padding:10px;*/
            border: 5px solid transparent;
            padding: 20px;
            border-image: url(<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/cert_data/border.png) 30 round ;
            height:100vh;
        }
    </style>
        <div class="header row mb10">
            <div class="col-md-1" style="float:left;">
                <div style="width:168px;height:150px;overflow:hidden;">
                    <img src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/cert_data/logo.png" style="height:100%;width:100%;" />
                </div>
            </div>
            <div class="col-md-11" style="text-align:center;">
                <h3 class="headerfont">THE DAYADRA HIGHER SECONDARY SCHOOL, DAYADRA</h3>
                <h4 class="subheaderfont">AT. & POST. DAYADRA-392 020, TA.& DIST. BHARUCH</h4>
            </div>
        </div>
        <div class="row mb10">
            <div class="col-md-6 col-sm-6" style="float:left;">
                <b>S.S.C. Index No.</b> : 61.025
            </div>
            <div class="col-md-6 col-sm-6" style="text-align:right;">
                <b>H.S.C. Index No.</b> : 11.042
            </div>
        </div>
        <div class="row mb10">
            <h4 style="text-align:center;">
                <span class="attempt">ATTEMPT CERTIFICATE</span>
            </h4>
        </div>
        <div class="row mb10" style="margin-bottom:30px;">
            <div class="col-md-6 col-sm-6" style="float:left;">
                <b>Certificate No.</b> : 229
            </div>
            <div class="col-md-6 col-sm-6" style="text-align:right;">
                <b>G.R. No.</b> : 123456
            </div>
        </div>
        <div class="row mb10" style="margin-bottom:30px;">
            <p class="ctext">This is to Certify that Shri / Kumari <i><b><u><?php echo $student->first_name.' '.$student->middle_name.' '.$student->last_name; ?></u></b></i> <br />is/was the Student of New S.S.C. / H.S.C. Class in general or Science Stream and Passed Board Examintion with <b>First / Second / Third </b>attempt. He / She bears good moral Character  </p>
        </div>
        <div class="row mb10">
            <div class="col-md-12 ptext"><p>Place :  </p></div>
        </div>
        <div class="row mb10" >
            <div class="col-md-12 ptext"><p>Date :  </p></div>
        </div>
    </div>
<div align="center">
<button onclick="printData();" class="btn btn-primary"><i class="entypo-print"></i> Print</a></div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
   function printData()
{
   var divToPrint=document.getElementById("certificate");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})
</script>
</body>

</html>
