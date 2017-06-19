<br>
<br>
<br>

<?php foreach($find as $data): ?>
	<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title ">Kegiatan Ekstrakulikuler</h3>
				</div>
				<div class="panel-body">
					<img src="<?php echo base_url('gambar/upload/') ?><?php echo $data->photo ?>" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>

	<?php echo form_open_multipart('kegiatan/update')?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-gorup">
					<input name="id" type="hidden" value="<?php echo $data->id ?>">
				</div>
				<div class="form-gorup">
					<label for="">Pilih File : </label>
					<input name="poto" type="file" class="form-control" required>
				</div>
				<br>
				<div class="form-group">
					<input type="submit" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close()?>	
<?php endforeach; ?>