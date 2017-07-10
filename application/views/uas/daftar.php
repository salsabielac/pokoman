<?php $this->load->view('uas/header') ?>
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
<!-- Main Content -->
<?php if($this->session->flashdata('msg_success')): ?>
<div class="alert alert-success alert-dismissible wow tada" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    <strong><?php echo $this->session->flashdata('msg_success'); ?></strong>
</div>
<?php elseif($this->session->flashdata('msg_err')): ?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    <strong><?php echo $this->session->flashdata('msg_err'); ?></strong>
</div>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Isi data diri Anda dibawah ini.</p>
            
            <?php echo form_open('ekstra/create');?>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <input name="name" type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="nama">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <textarea rows="3" class="form-control" name="address" placeholder="Alamat" id="address" required data-validation-required-message="address"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <input name="email" type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="email">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <input name="telephone" type="telephone" class="form-control" placeholder="Telepon" id="telephone" required data-validation-required-message="telepon">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <input name="class" type="class" class="form-control" placeholder="Kelas" id="class" required data-validation-required-message="class">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <select name="ekstra" id="ekstra" class="form-control">
                        <option value="0">---- Pilih -----</option>
                        <option value="band">Band</option>
                        <option value="basket">Basket</option>
                        <option value="drumband">DrumBand</option>
                        <option value="futsal">Futsal</option>
                        <option value="karate">Karate</option>
                        <option value="padus">Paduan Suara</option>
                        <option value="volly">Volly</option>
                    </select>
                </div>
            </div>
            
            <br>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-default">Submit</button>
                    
                </div>
            </div>
            <?php echo validation_errors();?>
        </div>
    </div>
</div>
<hr>

<?php $this->load->view('uas/footer') ?>