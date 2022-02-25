<div class="row">
	<div class="col-md-8">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					Hall of Fame
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open(site_url('admin/hall_of_fame/create/') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>

						<div class="col-sm-5">
							<input type="text" placeholder="Student name" class="form-control" name="student_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
						</div>
					</div>

					

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Board</label>

						<div class="col-sm-5">
							<select name="board" class="form-control" data-validate="required" id="board"
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="get_stream(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                             <option value="12science">12th Science (HSC)</option>
                             <option value="12general">12th General (HSC)</option>
                             <option value="10ssc">10th (SSC)</option>
                          </select>
						</div>
					</div>

				<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Stream</label>

						<div class="col-sm-5">
							<select id="stream" name="stream" class="form-control" data-validate="required" id="board"
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value="">Select Board first</option>
                            
                          </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Year</label>
		                    <div class="col-sm-5">

			                    <input type="text" id="year" class="form-control" name="year" placeholder="Passing year">
			                </div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Highest Percentage</label>
		                    <div class="col-sm-5">

			                    <input type="text" id="percentage" placeholder="%" class="form-control" name="percentage" value="">
			                </div>
					</div>

				
				


			<!-- 		<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div> -->

					<!-- Parrent -->
				               

                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info">Add</button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
		<blockquote class="blockquote-blue">
			<p>
				<strong>Notes</strong>
			</p>
			<p>
				<li>
					Please add <b>Topper Student details</b>.
				</li>
			</p>
		</blockquote>
	</div>

</div>
<script type="text/javascript">
	function get_stream(val)
	{
		if(val == '12general')
		{
			$("#stream").html("<option>Arts</option><option>Commerce</option>");
		}
		if(val == '12science')
		{
			$("#stream").html("<option>Mathematics</option><option>Biology</option>");
		}
		if(val == '10scc')
		{
			$("#stream").html("<option>SSC</option>");
		}
	}
</script>

 
