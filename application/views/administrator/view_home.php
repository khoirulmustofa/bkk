<div class="main-container">
	<!-- start: STYLE SELECTOR BOX -->
	
	<section class="page-top">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1><?php echo $page;?></h1>
			</div>
			<?php if (isset($page) && $page != 'Home'){?>
			<div class="col-md-8 col-sm-8">
				<ul class="pull-right breadcrumb">
					<li><a href="<?php echo base_url('administrator/home')?>"> Home </a></li>
							<?php
    if (isset($page) && $page != 'Home') {
        ?>
							<li class="active"><?php echo $page;?></li>
							<?php }?>							
						</ul>
			</div>
			<?php }?>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="center">welcome to web bkk SMK Khoirul Mustofa</h2>
					<h4 class="center">Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
						laoreet dolore magna aliquam erat volutpat.</h4>
					<div class="col-lg-12">
						<div class="panel-body">
							<div class="col-sm-3">
								<button class="btn btn-icon btn-block">
									<i class="fa fa-group"></i> Users <span
										class="badge badge-success"> 4 </span>
								</button>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-icon btn-block">
									<i class="fa fa-group"></i> Users <span
										class="badge badge-success"> 4 </span>
								</button>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-icon btn-block">
									<i class="fa fa-group"></i> Users <span
										class="badge badge-success"> 4 </span>
								</button>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-icon btn-block">
									<i class="fa fa-group"></i> Users <span
										class="badge badge-success"> 4 </span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>