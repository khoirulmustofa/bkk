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
									<label class="col-sm-2 control-label" for="varchar">Name Company </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="name_company" id="name_company" placeholder="Name Company" value="<?php echo $name_company; ?>" />
                    <?php echo form_error('name_company') ?>
									</div>
								</div>
                <div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Address Company </label>
									<div class="col-sm-9">
                    <textarea class="form-control col-sm-9 ckeditor" rows="3" name="address_company" id="address_company" placeholder="Address Company"><?php echo $address_company; ?></textarea>
										<?php echo form_error('address_company') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Tlp Company </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="tlp_company" id="tlp_company" placeholder="Tlp Company" value="<?php echo $tlp_company; ?>" />
                    <?php echo form_error('tlp_company') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Email Company </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="email_company" id="email_company" placeholder="Email Company" value="<?php echo $email_company; ?>" />
                    <?php echo form_error('email_company') ?>
									</div>
								</div>
								<input type="hidden" name="id_company"
									value="<?php echo $id_company; ?>" />
								<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
								<a href="<?php echo site_url('administrator/company') ?>"
									class="btn btn-default">Cancel</a>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
