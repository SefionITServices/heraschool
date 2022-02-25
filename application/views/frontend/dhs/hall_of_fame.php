
<div class="event-area three text-center pt-150 pb-150">
<div class="container">
<div class="row">
  <div class="col-lg-3">
    
  </div>
           <div class="col-lg-6">
            <form id="hof_data" action="post">
             <select name="year" class="form-control">
              <option>Select year</option>
               <?php
   
      foreach ($years as $row) {
       
       ?>
       <option><?php echo $row['year']; ?></option>
     <?php } ?>
                </select>
                </form>
               </div>
          
                
   <div class="col-lg-3">
     <button id="get_data" class="default-btn">View</button>
  </div>
  <br>
  <br>
  <br>
  <hr>
  <div style="padding-top: 5px;" class="row">

    <div class="col-lg-4" style="border-right:1px solid gray;height:100%;">
        <h1><div class="alert alert-primary" style="background: linear-gradient(90deg, rgba(77,211,255,1) 0%, rgba(77,121,246,1) 100%); color: white;" role="alert">10th Standard (SSC)</div></h1>
      <br>
      <br>
    
      <div id="ssc" class="col-lg-12">
          <div class="single-event mb-60">
            <div style="height:150px;background-color:black;background: linear-gradient(to bottom, #FF416C 0%, #FF4B2B 100%);" class="event-img">

                 <div class="course-hover">
                     <i class="fa fa-link"></i>
                 </div>

               <div class="event-date" style="width:100px;">
                 <h3 id="ssc_year"><?php echo $ssc->year; ?></h3>
              </div>

           </div>
              <div class="event-content text-left">
                  <h4><a href="javascript:void(0);" id="scc_name"><?php echo $ssc->student_name; ?></a></h4>
                  <h6>10th Standard (SSC)</h6>
                  <hr>
                  <div align="center">
                      <a class="default-btn" id="scc_percentage"><?php echo $ssc->percentage; ?> %</a>
                  </div>
              </div>
          </div>
      </div>

    </div>
    <div class="col-lg-4" style="border-right:1px solid gray;height:100%;">
      <h1>
        <div class="alert alert-info" style="background: linear-gradient(90deg, rgba(47,66,198,1) 29%, rgba(168,78,195,1) 59%);color: white;opacity: 80%;" role="alert">12th General Stream (HSC)</div>
      </h1>
      <br>
      <br>

      <div id="12general" class="col-lg-12">
          <div class="single-event mb-60">
            <div style="height:150px;background-color:black;background: linear-gradient(to bottom, #FF416C 0%, #FF4B2B 100%);" class="event-img">

                 <div class="course-hover">
                     <i class="fa fa-link"></i>
                 </div>

               <div class="event-date" style="width:100px;">
                 <h3 id="gen_year"><?php  echo $hsc_gen->year; ?></h3>
              </div>

           </div>
              <div class="event-content text-left">
                  <h4><a href="javascript:void(0);" id="gen_name"><?php echo $hsc_gen->student_name; ?></a></h4>
                  <h6 id="gen_stream">Group: <?php  echo $hsc_gen->stream;?></h6>
                  <hr>
                  <div align="center">
                      <a class="default-btn" id="gen_percentage"><?php  echo $hsc_gen->percentage; ?> %</a>
                  </div>
              </div>
          </div>
      </div>



    </div>
    <div class="col-lg-4">
      <h1><div class="alert alert-info" style="background: linear-gradient(90deg, rgba(21,31,103,1) 23%, rgba(49,194,203,1) 85%);color: white;opacity: 80%;" role="alert">12th Science Stream (HSC)</div></h1>
  <br>
  <br>

      <div id="12science" class="col-lg-12">
          <div class="single-event mb-60">
            <div style="height:150px;background-color:black;background: linear-gradient(to bottom, #FF416C 0%, #FF4B2B 100%);" class="event-img">

                 <div class="course-hover">
                     <i class="fa fa-link"></i>
                 </div>

               <div class="event-date" style="width:100px;">
                 <h3 id="sci_year"><?php  echo $hsc_sci->year; ?></h3>
              </div>

           </div>
              <div class="event-content text-left">
                  <h4 ><a href="javascript:void(0);" id="sci_name"><?php echo $hsc_sci->student_name; ?></a></h4>
                  <h6 id="sci_stream"><?php echo $hsc_sci->stream;?></h6>
                  <hr>
                  <div align="center">
                      <a class="default-btn" id="sci_percentage"><?php  echo $hsc_sci->percentage; ?> %</a>
                  </div>
              </div>
          </div>
      </div>
<div id="fetch_data"></div>

    </div>

</div>
</div>
</div>

<script>
 

$('#get_data').on('click', function () {
    let faction = "<?php echo base_url().'home/get_hof_data'; ?>";
    // console.log('insubmit', $(this).serialize());
    $.ajax({
        url:faction,
        type:'POST',
        data : $("#hof_data").serialize(),
        // contentType:false,
        // cache: false,
        // processData:false,
         beforeSend: function(){
       

       // $(".loader").show();
        //$("#button_text").hide();

   },
        success:function(res){
            //console.log(res);
 
            let ares = JSON.parse(res);
            if (ares.status) {
              var hofarr = ares.data;
              for (var i = hofarr.length - 1; i >= 0; i--) {
                
                if(hofarr[i].board == '10ssc')
              {
              $("#ssc_name").html(hofarr[i].student_name);
              $("#ssc_year").html(hofarr[i].year);
              $("#ssc_percentage").html(hofarr[i].percentage+' %');
              $("#ssc").show();
              }
              if(hofarr[i].board == '12science')
              {
              $("#sci_name").html(hofarr[i].student_name);
              $("#sci_year").html(hofarr[i].year);
              $("#sci_percentage").html(hofarr[i].percentage+' %');
              $("#sci_stream").html(hofarr[i].stream);
              $("#12_science").show()
              }
              
              
              if(hofarr[i].board == '12general')
              {
              $("#gen_name").html(hofarr[i].student_name);
              $("#gen_year").html(hofarr[i].year);
              $("#gen_percentage").html(hofarr[i].percentage+' %');
              $("#gen_stream").html(hofarr[i].streams);  
              $("#12general").show()
           
               }
               
               
               

              }

              


            
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
              //  window.location.href = ares.return_url;
        } else {
                if (ares.message) {

                     $(".loader").hide();
let msg_color = ares.msg_type;
 
let timerInterval

Swal.fire({
  type: ares.msg_type,
  title: ares.message,
  html: ares.details,
  showCloseButton: true,
 
  focusConfirm: false,
  confirmButtonText:
    '<i class="fa fa-thumbs-up"></i> Okay..',
  confirmButtonAriaLabel: 'Okay..'
})




                } else {
                    Swal.fire({
  type: 'error',
  title: 'Opps Something went wrong please try again',
  text: ''
})
                }
            }
        },
        error:function() {
            console.log('inerror');
        }
    });
});
</script>

