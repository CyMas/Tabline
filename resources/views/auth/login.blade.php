<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>    
	    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/style.css">
	    <link rel="stylesheet" type="text/css" href="/css/style2.css" media="screen">
	    <link rel="stylesheet" type="text/css" href="/css/colors/purple.css" title="green" media="screen" />
  		<link rel="stylesheet" type="text/css" href="/css/animate.css" media="screen">
</head>
  <body>
    <div class="wrapper">
	<div class="container">
	<form method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input name="username" type="text" placeholder="Username">
			<input name="password" type="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button><br><br>
				<br><a href="/register">Click Disini</a> untuk Registrasi
				<br><br><br>
				<div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
           <a href="/"><div class="service-icon">
              <i class="fa fa-desktop icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Back To Home</a></h4>
            </div>
          </div>
		</form>
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