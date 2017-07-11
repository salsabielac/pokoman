<?php $this->load->view('ekstra/header') ?>
<header class="intro-header" style="background-image: url('http://localhost:8080/codein/uas/img/contact-bg.jpg')">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Daftar Ekstrakulikuler</h1>
                    <hr class="small">
                    <span class="subheading">Tingkatkan Softskill Bersama Kami</span>
                    
                </div>
            </div>
        </div>
    </div>
</header>
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
					<option value="0">---- Pilih -----</option>
					<option value="1a">1A</option>
					<option value="1b">1B</option>
					<option value="1c">1C</option>
					<option value="2d">2D</option>
					<option value="2e">2E</option>
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