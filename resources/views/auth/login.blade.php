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
		<h1>Welcome</h1>

	<form method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input name="email" type="text" placeholder="Username">
			<input name="password" type="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
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
	</ul>
</div>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
