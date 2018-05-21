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
						
						<?php $attributes = array(
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'method' => 'post' );
                        echo form_open_multipart($action, $attributes)?>							
								<div class="form-group">
								<label for="varchar" class="col-sm-2 control-label" >Company Name <?php echo form_error('company_name') ?></label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name" value="<?php echo $company_name; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="company_profile" class="col-sm-2 control-label">Company Profile <?php echo form_error('company_profile') ?></label>
								<div class="col-sm-9">
									<textarea class="form-control ckeditor" rows="3" name="company_profile" id="company_profile" placeholder="Company Profile"><?php echo $company_profile; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="vision" class="col-sm-2 control-label">Vision <?php echo form_error('vision') ?></label>
								<div class="col-sm-9">
									<textarea class="form-control ckeditor" rows="3" name="vision" id="vision" placeholder="Vision"><?php echo $vision; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="mission" class="col-sm-2 control-label">Mission <?php echo form_error('mission') ?></label>
								<div class="col-sm-9">
									<textarea class="form-control ckeditor" rows="3" name="mission" id="mission" placeholder="Mission"><?php echo $mission; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="varchar" class="col-sm-2 control-label">Photo Aboutus <?php echo form_error('photo_aboutus') ?></label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="photo_aboutus" id="photo_aboutus" placeholder="Photo Aboutus" value="<?php echo $photo_aboutus; ?>" />
								</div>
							</div>

							<input type="hidden" name="id_aboutus"
								value="<?php echo $id_aboutus; ?>" />
							<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
							<a href="<?php echo site_url('administrator/aboutus') ?>"
								class="btn btn-default">Cancel</a>
							<?php echo '</form>'?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>