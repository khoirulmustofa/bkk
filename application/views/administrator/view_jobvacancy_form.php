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
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-edit"></i>
									<?php echo $button." ".$page;?>
									<div class="panel-tools">
								

							</div>
						</div>
						<div class="panel-body">
							<form role="form" action="<?php echo $action; ?>" method="post"
								class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar"> Name Jobs
									</label>
									<div class="col-sm-9">
										<input type="text" class="form-control col-sm-9"
											name="name_jobs" id="name_jobs" placeholder="Name Jobs"
											value="<?php echo $name_jobs; ?>" />
											<?php echo form_error('name_jobs') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="int">Id Company </label>

									<div class="col-sm-9">
										<?php echo cmb_dinamis('id_company', 'km_company', 'name_company', 'id_company', $id_company,'Select the company') ?>
										<?php echo form_error('id_company') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="job_description">Job
										Description </label>
									<div class="col-sm-9">
										<textarea class="ckeditor form-control" cols="10" rows="10"
											name="job_description" id="job_description"><?php echo $job_description; ?></textarea>
											<?php echo form_error('job_description') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="job_requerement">Job
										Requerement </label>
									<div class="col-sm-9">
										<textarea class="ckeditor form-control" cols="10" rows="10"
											name="job_requerement" id="job_requerement"><?php echo $job_requerement; ?></textarea>
											<?php echo form_error('job_requerement') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="benefits">Benefits </label>
									<div class="col-sm-9">
										<textarea class="ckeditor form-control" cols="10" rows="10"
											name="benefits" id="benefits"><?php echo $benefits; ?></textarea>
											<?php echo form_error('benefits') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="enum">Status Jobs </label>
									<div class="col-sm-9">
										<?php echo form_dropdown('status_jobs',array('Y'=>'AKTIF','N'=>'TIDAK AKTIF'),$status_jobs,"class='form-control'");?>
										<?php echo form_error('status_jobs')?>
										
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="date">Time Active
										Jobs </label>
									<div class="col-sm-9">
										<input class="form-control date-picker" type="text"
											data-date-format="yyyy-mm-dd" name="time_active_jobs"
											data-date-viewmode="years" placeholder="Time Active Jobs"
											value="<?php echo $time_active_jobs; ?>"> 
											<?php echo form_error('time_active_jobs') ?>
									</div>
								</div>
								<input type="hidden" name="id_jobs"
									value="<?php echo $id_jobs; ?>" />
								<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
								<a href="<?php echo site_url('administrator/jobvacancy') ?>"
									class="btn btn-default">Cancel</a>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>