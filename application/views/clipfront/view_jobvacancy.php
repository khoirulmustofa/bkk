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
		<div class="row">
			<?php if ($this->session->userdata('message') <> ''){?>
				<div class="alert alert-success">
					
					<button data-dismiss="alert" class="close">×</button>
					<i class="fa fa-check-circle"></i> <strong>Well done!</strong>
					<?php echo $this->session->userdata('message');?>		
				</div>
				
				<?php }else {echo '';}?>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="pull-right col-md-6">
						
						<form class="" id="searchform"
							action="<?php echo site_url('jobvacancy/index'); ?>">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search"
									name="q" value="<?php echo $q; ?>"> <span
									class="input-group-btn">
												<?php
            if ($q != '') {
                ?>
                                                        <a
									href="<?php echo site_url('jobvacancy'); ?>"
									class="btn btn btn-bricky btn-squared"><i class="clip-close-3"></i></a>
                                                        <?php
            }
            ?>
													<button class="btn btn-main-color btn-squared"
										type="submit">
										<i class="clip-search-3"></i>
									</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
<?php
foreach ($jobvacancy_data as $jobvacancy) {
    ?>
				<div class="col-md-6">
					<!-- start: DEFAULT TREE PANEL -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><?php echo $jobvacancy->name_company ?></h2>
							
						</div>
						<div class="panel-body">
							<h2><?php echo $jobvacancy->name_jobs ?></h2>
							<hr>
							<div id="tree">
								<h3>Job Description :</h3>
								<?php echo $jobvacancy->job_description ?>
								<hr>
								<h3>Job Requerement :</h3>								
								<?php echo $jobvacancy->job_requerement ?>	
								<hr>
								<h3>Benefits :</h3>								
								<?php echo $jobvacancy->benefits ?>								
							</div>
							<?php
    
    if ($this->session->userdata('id_bkk') != "") {
        if ($jobvacancy->id_bkk == $this->session->userdata('id_bkk')) {
            ?>
                            <button type="button"
								class="btn btn-warning">Registered</button>
                            <?php } else {?>
							<a
								href="<?php echo site_url('jobvacancy/apply_jobvacancy/'.$jobvacancy->id_jobs.'/'.$this->session->userdata('id_bkk'))?>"
								class="btn btn-green"> Apply </a>
							<?php
        }
    }
    ?>
						</div>
					</div>
					<!-- end: DEFAULT TREE PANEL -->
				</div>
				<?php
}
?>			
			</div>
			<div class="row">
				<div class="col-md-6">
					<a href="#" class="btn btn-primary">Total Galery : <?php echo $total_rows ?></a>
				</div>
				<div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
			</div>
		</div>
	</section>
</div>