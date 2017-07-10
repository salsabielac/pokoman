<?php $this->load->view('ekstra/header-siswa');
				if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['id'] = $session_data['id'];
			}
?>
<div class="container">
	
	<div class="row">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-12">
					
					<?= form_open('ekstra/pilih'); ?>
					<!-- <input type="hidden" name="fk_siswa" value="<?= $data['id'] ?>"> -->
					<div class="form-group">
						<label>NIS</label>
						<input readonly="true" type="text" name="fk_siswa" class="form-control" value="<?= $data['id'] ?>">
					</div>
					<div class="form-group">
						<label>Pilih Ekstrakulikuler</label>
						<select name="pilih_ekstra" class="form-control">
							<option value="sepakbola">Sepak Bola</option>
							<option value="voli">Voli</option>
							<option value="basket">Basket</option>
							<option value="berenang">Berenang</option>
							<option value="makankrupuk">Makan Krupuk</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="" class="btn btn-default">
					</div>
					<?= form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('ekstra/footer') ?>