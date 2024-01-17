<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>
</div>
<!-- /main content -->
</div>
<!-- /page content -->
</div>
<!-- /page container -->
<!-- Footer -->
<div class="navbar navbar-default navbar-fixed-bottom footer" style="background-color: #061536;">
	<div class="navbar-collapse collapse" id="footer">
		<div class="navbar-text" style="color: white;">
			<b>Copyright &copy; <?php echo date('Y'); ?> | <a href="https://www.smasejahtera1depok.sch.id" class="navbar-link" style="color: white;">SMA SEJAHTERA 1 DEPOK</b></a>
		</div>
	</div>
</div>
<!-- /footer -->

</html>