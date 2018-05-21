<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
<title><?php echo $page;?> | BKK Khoirul Mustofa</title>
<!-- start: META -->
<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="" name="description" />
<meta content="" name="author" />

<!-- end: META -->
<!-- start: MAIN CSS -->
<link rel="shortcut icon"
	href="<?php echo base_url('/assets/favicon.ico');?>"
	type="image/x-icon">
<link
	href="<?php echo base_url('template/').template(); ?>/plugins/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" media="screen">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/fonts/style.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/animate.css/animate.min.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/css/main.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/css/main-responsive.css">
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/css/theme_blue.css"
	type="text/css" id="skin_color">
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<?php include "css.php"; ?>
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: HTML5SHIV FOR IE8 -->
<!--[if lt IE 9]>
		<script src="<?php echo base_url('template/').template(); ?>/plugins/html5shiv.js"></script>
		<![endif]-->
<!-- end: HTML5SHIV FOR IE8 -->
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body
	style="background-image: url('template/clipfront/images/bg_2.png');">
	<div
		class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<div class="logo">
			CLIP<i class="clip-clip"></i>ONE
		</div>
		<!-- start: LOGIN BOX -->
		<div class="box-login">
			<h3>Sign in to your account</h3>
			<?php
if ($this->session->userdata('message') != '') {
    ?>
    <div class="alert alert-danger">
				<button data-dismiss="alert" class="close">×</button>
				<i class="fa fa-check-circle"></i>
						<?php echo $this->session->userdata('message');?>
					</div>        
        <?php
}
?>	
			
			<p>Please enter your name and password to log in.</p>
			<form class="form-login" action="<?php echo $action; ?>"
				method="post">
				<div class="errorHandler alert alert-danger no-display">
					<i class="fa fa-remove-sign"></i> You have some form errors. Please
					check below.
				</div>
				<fieldset>
					<div class="form-group">
						<span class="input-icon"> <input type="text" class="form-control"
							name="id_bkk" id="id_bkk" placeholder="Id Bkk"
							value="<?php echo $id_bkk; ?>" /><i class="fa fa-user"></i>

						</span>
						<?php echo form_error('id_bkk') ?>
						<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
						<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
					</div>
					<div class="form-group form-actions">
						<span class="input-icon"> <input type="password"
							class="form-control password" name="password_member"
							id="password_member" placeholder="Password"
							value="<?php echo $password_member; ?>" /> <i class="fa fa-lock"></i>
							<a class="forgot"
							href="<?php echo base_url('login/forgot_password')?>"> I forgot
								my password </a>

						</span>
						<?php echo form_error('password_member') ?>
					</div>

					<div class="form-actions">
						<!-- <label for="remember" class="checkbox-inline"> <input
							type="checkbox" class="grey remember" id="remember"
							name="remember"> Keep me signed in
						</label> -->
						<a class="btn btn-dark-grey" href="<?php echo base_url('home')?>">
							Back <i class="fa fa-arrow-circle-left"></i>
						</a>
						<button type="submit" class="btn btn-bricky pull-right">
							Login <i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
					<!-- <div class="new-account">
							Don't have an account yet?
							<a href="?box=register" class="register">
								Create an account
							</a>
						</div> -->
				</fieldset>
			</form>
		</div>
		<!-- end: LOGIN BOX -->
		<!-- start: FORGOT BOX -->
		<!-- end: FORGOT BOX -->

		<!-- end: REGISTER BOX -->
		<!-- start: COPYRIGHT -->
		<div class="copyright">2014 &copy; clip-one by cliptheme.</div>
		<!-- end: COPYRIGHT -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('template/').template(); ?>/plugins/respond.min.js"></script>
		<script src="<?php echo base_url('template/').template(); ?>/plugins/excanvas.min.js"></script>
		<script src="<?php echo base_url('template/').template(); ?>/plugins/html5shiv.js"></script>
		<script type="text/javascript" src="<?php echo base_url('template/').template(); ?>/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
	<!--[if gte IE 9]><!-->
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
	<!--<![endif]-->
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/jquery.transit/jquery.transit.js"></script>
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/jquery.appear/jquery.appear.js"></script>
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/blockUI/jquery.blockUI.js"></script>
	<script
		src="<?php echo base_url('template/').template(); ?>/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script
		src="<?php echo base_url('template/').template(); ?>/js/main.js"></script>
	<!-- end: MAIN JAVASCRIPTS -->
		<?php include "js.php"; ?>
</body>
<!-- end: BODY -->
</html>