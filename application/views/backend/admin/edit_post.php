<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('addmission_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open(site_url('admin/post/edit/'.$data->post_id) , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Post Title</label>

						<div class="col-sm-5">
							<input onkeyup="mkurl();" value="<?php echo $data->post_title; ?>" type="text" id="post_title" class="form-control" name="post_title" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Url</label>

						<div class="col-sm-5">
							<input type="text" value="<?php echo $data->post_url; ?>" id="post_url" class="form-control" name="url" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php if(!empty($data->featured_image)) { echo base_url()."uploads/post/".$data->featured_image ;} else { echo "http://placehold.it/200x200"; } ?>" alt="Title">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="featured_image" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Description</label>

						<div class="col-sm-8">
							  <textarea id="texteditor" name="post_data"><?php echo $data->post_data; ?></textarea>

						</div>
					</div>


                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info">Update Post</button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
  

</div>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo site_url('admin/get_class_section/');?>' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>

<script>
$('input:radio[name="parentsyes"]').change( function(){
    // console.log('changed');
    if ($(this).is(':checked') && $(this).val() == 'yes') {
        // append goes here
        $('#parentsDetails').fadeIn();
    } else {
        $('#parentsDetails').fadeOut();
    }
});

function mkurl()
{
var str = $("#post_title").val();
 str = str.replace(/\s+/g, '_');
 $("#post_url").val(str.toLowerCase());
}
 </script> 
