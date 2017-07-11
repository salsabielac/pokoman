<?php $this->load->view('ekstra/header-admin') ?>
<br>
<br>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-striped table-hover" id="keren">
				<thead>
					<tr>
						<th>Nama Kegiatan</th>
						<th>Deskripsi</th>
						<th>Gambar</th>
						<th>OPSI</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($anda as $babon): ?>
					<tr>
						<td><?= $babon->n_kegiatan ?></td>
						<td><?= $babon->d_kegiatan ?></td>
						<td><img width="50" class="img-responsive" src="<?= base_url('gambar/upload')?>/<?= $babon->img_kegi ?>"></td>
						
						<td>
							<a class="btn btn-success" href="<?= base_url('kegiatan/edit') ?>/<?= $babon->id ?>">EDIT</a>
							<a class="btn btn-danger" href="<?= base_url('kegiatan/hapus') ?>/<?= $babon->id ?>">DEL</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('ekstra/footer') ?>