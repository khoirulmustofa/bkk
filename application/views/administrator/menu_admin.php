<div role="navigation"
	class="navbar navbar-default navbar-fixed-top space-top">
	<!-- start: TOP NAVIGATION CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<!-- start: RESPONSIVE MENU TOGGLER -->
			<button data-target=".navbar-collapse" data-toggle="collapse"
				class="navbar-toggle" type="button">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<!-- end: RESPONSIVE MENU TOGGLER -->
			<!-- start: LOGO -->
			<a class="navbar-brand" href="index.html"> CLIP<i class="clip-clip"></i>ONE
			</a>
			<!-- end: LOGO -->
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
							<?php echo (isset($page) && $page == 'Home') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/home'), 'Home');?></li>				
        					<?php echo (isset($page) && $page == 'Procedure') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/procedure'), 'Procedure');?></li>
        					<?php echo (isset($page) && $page == 'Job Vacancy') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/jobvacancy'), 'Job Vacancy');?></li>
        					<?php echo (isset($page) && $page == 'Member') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/member'), 'Member');?></li>
        					<?php echo (isset($page) && $page == 'Company') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/company'), 'Company');?></li>
        					<?php echo (isset($page) && $page == 'Galery') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/galery'), 'Galery');?></li>
        					<?php echo (isset($page) && $page == 'About Us') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('administrator/aboutus'), 'About Us');?></li>
        					<?php if ($this->session->userdata('username')!=""){?>
            					<li class="dropdown"><a class="dropdown-toggle" href="#"
            					data-toggle="dropdown" data-hover="dropdown">
            									<?php echo strtoupper($this->session->userdata('username'))?> <b
            						class="caret"></b>
            				</a>
            					<ul class="dropdown-menu">
            						<li><a href="portfolio_example1.html"> Profile </a></li>
            						<li><a href="<?php echo base_url('administrator/logout_action')?>"> Log
            								Out </a></li>
            						<li><a href="portfolio_example3.html"> 2 Columns Portfolio </a></li>
            						<li><a href="portfolio_item.html"> Portfolio Item </a></li>
            					</ul></li>
        					<?php } else {?>
        					<?php echo (isset($page) && $page == 'Login') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(base_url('login'), 'Login');?></li>
        					<?php }?>
			</ul>
		</div>
	</div>
	<!-- end: TOP NAVIGATION CONTAINER -->
</div>