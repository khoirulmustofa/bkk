<?php
if (isset($page) && $page == 'Home') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
<?php
} elseif (isset($page) && $page == 'Procedure') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/ckeditor.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/adapters/jquery.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				CKEDITOR.disableAutoInline = true;
		        $('textarea.ckeditor').ckeditor();
		        $('.date-picker').datepicker({
		            autoclose: true
		        });
				Main.init();
			});
		</script>
<?php
} elseif (isset($page) && $page == 'Galery') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
<?php
} elseif (isset($page) && $page == 'Job Vacancy') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/ckeditor.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/adapters/jquery.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				CKEDITOR.disableAutoInline = true;
		        $('textarea.ckeditor').ckeditor();
		        $('.date-picker').datepicker({
		            autoclose: true
		        });
				Main.init();
			});
		</script>
<?php
} elseif (isset($page) && $page == 'Member') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/ckeditor.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/adapters/jquery.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript">
			jQuery(document).ready(function() {
				CKEDITOR.disableAutoInline = true;
		        $('textarea.ckeditor').ckeditor();
		        $('.date-picker').datepicker({
		            autoclose: true
		        });
				Main.init();
			});

			function ShowHidePassword(id_cek_password) {
		        var password_member = document.getElementById("password_member");
		        password_member.style.display = id_cek_password.checked ? "block" : "none";
		        password_member.value = id_cek_password.checked ? "" : "";
		    }
		</script>
<?php
}
elseif (isset($page) && $page == 'About Us') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/ckeditor.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/adapters/jquery.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				CKEDITOR.disableAutoInline = true;
		        $('textarea.ckeditor').ckeditor();
		        $('.date-picker').datepicker({
		            autoclose: true
		        });
				Main.init();
			});
		</script>
<?php
}elseif (isset($page) && $page == 'Company') {
    ?>

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/ckeditor.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/ckeditor/adapters/jquery.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				CKEDITOR.disableAutoInline = true;
		        $('textarea.ckeditor').ckeditor();
		        $('.date-picker').datepicker({
		            autoclose: true
		        });
				Main.init();
			});
		</script>
<?php
}?>
