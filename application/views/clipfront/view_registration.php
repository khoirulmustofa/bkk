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
						<i class="clip-cancel-circle-2"></i> <strong>Well done!</strong>
					<?php echo $this->session->userdata('message');?>		
				</div>
				
				<?php }else { ?>
				<div class="col-sm-12">
					<form action="<?php echo $action; ?>" method="post">
					<?php if ($this->session->userdata('name_member')!=""){?>
							<div class="form-group">
							<label for="varchar">Id Bkk <?php echo form_error('id_bkk') ?></label>
							<input type="text" class="form-control" readonly="readonly"
								name="id_bkk" id="id_bkk" placeholder="Id Bkk"
								value="<?php echo $id_bkk; ?>" />
						</div>
							<?php }?>
						
						<div class="form-group">
							<label for="varchar">NIK <?php echo form_error('NIK') ?></label>
							<input type="text" class="form-control" name="NIK" id="NIK"
								placeholder="NIK" value="<?php echo $NIK; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Password member <?php echo form_error('password_member') ?></label>
							<input type="text" class="form-control" name="password_member"
								id="password_member" placeholder="Password member"
								value="<?php echo $password_member; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Name member <?php echo form_error('name_member') ?></label>
							<input type="text" class="form-control" name="name_member"
								id="name_member" placeholder="Name member"
								value="<?php echo $name_member; ?>" />
						</div>
						<div class="form-group">
							<label for="varchar">Address member <?php echo form_error('address_member') ?></label>
							<textarea class="form-control" name="address_member"
								id="address_member" placeholder="Address member" rows="10"><?php echo $address_member; ?></textarea>

						</div>
						<div class="form-group">
							<label for="varchar">Place Ofbirth member <?php echo form_error('place_ofbirth_member') ?></label>
							<input type="text" class="form-control"
								name="place_ofbirth_member" id="place_ofbirth_member"
								placeholder="Place Ofbirth member"
								value="<?php echo $place_ofbirth_member; ?>" />
						</div>
						<div class="form-group">
							<label for="date">Date Ofbirth member <?php echo form_error('date_ofbirth_member') ?></label>
							<input type="text" class="form-control date-picker"
								data-date-format="yyyy-mm-dd" name="date_ofbirth_member"
								id="date_ofbirth_member" placeholder="Date Ofbirth member"
								value="<?php echo $date_ofbirth_member; ?>" />
						</div>
						<div class="form-group">
							<label for="date">Captcha <?php echo form_error('captcha') ?></label>
							<p><?php echo $captcha; ?></p>
							<input type="text" class="form-control" name="captcha"
								placeholder="Masukan Captcha" />
						</div>
						<input type="hidden" name="id_member"
							value="<?php echo $id_member; ?>" />
						<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
						<a href="<?php echo site_url('registration') ?>"
							class="btn btn-default">Cancel</a>
					</form>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
</div>