<br>
<br>
<br>
<br>

<div class="container">
	<div class="row">
	<?php echo form_open_multipart('kegiatan/save')?>
		<div class="col-md-12">
			<div class="form-group">
				<label for="">Pilih File : </label>
				<input type="file" name="gambar" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary">
			</div>
			<!-- Notif Save Success start -->
			<div class="form-group">
				<?php if($this->session->flashdata('msg_success')): ?>
				<div class="alert alert-success alert-dismissible wow tada" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
						<strong><?php echo $this->session->flashdata('msg_success'); ?></strong> 
				</div>
				<?php elseif($this->session->flashdata('msg_err')): ?>
				<div class="alert alert-danger alert-dismissible fade in" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
						<strong><?php echo $this->session->flashdata('msg_err'); ?></strong> 
				</div>
				<?php endif; ?>
			</div>
			<!-- Notif Save end -->
		</div>
		<?php echo form_close(); ?>
		
		<?php foreach($show as $data): ?> 	
		<div class="col-md-3">
			<div class="panel panel-primary wow fadeInUp">
				<div class="panel-heading">
					<h3 class="panel-title ">Kegiatan Ekstrakulikuler</h3>
					<a href="<?= base_url('index.php/').'kegiatan/edit/'.$data->id ?>" class="btn btn-primary pull-right wow bounce"><i class="glyphicon glyphicon-pencil"></i></a>
					<a href="<?= base_url('index.php/').'kegiatan/hapus/'.$data->id ?>" class="btn btn-danger pull-right wow bounce"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				<div class="panel-body">
					<img src="<?php echo base_url('gambar/upload/') ?><?php echo $data->photo ?>" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>