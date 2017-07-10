<br>
<br>
<br>
<br>

<div class="container">
	<div class="row">
	<?php echo form_open_multipart('kegiatan/save')?>
		<div class="col-md-12">
			
			<!-- Notif Save end -->
		</div>
		<?php echo form_close(); ?>
		
		<?php foreach($show as $data): ?> 	
		<div class="col-md-3">
			<div class="panel panel-primary wow fadeInUp">
				<div class="panel-heading">
					<h3 class="panel-title ">Kegiatan Ekstrakulikuler</h3>
				</div>
				<div class="panel-body">
					<img src="<?php echo base_url('gambar/upload/') ?><?php echo $data->photo ?>" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>