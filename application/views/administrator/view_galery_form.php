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
						
						<?php
    
    $attributes = array(
        'class' => 'form-horizontal',
        'role' => 'form',
        'method' => 'post'
    );
    echo form_open_multipart($action, $attributes)?>							
								<div class="form-group">
								<label class="col-sm-2 control-label" for="varchar"> Name Galery
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control col-sm-9"
										name="name_galery" id="name_galery" placeholder="Name Galery"
										value="<?php echo $name_galery; ?>" />
																					
											<?php echo form_error('name_galery') ?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="varchar"> Photo
									Galery </label>
								<div class="col-sm-9">
									<input type="file" class="form-control col-sm-9"
										name="patch_galery" id="patch_galery"
										placeholder="Photo Galery"
										value="<?php echo $patch_galery; ?>" />
											<?php
        
        if ($patch_galery != '') {
            ?>
											    <i style='color: red'>Lihat Gambar Saat ini : </i> <a
										target="_BLANK"
										href="<?php echo base_url('assets/galery/').$patch_galery?>">e<?php echo $patch_galery; } ?></a>										
											    
											<?php echo form_error('patch_galery') ?>
									</div>
							</div>

							<input type="hidden" name="id_galery"
								value="<?php echo $id_galery; ?>" />
							<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
							<a href="<?php echo site_url('administrator/galery') ?>"
								class="btn btn-default">Cancel</a>
							<?php echo '</form>'?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>