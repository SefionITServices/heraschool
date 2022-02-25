
            <a href="javascript:;" onclick="showAjaxModal('<?php echo site_url('modal/popup/add_hall_of_fame/');?>');"
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	Add Post
                </a>
                <br><br>
               <table class="table table-bordered datatable" id="posts">
                    <thead>
                        <tr>
                            <th width="60"><div>Sr.</div></th>
                            <th width="80"><div><?php echo get_phrase('photo');?></div></th>
                            <th><div>Title</div></th>
                            <th><div>Category</div></th>
                            <th>Created</th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                </table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($) {
        $.fn.dataTable.ext.errMode = 'throw';
        $('#posts').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                "url": "<?php echo site_url('admin/get_posts') ?>",
                "dataType": "json",
                "type": "POST",
            },
            "columns": [
                { "data": "id" },
                { "data": "photo" },
                { "data": "post_title" },
                { "data": "category" },
                { "data": "created" },
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

 

    function post_delete_confirm(id) {
        confirm_modal('<?php echo site_url('admin/post/delete/');?>' + id);
    }

</script>
