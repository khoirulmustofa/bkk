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
					<button data-dismiss="alert" class="close">�</button>
					<i class="clip-cancel-circle-2"></i> <strong>Well done!</strong>
					<?php echo $this->session->userdata('message');?>		
				</div>
				
				<?php }?>
				<div class="col-lg-12">

					<div class="col-md-6" style="padding-left: 0px">
						<a href="<?php echo base_url('administrator/galery_create')?>"
							class="btn btn-success">Add <?php echo $page;?></a>
					</div>
					<div class="col-md-6 text-right" style="padding-right: 0px">
                <form class="" id="searchform"
							action="<?php echo site_url('administrator/galery'); ?>">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search"
									name="q" value="<?php echo $q; ?>"> <span
									class="input-group-btn">
												<?php
            if ($q != '') {
                ?>
                                                        <a
									href="<?php echo site_url('administrator/galery'); ?>"
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
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Name Galery</th>
									<th>Patch Galery</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
										<?php
        foreach ($galery_data as $galery) {
            ?>
                <tr>
									<td width="80px"><?php echo ++$start ?></td>
									<td><?php echo $galery->name_galery ?></td>
									<td><img
										src="<?php echo base_url('assets/galery/').$galery->patch_galery;?>"
										alt="image" style="width: 50px; height: 50px;"></td>
									<td><a
										href="<?php echo site_url('administrator/galery_update/'.$galery->id_galery)?>"
										class="btn btn-xs btn-teal tooltips" data-placement="top"
										data-original-title="Edit"><i class="fa fa-edit"></i></a> <a
										href="<?php echo site_url('administrator/galery_delete/'.$galery->id_galery)?>"
										class="btn btn-xs btn-bricky tooltips" data-placement="top"
										data-original-title="Remove"
										onclick="return confirm('Are you sure you want to delete this item?');"><i
											class="fa fa-times fa fa-white"></i></a></td>
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