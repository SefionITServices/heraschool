<!-- Footer -->
<footer class="main">
	&copy; 2018 <strong> <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?> | 360 Education</strong>
    Developed by
	<a href="http://sefion.com"
    	target="_blank">Sefion IT Services</a>
</footer>
