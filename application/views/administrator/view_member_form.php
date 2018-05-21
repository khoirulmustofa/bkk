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
									<label class="col-sm-2 control-label"
										class="col-sm-2 control-label" for="varchar">Id Bkk </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="id_bkk"
											id="id_bkk" placeholder="Id Bkk"
											value="<?php echo $id_bkk; ?>" />
										<?php echo form_error('id_bkk') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">NIK </label>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="NIK" id="NIK"
											placeholder="NIK" value="<?php echo $NIK; ?>" />
										<?php echo form_error('NIK') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Password
										member </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="password_member"
											id="password_member" placeholder="Password member"
											<?php echo $button=='Create' ? "style='display: block'" : "style='display: none'";?>
											 value="<?php echo $password_member; ?>" />
										<?php echo form_error('password_member') ?>
										<label class="checkbox-inline"> <input type="checkbox"
											id="id_cek_password" onclick="ShowHidePassword(this)"
											name="cek_password" value="check"> Check if you want to
											change password !!!
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Name member
									</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="name_member"
											id="name_member" placeholder="Name member"
											value="<?php echo $name_member; ?>" />
										<?php echo form_error('name_member') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Address
										member </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="address_member"
											id="address_member" placeholder="Address member"
											value="<?php echo $address_member; ?>" />
										<?php echo form_error('address_member') ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="varchar">Place
										Ofbirth member </label>
									<div class="col-sm-9">
										<input type="text" class="form-control"
											name="place_ofbirth_member" id="place_ofbirth_member"
											placeholder="Place Ofbirth member"
											value="<?php echo $place_ofbirth_member; ?>" />
										<?php echo form_error('place_ofbirth_member') ?>										
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="date">Date Ofbirth
										member </label>
									<div class="col-sm-9">
										<input type="text" class="form-control date-picker"
											data-date-format="yyyy-mm-dd" name="date_ofbirth_member"
											id="date_ofbirth_member" placeholder="Date Ofbirth member"
											value="<?php echo $date_ofbirth_member; ?>" />
										<?php echo form_error('date_ofbirth_member') ?>
									</div>
								</div>
								<input type="hidden" name="id_member"
									value="<?php echo $id_member; ?>" />
								<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
								<a href="<?php echo site_url('administrator/member') ?>"
									class="btn btn-default">Cancel</a>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>