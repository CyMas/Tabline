<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Calm breeze login screen</title>    
        <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <div class="wrapper">
 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!-- <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p> -->
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama" required data-validation-required-message="Harap di isi dengan benar.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" id="username" required data-validation-required-message="Harap di isi dengan benar.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password (min 8)" id="password" required data-validation-required-message="Harap di isi dengan benar.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" id="password" required data-validation-required-message="Harap di isi dengan benar.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <select class="selectpicker" title="Jenis Kelamin" name="jenisKelamin">
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                                                        
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" placeholder="TTL (Contoh : Jakarta, 17 Agustus 1945)" id="password" required data-validation-required-message="Harap di isi dengan benar.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Alamat Lengkap</label>
                            <textarea rows="5" name="alamat" class="form-control" placeholder="Alamat Lengkap" id="alamat" required data-validation-required-message="Harap di isi dengan benar."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>No Telepon / HP</label>
                            <input type="text" name="no_tlp" class="form-control" placeholder="No Telepon / HP" id="password" required data-validation-required-message="Harap di isi dengan benar.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
        <script src="js/index.js"></script>
  </body>
</html>