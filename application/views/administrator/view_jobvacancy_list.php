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
			<?php if ($this->session->userdata('message') <> ''){?>
				<div class="alert alert-success">
					<button data-dismiss="alert" class="close">×</button>
					<i class="clip-cancel-circle-2"></i> <strong>Well done!</strong>
					<?php echo $this->session->userdata('message');?>		
				</div>
				
				<?php }?>
				<div class="col-lg-12">

					<div class="col-md-6" style="padding-left: 0px">
						<a href="<?php echo base_url('administrator/jobvacancy_create')?>"
							class="btn btn-success">Add <?php echo $page;?></a>
					</div>
					<div class="col-md-6 text-right" style="padding-right: 0px">
						<form class="" id="searchform"
							action="<?php echo site_url('administrator/jobvacancy'); ?>">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search"
									name="q" value="<?php echo $q; ?>"> <span
									class="input-group-btn">
												<?php
            if ($q != '') {
                ?>
                                                        <a
									href="<?php echo site_url('administrator/jobvacancy'); ?>"
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
					<hr>
					<div class="table-responsive">
						<table class="table table-hover table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Name Jobs</th>
									<th>Id Company</th>
									<th>Job Description</th>
									<th>Job Requerement</th>
									<th>Benefits</th>
									<th>Status Jobs</th>
									<th>Time Active Jobs</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
										<?php
        foreach ($jobvacancy_data as $jobvacancy) {
            ?>
                <tr>
									<td width="80px"><?php echo ++$start ?></td>
									<td><?php echo $jobvacancy->name_jobs ?></td>
									<td><?php echo $jobvacancy->id_company ?></td>
									<td><?php echo $jobvacancy->job_description ?></td>
									<td><?php echo $jobvacancy->job_requerement ?></td>
									<td><?php echo $jobvacancy->benefits ?></td>
									<td><?php echo $jobvacancy->status_jobs ?></td>
									<td><?php echo $jobvacancy->time_active_jobs ?></td>
									<td style="text-align: center" width="200px">
									<a
										href="<?php echo site_url('administrator/jobvacancy_update/'.$jobvacancy->id_jobs)?>"
										class="btn btn-xs btn-teal tooltips" data-placement="top"
										data-original-title="Edit"><i class="fa fa-edit"></i></a> <a
										href="<?php echo site_url('administrator/jobvacancy_delete/'.$jobvacancy
										    ->id_jobs)?>"
										class="btn btn-xs btn-bricky tooltips" data-placement="top"
										data-original-title="Remove"
										onclick="return confirm('Are you sure you want to delete this item?');"><i
											class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
                <?php
        }
        ?>
									</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6" style="padding-left: 0px">
						<a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
					</div>
					<div class="col-md-6 text-right" style="padding-right: 0px">
                <?php echo $pagination ?>
            </div>
				</div>
			</div>
		</div>
	</section>
</div>