<?php $this->load->view('ekstra/header') ?>

<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<?= form_open('login/register'); ?>

			<div class="form-group">
				<label>NIS</label>
				<input type="text" name="nis" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>

			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="fullname" class="form-control">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" name="address"></textarea>
			</div>

			<div class="form-group">
				<label>Kelas</label>
				<select name="kelas" class="form-control">
					<option value="2f">2F</option>
				</select>
			</div>

			<div class="form-group">
				<label>Telephone</label>
				<input type="text" name="telp" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="" class="btn btn-default">
			</div>


			<?= form_close(); ?>

		</div>

	</div>

</div>

<?php $this->load->view('ekstra/footer') ?>