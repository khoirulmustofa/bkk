<?php
if (isset($page) && $page == 'Home') {
    ?>
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/revolution_slider/rs-plugin/css/settings.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/flexslider.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/colorbox/example2/colorbox.css">
<?php
} elseif (isset($page) && $page == 'Procedure') {
    ?>
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/flexslider.css">
<?php
} elseif (isset($page) && $page == 'Job Vacancy') {
    ?>
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/flexslider.css">
<?php
} elseif (isset($page) && $page == 'Galery') {
    ?>
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-social-buttons/social-buttons-3.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/flexslider.css">
<?php
} elseif (isset($page) && $page == 'About Us') {
    ?>
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/flexslider.css">
<?php

} elseif (isset($page) && $page == 'Registration') {
    ?>
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/bootstrap-social-buttons/social-buttons-3.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/flex-slider/flexslider.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/datepicker/css/datepicker.css">
<?php }?>