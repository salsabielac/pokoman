<?php $this->load->view('ekstra/header-admin') ?>

<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('http://localhost:8080/pokoman/assets/clean/img/buku.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>EKSTRAKULIKULER</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<?= form_open_multipart('admin/kegiatan'); ?>

			<div class="form-group">
				<label>Nama Kegiatan</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Deskripsi Kegiatan</label>
				<textarea class="form-control" name="descrip"></textarea>
			</div>

			<div class="form-group">
				<label>Gambar Acara</label>
				<input type="file" name="image" class="form-control">
			</div>

			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" name="tgl" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="" class="btn btn-default">
			</div>


			<?= form_close(); ?>

		</div>

	</div>

</div>

<?php $this->load->view('ekstra/footer') ?>