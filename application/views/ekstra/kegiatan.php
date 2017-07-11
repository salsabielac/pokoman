<?php $this->load->view('ekstra/header-siswa') ?>
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
		
		<?php foreach($show as $data): ?> 	
		<div class="col-md-12">
			<div class="panel panel-primary wow fadeInUp">
				<div class="panel-heading">
					<h1 class="panel-title "><?= $data->n_kegiatan ?></h1>
				</div>
				<div class="panel-body">
					<img src="<?php echo base_url('gambar/upload/') ?><?php echo $data->img_kegi ?>" class="img-responsive" alt="Image">
				</div>
					<h3><?= $data->d_kegiatan ?></h3>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>


<?php $this->load->view('ekstra/footer') ?>