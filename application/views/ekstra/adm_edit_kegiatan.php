<?php $this->load->view('ekstra/header-admin') ?>

<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<?= form_open_multipart('kegiatan/edit/'.$this->uri->segment(3)); ?>

			<div class="form-group">
				<label>Nama Kegiatan</label>
				<input type="text" name="title" class="form-control" value="<?= $emp[0]->n_kegiatan ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi Kegiatan</label>
				<textarea class="form-control" name="descrip"><?= $emp[0]->d_kegiatan ?></textarea>
			</div>

			<div class="form-group">
				<label>Gambar Acara</label>
				<input type="file" name="image" class="form-control">
			</div>

			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" name="tgl" class="form-control"  value="<?= $emp[0]->tgl ?>">
			</div>

			<div class="form-group">
				<input type="submit" name="" class="btn btn-default">
			</div>


			<?= form_close(); ?>

		</div>

	</div>

</div>

<?php $this->load->view('ekstra/footer') ?>