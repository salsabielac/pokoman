<?php $this->load->view('ekstra/header-siswa');
				if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['id'] = $session_data['id'];
			}
?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Panel title</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-hover" id="keren">
						<thead>
							<tr>
								<th>Nama Lengkap</th>
								<th>NIS</th>
								<th>Ekskul</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php foreach($anda as $babon): ?>
								<td><?= $babon->fullname ?></td>
								<td><?= $babon->nis ?></td>
								<td><?= $babon->nama_ekskul ?></td>
								<?php endforeach;?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('ekstra/footer') ?>