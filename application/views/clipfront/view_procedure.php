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
		<!-- start: ABOUT US CONTAINER -->
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
					<ul class="icon-list animate-group">
					<?php
    foreach ($procedure_data as $procedure) {
        ?>
						<li>
							<div class="timeline animate"
								data-animation-options='{"animation":"scaleToBottom", "duration":"300"}'></div>
							<i class="<?php echo $procedure->icon_procedure ?> circle-icon circle-<?php echo $procedure->back_color ?> animate"
							data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
							<div class="icon-list-content">
								<h2><?php echo $procedure->name_procedure ?></h2>
								<?php echo $procedure->decription_procedure ?>
							</div>
						</li>
						<?php
    }
    ?>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- end: ABOUT US CONTAINER -->
	</section>
</div>