<!DOCTYPE html>
<!-- Template Name: Clip-One - Frontend | Build with Twitter Bootstrap 3 | Version: 1.5 | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
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
<link rel="shortcut icon"
	href="<?php echo base_url('/assets/ci-icon.ico');?>"
	type="image/x-icon">
<!-- end: META -->
<!-- start: MAIN CSS -->
<link rel="stylesheet"
	href="<?php echo base_url('template/').template(); ?>/plugins/bootstrap/css/bootstrap.min.css"
	media="screen">
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
		<?php include 'css_admin.php';?>
	</head>
<!-- end: HEAD -->
<body>
	<!-- start: HEADER -->
	<header>
		<!-- start: TOP BAR -->
		<div class="clearfix " id="topbar">
			<div class="container">
				<div class="row">
					<marquee>
						<h3> Selamat datang <?php echo ucwords( $this->session->userdata('nama_lengkap'))?>, anda sebagai <?php echo $this->session->userdata('login_mode')?></h3>
					</marquee>
				</div>
			</div>
		</div>
		<!-- end: TOP BAR -->
			<?php include 'menu_admin.php';?>
		</header>
	<!-- end: HEADER -->
	<!-- start: MAIN CONTAINER -->
		<?php echo $contents; ?>
		
		<!-- end: MAIN CONTAINER -->
	<!-- start: FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="newsletter">
						<h4>Newsletter</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
							hendrerit vehicula est, in consequat.</p>
						<form method="POST" action="#" id="newsletterForm">
							<div class="input-group">
								<input type="text" id="email" name="email"
									placeholder="Email Address" class="form-control"> <span
									class="input-group-btn">
									<button type="submit" class="btn btn-default">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-3">
					<h4>Latest Tweet</h4>
					<div class="twitter" id="tweet">
						<i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet,
						consectetur adipiscing elit. Donec hendrerit vehicula est, in
						consequat. <a href="#" class="time"> 12 Dec </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-details">
						<h4>Contact Us</h4>
						<ul class="contact">
							<li>
								<p>
									<i class="fa fa-map-marker"></i><strong>Address:</strong> 1234
									Street Name, City Name, United States
								</p>
							</li>
							<li>
								<p>
									<i class="fa fa-phone"></i><strong>Phone:</strong> (123)
									456-7890
								</p>
							</li>
							<li>
								<p>
									<i class="fa fa-envelope"></i><strong>Email:</strong> <a
										href="mailto:mail@example.com"> mail@example.com </a>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<h4>Follow Us</h4>
					<div class="social-icons">
						<ul>
							<li class="social-twitter tooltips" data-original-title="Twitter"
								data-placement="bottom"><a target="_blank"
								href="http://www.twitter.com"> Twitter </a></li>
							<li class="social-facebook tooltips"
								data-original-title="Facebook" data-placement="bottom"><a
								target="_blank" href="http://facebook.com"
								data-original-title="Facebook"> Facebook </a></li>
							<li class="social-linkedin tooltips"
								data-original-title="LinkedIn" data-placement="bottom"><a
								target="_blank" href="http://linkedin.com"
								data-original-title="LinkedIn"> LinkedIn </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<a class="logo" href="index.html"> CLIP<i class="clip-clip"></i>ONE
						</a>
					</div>
					<div class="col-md-7">
						<p>&copy; Copyright 2014 by Clip-One. All Rights Reserved.</p>
					</div>
					<div class="col-md-4">
						<nav id="sub-menu">
							<ul>
								<li><a href="#"> FAQ's </a></li>
								<li><a href="#"> Sitemap </a></li>
								<li><a href="#"> Contact </a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
	<!-- end: FOOTER -->
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
		<?php include 'js_admin.php';?>
		
	</body>
</html>