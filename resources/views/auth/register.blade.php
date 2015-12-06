<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register</title>    
        
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
            <input name="nama" type="text" placeholder="Nama">
            <input name="username" type="text" placeholder="Username">
            <input name="password" type="password" placeholder="Password">
            <input name="password_confirmation" type="password" placeholder="Password Confirmation">
            <select class="selectpicker" title="Jenis Kelamin" name="jenisKelamin">
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>                          
            <p class="help-block text-danger"></p>
                        
            <input name="ttl" type="text" placeholder="Tempat Tanggal Lahir">
            <textarea rows="5" name="alamat" placeholder="Alamat Lengkap" id="alamat" required data-validation-required-message="Harap di isi dengan benar."></textarea>
                          
                    
            <input name="no_tlp" type="text" placeholder="Nomor Telephone">
            <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </div><br>
                    <td>Sudah punya akun ?<a href="/login">Click disini</a> untuk login</td>
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