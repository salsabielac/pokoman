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
						<th>Nama Ekskul</th>
						<th>Nama Siswa</th>
						<th>Alamat</th>
						<th>Kelas</th>
						<th>Telepon</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($anda as $babon): ?>
					<tr>
						<td><?= $babon->nama_ekskul ?></td>
						<td><?= $babon->fullname ?></td>
						<td><?= $babon->address ?></td>
						<td><?= $babon->kelas ?></td>
						<td><?= $babon->telp ?></td>
						
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('ekstra/footer') ?>