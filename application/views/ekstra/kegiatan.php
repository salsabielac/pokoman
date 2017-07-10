<?php $this->load->view('ekstra/header-siswa') ?>

<br>
<br>
<br>
<br>

<div class="container">
	<div class="row">
		
		<?php foreach($show as $data): ?> 	
		<div class="col-md-12">
			<div class="panel panel-primary wow fadeInUp">
				<div class="panel-heading">
					<h3 class="panel-title ">Kegiatan Ekstrakulikuler</h3>
					<!-- <a href="<?= base_url('index.php/').'kegiatan/edit/'.$data->id ?>" class="btn btn-primary pull-right wow bounce"><i class="glyphicon glyphicon-pencil"></i></a> -->
					<!-- <a href="<?= base_url('index.php/').'kegiatan/hapus/'.$data->id ?>" class="btn btn-danger pull-right wow bounce"><i class="glyphicon glyphicon-trash"></i></a> -->
				</div>
				<div class="panel-body">
					<img src="<?php echo base_url('gambar/upload/') ?><?php echo $data->photo ?>" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>


<?php $this->load->view('ekstra/footer') ?>