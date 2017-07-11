<?php $this->load->view('ekstra/header-siswa');
				if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['id'] = $session_data['id'];
			}
?>
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
							<?php foreach($anda as $babon): ?>
							<tr>
								<td><?= $babon->fullname ?></td>
								<td><?= $babon->nis ?></td>
								<td><?= $babon->nama_ekskul ?></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('ekstra/footer') ?>