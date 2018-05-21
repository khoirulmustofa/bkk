<div class="main-container">
	<!-- start: STYLE SELECTOR BOX -->

	<!-- end: STYLE SELECTOR BOX -->

	<section class="page-top">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1><?php echo $page;?></h1>
			</div>
			<div class="col-md-8 col-sm-8">
				<ul class="pull-right breadcrumb">
					<li><a href="<?php echo base_url('home')?>"> Home </a></li>
							<?php
    
    if (isset($page) && $page != 'Home') {
        ?>
							<li class="active"><?php echo $page;?></li>
							<?php }?>
							
						</ul>
			</div>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			
			<?php
foreach ($aboutus_data as $aboutus) {
    ?>
			<div class="row">
				<div class="col-md-6">
					<img style="width: 555px; height: 416px"
						src="<?php echo base_url('assets/photoweb/').$aboutus->photo_aboutus;?>" />

				</div>
				<div class="col-md-6">
					
					<?php echo $aboutus->company_profile ?>
					
				</div>
				<div class="col-md-12">
					<h3><?php echo $aboutus->company_name ?></h3>
					<div class="panel-group accordion-custom accordion-teal"
						id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse"
										data-parent="#accordion" href="#collapseOne"> <i
										class="clip-cog-2"></i> Vision
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo $aboutus->vision ?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse"
										data-parent="#accordion" href="#collapseTwo"> <i
										class="clip-cog-2"></i> Mission
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo $aboutus->mission ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			 <?php
}
?>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<h2 class="center">Meet the Team</h2>
					<p class="center">Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
						laoreet dolore magna aliquam erat volutpat.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="team" class="row">
				<div class="col-md-12">
					<div class="row">
						<ul class="team-list animate-group">
								<?php
        foreach ($teams_data as $teams) {
            ?>
									<li class="col-md-3 col-sm-6">
								<div class="thumbnail animate">
									<img
										src="<?php echo base_url('assets/teams/').$teams->photo_team;?>"
										alt=""> <span class="image-overlay"> <a target="_blank"
										href="<?php echo $teams->link_facebook ?>"><i
											data-original-title="Facebook" data-placement="top"
											class="tooltips fa fa-facebook circle-icon circle-small"></i></a>
										<a target="_blank" href="<?php echo $teams->link_linkedin ?>"><i
											data-original-title="Linkedin" data-placement="top"
											class="tooltips fa fa-linkedin circle-icon circle-small"></i></a>
										<a target="_blank" href="<?php echo $teams->link_twitter ?>"><i
											data-original-title="Twitter" data-placement="top"
											class="tooltips fa fa-twitter circle-icon circle-small"></i></a>
										<a target="_blank" href="<?php echo $teams->link_whatsapp ?>"><i
											data-original-title="Whatsapp" data-placement="top"
											class="tooltips fa fa-windows circle-icon circle-small"></i></a></span>
								</div>
								<h3><?php echo $teams->name_team ?></h3>

							</li>
									<?php
        }
        ?>
								</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>