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
	<section class="wrapper portfolio-page">
		<div class="container">
			<ul id="Grid" class="list-unstyled">
<?php
foreach ($galery_data as $galery) {
    ?>
				<li class="col-md-4 col-xs-12">
					<div class="portfolio-item img-thumbnail">
						<img
							src="<?php echo base_url('/assets/galery/').$galery->patch_galery?>"
							class="img-responsive" alt="<?php echo base_url('/assets/galery/').$galery->patch_galery?>" style="width: 340px; height: 255px">

					</div>
				</li>
<?php
}
?>

				<li class="gap"></li>
				<!-- "gap" elements fill in the gaps in justified grid -->
			</ul>
		</div>
	</section>
</div>