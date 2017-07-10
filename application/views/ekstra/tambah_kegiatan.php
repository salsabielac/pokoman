<?php $this->load->view('ekstra/header-admin') ?>

<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<?= form_open('login/kegiatan'); ?>

			<div class="form-group">
				<label>Nama Kegiatan</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Deskripsi Kegiatan</label>
				<textarea class="form-control" name="descrip"></textarea>
			</div>

			<div class="form-group">
				<label>Nama Acara</label>
				<input type="file" name="image" class="form-control">
			</div>

			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" name="image" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="" class="btn btn-default">
			</div>


			<?= form_close(); ?>

		</div>

	</div>

</div>

<?php $this->load->view('ekstra/footer') ?>