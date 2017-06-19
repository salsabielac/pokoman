<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <?php echo form_open('ekstra/update/'.$this->uri->segment(3)); ?>
            <p>Edit Data Ekstrakulikuler</p>
            <?php echo validation_errors();?>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input name="name" value="<?php echo $ekstra[0]->name?>" type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="nama">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <textarea rows="3" class="form-control" name="address" value="<?php echo $ekstra[0]->address?>" placeholder="Alamat" id="address" required data-validation-required-message="address"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input name="email" value="<?php echo $ekstra[0]->email?>" type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="email">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input name="telephone" value="<?php echo $ekstra[0]->telephone?>" type="telephone" class="form-control" placeholder="Telepon" id="telephone" required data-validation-required-message="telepon">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls"> 
                        <input name="class" value="<?php echo $ekstra[0]->class?>" type="class" class="form-control" placeholder="Kelas" id="class" required data-validation-required-message="class">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="row control-group">
                     <div class="form-group col-xs-12 floating-label-form-group controls">
                      <select name="ekstra" value="<?php echo $ekstra[0]->ekstra?>" id="ekstra" class="form-control">
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
                        <?php echo form_close();?>
                    </div>
                </div>
        </div>
    </div>
</div>