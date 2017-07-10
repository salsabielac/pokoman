<?php $this->load->view('ekstra/header'); ?>

<br>
<br>
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<?php if($this->session->flashdata('msg')): ?>
    	<div class="alert alert-success">
    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    		<?php echo $this->session->flashdata('msg'); ?>
    	</div>
	<?php endif; ?>

		<?php echo form_open('admin/cekLogin')?>
		
		<div class="form-group">
			<legend>Login Admin</legend>
		</div>
		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username" placeholder="nis">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password" placeholder="password">
		</div>
		<div class="form-group">	
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>