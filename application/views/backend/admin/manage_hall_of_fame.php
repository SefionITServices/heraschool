
            <a href="javascript:;" onclick="showAjaxModal('<?php echo site_url('modal/popup/add_hall_of_fame/');?>');"
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	Add Hall of Fame
                </a>
                <br><br>
               <table class="table table-bordered datatable" id="hall_of_fame">
                    <thead>
                        <tr>
                            <th width="60"><div>Sr.</div></th>
                            <th width="80"><div><?php echo get_phrase('photo');?></div></th>
                            <th><div>Student name</div></th>
                            <th><div>Year</div></th>
                            <th><div>Board</div></th>
                            <th><div>Stream</div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                </table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($) {
        $.fn.dataTable.ext.errMode = 'throw';
        $('#hall_of_fame').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                "url": "<?php echo site_url('admin/get_hall_of_fame') ?>",
                "dataType": "json",
                "type": "POST",
            },
            "columns": [
                { "data": "id" },
                { "data": "student_name" },
                { "data": "year" },
                { "data": "board" },
                { "data": "stream" },
                { "data": "percentage" },
                { "data": "options" },
            ],
            "columnDefs": [
                {
                    "targets": [1,5],
                    "orderable": false
                },
            ]
        });
	});

 

    function hall_of_fame_delete_confirm(id) {
        confirm_modal('<?php echo site_url('admin/hall_of_fame/delete/');?>' + id);
    }

</script>
