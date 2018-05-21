<?php
if (isset($page) && $page == 'Home') {
    ?>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/stellar.js/jquery.stellar.min.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/colorbox/jquery.colorbox-min.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/js/index.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function() {
        Main.init();
        Index.init();
        $.stellar();
    });
        </script>
<?php
} elseif (isset($page) && $page == 'Procedure') {
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
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
<?php
} else if (isset($page) && $page == 'Galery') {
    ?>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/mixitup/src/jquery.mixitup.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				Main.init();
				$('#Grid').mixitup();
			});
		</script>
<?php
} else if (isset($page) && $page == 'Registration') {
    ?>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript">
			jQuery(document).ready(function() {
				$('.date-picker').datepicker({
		            autoclose: true
		        });
				Main.init();
				
			});
		</script>
<?php
} else if (isset($page) && $page == 'About Us') {
    ?>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url('template/').template(); ?>/plugins/mixitup/src/jquery.mixitup.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
			jQuery(document).ready(function() {
				Main.init();
				$('#Grid').mixitup();
			});
		</script>
<?php }?>