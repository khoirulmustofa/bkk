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
									<label class="col-sm-2 control-label" for="varchar">Name Procedure </label>
									<div class="col-sm-9">
										<input type="text" class="form-control col-sm-9" name="name_procedure" id="name_procedure" placeholder="Name Procedure" value="<?php echo $name_procedure; ?>" />
										<?php echo form_error('name_procedure') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="decription_procedure">Decription Procedure </label>

									<div class="col-sm-9">
										<textarea class="form-control col-sm-9 ckeditor" rows="3" name="decription_procedure" id="decription_procedure" placeholder="Decription Procedure"><?php echo $decription_procedure; ?></textarea>
										<?php echo form_error('decription_procedure') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Icon Procedure </label>
									<div class="col-sm-9">
										<input type="text" class="form-control col-sm-9" name="icon_procedure" id="icon_procedure" placeholder="Icon Procedure" value="<?php echo $icon_procedure; ?>" />
										<?php echo form_error('icon_procedure') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Back Color </label>
									<div class="col-sm-9">
										<input type="text" class="form-control col-sm-9" name="back_color" id="back_color" placeholder="Back Color" value="<?php echo $back_color; ?>" />
										<?php echo form_error('back_color') ?>
									</div>
								</div>
								<input type="hidden" name="id_procedure"
									value="<?php echo $id_procedure; ?>" />
								<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
								<a href="<?php echo site_url('administrator/procedure') ?>"
									class="btn btn-default">Cancel</a>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>